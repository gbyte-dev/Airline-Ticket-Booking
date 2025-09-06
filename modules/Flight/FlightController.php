<?php

namespace Modules\Flight\Controllers;

use App\Http\Controllers\Controller;
use Modules\Flight\Models\SeatType;
use Modules\Location\Models\LocationCategory;
use Modules\Flight\Models\Flight;
use Illuminate\Http\Request;
use Modules\Location\Models\Location;
use Modules\Review\Models\Review;
use Modules\Core\Models\Attributes;
use DB;
use Illuminate\Support\Facades\Crypt;
use Cookie;
use Session;

class FlightController extends Controller
{
    protected $flightClass;
    protected $locationClass;

    public function __construct(Flight $flightClass, Location $locationClass)
    {
        $this->flightClass = $flightClass;
        $this->locationClass = $locationClass;
    }

    public function index(Request $request)
    {
		 
	    $currency =   $_COOKIE['currency']??'INR';
        $data['currency'] = $selectedCurrency = $request->query('currency', 'INR');
	   	 if(isset($currency) && ($currency == '' || $selectedCurrency != $currency )){
			  setcookie('currency',  $selectedCurrency, time() + (86400 * 30), "/");
			   session(['currency' => $selectedCurrency]);
		 }else{
		    	 $selectedCurrency = $currency;
			    session(['currency' => $selectedCurrency]);
		 }
		 
        $layout = $this->determineLayout($request);
        $limit = $request->query('limit', setting_item("flight_page_limit_item") ?? 9);
        $is_ajax = $request->query('_ajax');
        $for_map = $request->query('_map', $layout === 'map');

        // Capture user inputs
        $flightRequestData = $this->captureSearchInputs($request);
        $apiResponse = $this->executeFlightSearchAPI($flightRequestData);    	
        if (isset($apiResponse['error'])) {
            return response()->json(['error' => $apiResponse['error']], 500);
        }

         if(isset($apiResponse['searchResult']['tripInfos']['ONWARD'] ) ){
           // Process onward flights
              $apiResponse['searchResult']['tripInfos']['ONWARD'] = $this->processFlights($apiResponse['searchResult']['tripInfos']['ONWARD'], $selectedCurrency);
          }
		  
        // Check if return date is provided
        if (!empty($flightRequestData['returnDate'])) {
            if (isset($apiResponse['searchResult']['tripInfos']['RETURN'])) {
                $apiResponse['searchResult']['tripInfos']['RETURN'] = $this->processFlights($apiResponse['searchResult']['tripInfos']['RETURN'], $selectedCurrency);
            } else {
                // Handle case where no return flight data is available
                $apiResponse['searchResult']['tripInfos']['RETURN'] = [];
            }
        }

        // Filter and sort flights
        $this->filterAndSortFlights($apiResponse, $request, $selectedCurrency, $flightRequestData['returnDate']);

        // Prepare data for the view
        $data['flight_data'] = $apiResponse;
        $data = array_merge($data, ['paxInfo' => $flightRequestData['paxInfo']]);

        if ($is_ajax) {
            return response()->json([
                'fragments' => [
                    '.ajax-search-result' => view('Flight::frontend.ajax.search-result', $data)->render(),
                ],
            ]);
        }

        return view('Flight::frontend.search', $data);
    }

    private function filterAndSortFlights(&$apiResponse, Request $request, $selectedCurrency, $hasReturn)
    {
        $filterStops = $request->input('filters.stops', []);
        $filterTimes = $request->input('attrs.time', []);
        $filterClasses = $request->input('attrs.class', []);
        $filterAirlines = $request->input('attrs.flight', []);
        $sortOrder = $request->input('sort', 'asc');

       
        if (isset($apiResponse['searchResult']['tripInfos']['ONWARD'])) {
            $apiResponse['searchResult']['tripInfos']['ONWARD'] = $this->filterFlights(
                $apiResponse['searchResult']['tripInfos']['ONWARD'],
                $filterStops,
                $filterTimes,
                $filterClasses,
                $filterAirlines
            );
        } else {
            $apiResponse['searchResult']['tripInfos']['ONWARD'] = [];
        }
         
        if ($hasReturn) {
            // Filter return flights
            $apiResponse['searchResult']['tripInfos']['RETURN'] = $this->filterFlights(
                $apiResponse['searchResult']['tripInfos']['RETURN'],
                $filterStops,
                $filterTimes,
                $filterClasses,
                $filterAirlines
            );
        }

         if(isset($apiResponse['searchResult']['tripInfos']['ONWARD'] )){
                  // Sort onward flights
                $apiResponse['searchResult']['tripInfos']['ONWARD'] = $this->sortFlights(  $apiResponse['searchResult']['tripInfos']['ONWARD'] , $sortOrder,   $selectedCurrency  );
         }
		 
        if ($hasReturn) {
            // Sort return flights
            $apiResponse['searchResult']['tripInfos']['RETURN'] = $this->sortFlights(
                $apiResponse['searchResult']['tripInfos']['RETURN'],
                $sortOrder,
                $selectedCurrency
            );
        }
    }

    private function processFlights($flights, $selectedCurrency)
    {
             
        return array_map(function ($flight) use ($selectedCurrency) {
            $flight['totalPriceList'] = array_map(function ($price) use ($selectedCurrency) {
                $price['fd']['ADULT']['fC']['TF'] = $this->convertCurrency($price['fd']['ADULT']['fC']['TF'], $selectedCurrency);
			///	$price['fd']['ADULT']['fC']['BF'] = $this->convertCurrency($price['fd']['ADULT']['fC']['BF'], $selectedCurrency);
			//	$price['fd']['ADULT']['fC']['TAF'] = $this->convertCurrency($price['fd']['ADULT']['fC']['TAF'], $selectedCurrency);
			//	$price['fd']['ADULT']['fC']['DIS'] = $this->convertCurrency($price['fd']['ADULT']['fC']['DIS']??0, $selectedCurrency);
                return $price;
            }, $flight['totalPriceList']);
            return $flight;
        }, $flights);
    }

    private function filterFlights($flights, $filterStops, $filterTimes, $filterClasses, $filterAirlines)
    {
        return array_filter($flights, function ($flight) use ($filterStops, $filterTimes, $filterClasses, $filterAirlines) {
            foreach ($flight['sI'] as $segment) {
                $numStops = count($flight['sI']) - 1; // Number of stops
                if (!empty($filterStops) && !in_array((string)$numStops, $filterStops) && !in_array('non_stop', $filterStops)) {
                    return false;
                }

                // Check departure time
                $departureTime = $this->getTimeCategory($segment['dt']);
                if (!empty($filterTimes) && !in_array($departureTime, $filterTimes)) {
                    return false;
                }

                // Check class filter
                $flightClass = $flight['totalPriceList'][0]['fd']['ADULT']['cc'] ?? null;
                if ($flightClass && in_array($flightClass, $filterClasses)) {
                    return true;
                }

                // Check airline filter
                $airline = $segment['fD']['aI']['name'];
                if (!empty($filterAirlines) && !in_array($airline, $filterAirlines)) {
                    return false;
                }
            }
            return true;
        });
    }

    private function sortFlights($flights, $order, $selectedCurrency)
    {
        usort($flights, function ($a, $b) use ($order, $selectedCurrency) {
            $fareA = $this->convertCurrency($a['totalPriceList'][0]['fd']['ADULT']['fC']['TF'], $selectedCurrency);
            $fareB = $this->convertCurrency($b['totalPriceList'][0]['fd']['ADULT']['fC']['TF'], $selectedCurrency);

            switch ($order) {
                case 'asc':
                    return $fareA <=> $fareB;
                case 'desc':
                    return $fareB <=> $fareA;
                case 'stops_asc':
                    return (count($a['sI']) - 1) <=> (count($b['sI']) - 1);
                case 'stops_desc':
                    return (count($b['sI']) - 1) <=> (count($a['sI']) - 1);
                case 'duration_asc':
                    return array_sum(array_column($a['sI'], 'duration')) <=> array_sum(array_column($b['sI'], 'duration'));
                case 'duration_desc':
                    return array_sum(array_column($b['sI'], 'duration')) <=> array_sum(array_column($a['sI'], 'duration'));
                default:
                    return 0;
            }
        });

        return $flights;
    }

    private function getTimeCategory($time)
    {
        $timestamp = strtotime($time);
        $hour = date('H', $timestamp);

        if ($hour >= 0 && $hour < 9) {
            return 'early_morning';
        } elseif ($hour >= 9 && $hour < 12) {
            return 'morning';
        } elseif ($hour >= 12 && $hour < 17) {
            return 'afternoon';
        } elseif ($hour >= 17 && $hour < 21) {
            return 'evening';
        } else {
            return 'night';
        }
    }

    private function captureSearchInputs(Request $request)
    {
        $seatTypeArray = $request->input('seat_type', []);
        return [
            'fromWhere' => $request->input('from_where'),
            'toWhere' => $request->input('to_where'),
            'date' => $request->input('date'),
            'returnDate' => $request->input('return_date'),
            'paxInfo' => [
                'ADULT' => isset($seatTypeArray[0]) ? (int)$seatTypeArray[0] : 1,
                'CHILD' => isset($seatTypeArray[1]) ? (int)$seatTypeArray[1] : 0,
                'INFANT' => isset($seatTypeArray[2]) ? (int)$seatTypeArray[2] : 0
            ],
            'selectedCabin' => $request->input('seating_seat', 'any')
        ];
    }

    private function executeFlightSearchAPI($flightRequestData)
    {

        $apiKey = '1108638608b81018-36ac-448d-b318-953cc1afb894'; // Replace with your API key
        $cabinClasses = $flightRequestData['selectedCabin'] === 'any' ? [
            ['code' => 'ECONOMY', 'name' => 'Economy Class'],
            ['code' => 'PREMIUM_ECONOMY', 'name' => 'Premium Economy Class'],
            ['code' => 'BUSINESS', 'name' => 'Business Class'],
            ['code' => 'FIRST', 'name' => 'First Class']
        ] : [
            ['code' => $flightRequestData['selectedCabin'], 'name' => ucfirst(strtolower($flightRequestData['selectedCabin'])) . ' Class']
        ];

        $requestData = [
            'searchQuery' => [
                'cabinClasses' => $cabinClasses,
                'paxInfo' => $flightRequestData['paxInfo'],
                'routeInfos' => [
                    [
                        'fromCityOrAirport' => ['code' => $flightRequestData['fromWhere']],
                        'toCityOrAirport' => ['code' => $flightRequestData['toWhere']],
                        'travelDate' => $flightRequestData['date']
                    ]
                ],
                'searchModifiers' => [
                    'isDirectFlight' => true,
                    'isConnectingFlight' => true
                ]
            ]
        ];

        // Add return search if returnDate is provided
        if (!empty($flightRequestData['returnDate'])) {
            $requestData['searchQuery']['routeInfos'][] = [
                'fromCityOrAirport' => ['code' => $flightRequestData['toWhere']],
                'toCityOrAirport' => ['code' => $flightRequestData['fromWhere']],
                'travelDate' => $flightRequestData['returnDate']
            ];
        }

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://tripjack.com/fms/v1/air-search-all',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'apikey: ' . $apiKey,
            ],
            CURLOPT_POSTFIELDS => json_encode($requestData),
        ]);

        $response = curl_exec($curl);
        if ($error = curl_error($curl)) {
            curl_close($curl);
            return ['error' => "cURL Error: $error"];
        }
		
        curl_close($curl);


        return json_decode($response, true);
    }

    private function convertCurrency($amount, $currency, $conversionRates = ['INR' => 1, 'USD' => 1, 'CAD' => 0.016])
    {
        return isset($conversionRates[$currency]) ? $amount * $conversionRates[$currency] : $amount;
    }

    private function determineLayout(Request $request)
    {
        $layout = setting_item("flight_layout_search", 'normal');
        return $request->query('_layout') ?? $layout;
    }
}
