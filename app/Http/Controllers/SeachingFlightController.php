<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Location\Models\Location;

class SeachingFlightController extends Controller
{
    public function SearchFlight(Request $request)
    {
        $data = $request->all();
        
        $fromWhere = $request->input('from_where');
        $toWhere = $request->input('to_where');
        $date = $request->input('date');
       
        $seatTypeArray = $request->input('seat_type', []);
		
        $adults = isset($seatTypeArray[0]) ? (int) $seatTypeArray[0] : 0; 
        $children = isset($seatTypeArray[1]) ? (int) $seatTypeArray[1] : 0;
        $infants = isset($seatTypeArray[2]) ? (int) $seatTypeArray[2] : 0;

        $apiKey = env('FLIGHTAPIKEY'); //'11086386645f9f73-2147-4ab2-8016-aa9159942a11';
        $urlflight = env('APIURL');
        $curl = curl_init();
        $selectedCabin = $request->input('seating_seat', 'any');

        // Determine cabin classes based on selected cabin
        $cabinClasses = ($selectedCabin === 'any') ? [
            ['code' => 'ECONOMY', 'name' => 'Economy Class'],
            ['code' => 'PREMIUM_ECONOMY', 'name' => 'Premium Economy Class'],
            ['code' => 'BUSINESS', 'name' => 'Business Class'],
            ['code' => 'FIRST', 'name' => 'First Class']
        ] : [
            ['code' => $selectedCabin, 'name' => ucfirst(strtolower($selectedCabin)) . ' Class']
        ];

        $paxInfo = [
            'ADULT' => $adults,
            'CHILD' => $children,
            'INFANT' => $infants
        ];



        // Define the request data
        $requestData = [
            'searchQuery' => [
                'cabinClasses' => $cabinClasses,
                'paxInfo' => $paxInfo,
                'routeInfos' => [
                    [
                        'fromCityOrAirport' => [
                            'code' => $fromWhere  // Use variable from request
                        ],
                        'toCityOrAirport' => [
                            'code' => $toWhere    // Use variable from request
                        ],
                        'travelDate' => $date       // Use variable from request
                    ]
                ],
                'searchModifiers' => [
                    'isDirectFlight' => true,
                    'isConnectingFlight' => true
                ]
            ]
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => $urlflight.'/fms/v1/air-search-all',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'apikey: ' . $apiKey,
            ],
            CURLOPT_POSTFIELDS => json_encode($requestData),
        ]);

        $response = curl_exec($curl);

        if ($error = curl_error($curl)) {
            echo "cURL Error: $error";
            exit;
        }

        $data = json_decode($response, true);
        curl_close($curl);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        
    }
}
