<?php



namespace Modules\Booking\Controllers;


use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Mockery\Exception;
use Modules\Booking\Events\BookingCreatedEvent;
use Modules\Booking\Events\BookingUpdatedEvent;
use Modules\Booking\Events\EnquirySendEvent;
use Modules\Booking\Events\SetPaidAmountEvent;
use Modules\Booking\Models\BookingPassenger;
use Modules\User\Events\SendMailUserRegistered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Booking\Models\Booking;
use Modules\Booking\Models\FlightBooking;
use Modules\Booking\Models\Enquiry;
use App\Helpers\ReCaptchaEngine;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail; // Ensure this line is included
use App\Mail\BookingMail;

class BookingController extends \App\Http\Controllers\Controller

{

    use AuthorizesRequests;



    protected $booking;

    protected $enquiryClass;

    protected $bookingInst;



    public function __construct(Booking $booking, Enquiry $enquiryClass)

    {

        
        $this->booking = $booking;

        $this->enquiryClass = $enquiryClass;

    }




    protected function validateCheckout($code)
    {
        if (!is_enable_guest_checkout() and !Auth::check()) {
            $error = __("You have to login in to do this");
            if (\request()->isJson()) {
                return $this->sendError($error)->setStatusCode(401);
            }
            return redirect(route('login', ['redirect' => \request()->fullUrl()]))->with('error', $error);
        }
        $booking = $this->booking::where('code', $code)->first();
        //$this->bookingInst = $booking;
        if (empty($booking)) {
            abort(404);
        }
        if (!is_enable_guest_checkout() and $booking->customer_id != Auth::id()) {
            abort(404);
        }

        return true;
    }

public function checkout(Request $request, $code)
{
    // Convert query string back to an array
    $flightDetails = Crypt::decrypt($code);
    $combo = [];
    $godata = [];
    $datareturn = [];
    $totalmoney = 0;
    $oneWay = [];    
    if (isset($flightDetails['type'])) {
        $godata = Crypt::decrypt($request->input('flightdatago') ?? '');
        $datareturn = Crypt::decrypt($request->input('flightdatareturn') ?? []);
        $totalmoney = $request->input('totalmoney');
    }
    if (isset($flightDetails['combo'])) {
        $combo = Crypt::decrypt($request->input('code') ?? []);
    }
    if (isset($flightDetails['oneWay'])) {
        $oneWay = Crypt::decrypt($request->input('code') ?? []);
    }
    
    if (!empty($godata['flight_id']) || !empty($oneWay['flight_id']) || !empty($combo['flight_id'])) {
        $id = $godata['flight_id'] ?? $oneWay['flight_id'] ?? $combo['flight_id'];
        $requestData = [
            "id" => $id,
            "flowType" => "SEARCH"
        ];
        
        $apiKey = '11086386645f9f73-2147-4ab2-8016-aa9159942a11'; // Replace with your API key
        $apiUrl = "https://tripjack.com/fms/v2/farerule";
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $apiUrl,
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
            return response()->json(['error' => "cURL Error: $error"], 500);
        }

        curl_close($curl);
        
        // Decode the response and check for errors
        $decodedResponse = json_decode($response, true);
        if (isset($decodedResponse['error'])) {
            return response()->json(['error' => $decodedResponse['error']], 500);
        }
        
        // Optionally, if you want to return the response to the view:
    }

    if (!empty($datareturn['flight_id'])) {
        $id = $datareturn['flight_id'];
        $requestData = [
            "id" => $id,
            "flowType" => "SEARCH"
        ];
        
        $apiKey = '11086386645f9f73-2147-4ab2-8016-aa9159942a11'; // Replace with your API key
        $apiUrl = "https://tripjack.com/fms/v2/farerule";
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $apiUrl,
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
            return response()->json(['error' => "cURL Error: $error"], 500);
        }

        curl_close($curl);
        
        // Decode the response and check for errors
        $decodedResponseReturn = json_decode($response, true);
        if (isset($decodedResponseReturn['error'])) {
            return response()->json(['error' => $decodedResponseReturn['error']], 500);
        }
    }

    return view('Booking::frontend.checkout', [
        'flightDetails' => $flightDetails ?? '',
        'godata' => $godata ?? '',
        'datareturn' => $datareturn ?? '',
        'totalmoney' => $totalmoney ?? '',
        'combo' => $combo ?? '',
        'oneWay' => $oneWay ?? '',
        'fareRules' => $decodedResponse ?? '',
        'fareRulesReturn' => $decodedResponseReturn ?? '',
    ]);
}

 
public function flightBooking(Request $request) {
    // Get all request data
    $data = $request->all();
  //dd( $data);


    \Log::info('Incoming Data:', $data);

    function generateUniqueBookingId() {
        do {
            $firstDigit = rand(1, 9); 
            $remainingDigits = str_pad(rand(0, 999999999999), 11, '0', STR_PAD_LEFT);
            $bookingId = $firstDigit . $remainingDigits;
        } while (FlightBooking::where('booking_id', $bookingId)->exists());
        return $bookingId;
    }

    // Generate a unique booking ID
    $uniqueBookingId = generateUniqueBookingId();
    if (isset($data['flightNumbers']) && isset($data['departureTimes']) && isset($data['arrivalTimes']) && isset($data['durationText'])) {
        $bookingData = [
        'booking_id' => $uniqueBookingId, // Add the unique booking ID
        'airCode' => $data['airCode'] ?? '',
        'code' => $data['code'] ?? '',
        'airName' => $data['airName'] ?? '',
        'flightNumbers' => $data['flightNumbers'] ?? '',
        'departureTimes' => $data['departureTimes'] ?? '',
        'arrivalTimes' => $data['arrivalTimes'] ?? '',
        'durationText' => $data['durationText'] ?? '',
        'departureDate' => date('Y-m-d', strtotime($data['departureDate'] ?? '')),
        'stopText' => $data['stopText'] ?? '',
        'departureLocation' => $data['departureLocation'] ?? '',
        'arrivalLocation' => $data['arrivalLocation'] ?? '',
        'adults' => (int)($data['adults'] ?? 0),
        'children' => (int)($data['children'] ?? 0),
        'infants' => (int)($data['infants'] ?? 0),
        'totalBaseFare' => (float)($data['totalBaseFare'] ?? 0),
        'totalTaxes' => (float)($data['totalTaxes'] ?? 0),
        'totalDiscount' => (float)($data['totalDiscount'] ?? 0),
        'totalFare' => (float)($data['totalFare'] ?? 0),
        'first_name' => $data['first_name'] ?? '',
        'last_name' => $data['last_name'] ?? '',
        'email' => $data['email'] ?? '',
        'phone' => $data['phone'] ?? '',
        'address' => $data['address'] ?? '',
        'city' => $data['city'] ?? '',
        'state' => $data['state'] ?? '',
        'zip_code' => $data['zip_code'] ?? '',
        'country' => $data['country'] ?? '',
        'currency_type' => $data['currency_type'] ?? '',
        'customer_notes' => $data['customer_notes'] ?? '',
        'arrivalDate' => $data['arrivalDate'] ?? '',
        'flight_details'=>$data['flight_details']?? '',
        'flight_class'=>$data['flight_class']?? '',
        'from' => $data['from'] ?? null,
        'to' => $data['to'] ?? null,
        'date' => $data['date'] ?? null,
        'returnDate' => $data['return_date'] ?? null,
        'term_conditions' => $data['term_conditions'] === 'on' || $data['term_conditions'] === '',
    ];

    // Handle stopsTime
    if (isset($data['stopsTime'])) {
        $bookingData['stopsTime'] = $data['stopsTime'];
    } else {
        $bookingData['stopsTime'] = null; // or set a default value
    }

    // Handle adults details
    $adults = [];
    for ($i = 0; $i < $data['adults']; $i++) {
        $adults[] = [
            'fname' => $data['adult_fname'][$i] ?? null,
            'lname' => $data['adult_lname'][$i] ?? null,
            'date' => $data['adult_date'][$i] ?? null,
            'gender' => $data['adult_gender'][$i] ?? null,
        ];
    }


    $bookingData['adults_details'] = json_encode($adults);

    // Handle children details
    $children = [];
    for ($i = 0; $i < ($data['children'] ?? 0); $i++) {
        $children[] = [
            'fname' => $data['child_fname'][$i] ?? null,
            'lname' => $data['child_lname'][$i] ?? null,
            'gender' => $data['child_gender'][$i] ?? null,
            'dob' => $data['child_dob'][$i] ?? null,
        ];
    }
    $bookingData['children_details'] = json_encode($children);

    // Handle infants details
    $infants = [];
    for ($i = 0; $i < ($data['infants'] ?? 0); $i++) {
        $infants[] = [
            'fname' => $data['infant_fname'][$i] ?? null,
            'lname' => $data['infant_lname'][$i] ?? null,
            'date' => $data['adult_date'][$i] ?? null,
            'gender' => $data['infant_gender'][$i] ?? null,
        ];
    }
    $bookingData['infants_details'] = json_encode($infants);
    }else{
        $bookingData = [
        'booking_id' => $uniqueBookingId, // Add the unique booking ID
        'adults' => (int)($data['adults']?? 0),
        'children' => (int)($data['children'] ?? 0),
        'infants' => (int)($data['infants'] ?? 0),
        'first_name' => $data['first_name'] ?? '',
        'last_name' => $data['last_name'] ?? '',
        'email' => $data['email'] ?? '',
        'phone' => $data['phone'] ?? '',
        'address' => $data['address'] ?? '',
        'city' => $data['city'] ?? '',
        'state' => $data['state'] ?? '',
        'zip_code' => $data['zip_code'] ?? '',
        'country' => $data['country'] ?? '',
        'customer_notes' => $data['customer_notes'] ?? '',
        'return' => $data['return'] ?? '',
        'departure' => $data['departure'] ?? '',
        'totalFare' => (float)$data['totalFare']??'',
        'currency_type'=>$data['currency_type']??'',
        'flight_class'=>$data['flight_class']?? '',
        'term_conditions' => $data['term_conditions'] === 'on' || $data['term_conditions'] === '',
        ];
    //second loop

    $passengers_details = [
        'adult' => [],
        'children' => [],
        'infants' => [],
    ];

    // Populate adults
    for ($i = 0; $i < count($data['adult_fname']); $i++) {
        $passengers_details['adult'][] = [
            'fname' => $data['adult_fname'][$i],
            'lname' => $data['adult_lname'][$i],
            'date' => $data['adult_date'][$i],
            'gender' => $data['adult_gender'][$i],
        ];
    }

    // $bookingData['adults_details'] = json_encode($adults);
    $bookingData['adults_details'] = json_encode($passengers_details['adult']);

    // Populate children
    for ($i = 0; $i < count($data['child_fname']  ?? []); $i++) {

        $passengers_details['children'][] = [
            'fname' => $data['child_fname'][$i] ?? '',
            'lname' => $data['child_lname'][$i] ?? '',
            'gender' => $data['child_gender'][$i] ?? '',
            'dob' => $data['child_dob'][$i] ?? '',
        ];
    }
    $bookingData['children_details'] = json_encode($passengers_details['children']);

    // Populate infants
    for ($i = 0; $i < count($data['infant_fname'] ?? []); $i++) {
        $passengers_details['infants'][] = [
            'fname' => $data['infant_fname'][$i]?? '',
            'lname' => $data['infant_lname'][$i]?? '',
            'gender' => $data['infant_gender'][$i]?? '',
            'dob' => $data['infant_dob'][$i]?? '',
        ];
    }
    // $bookingData['infants_details'] = json_encode($infants);
    $bookingData['infants_details'] = json_encode($passengers_details['infants']);
}
    // Create a new flight booking
    try {
        $booking = FlightBooking::create($bookingData);
        $emailTo = env('EMAIL_TO')??'';
        $request->session()->flash('succes', 'Flight booking created successfully!');
        try {
            if (!empty($bookingData['email'])) { // Check if email is not empty
                // Mail::to($bookingData['email'])->send(new BookingMail($bookingData));
                Mail::to($emailTo)->send(new BookingMail($bookingData));
            } else {
                // Log if the email address is empty or invalid
                \Log::warning('Email address is empty, email not sent.');
                die('Email address is empty.'); // Terminate execution if needed
            }
        } catch (Exception $e) {
            // Log the exception message
            \Log::error('Email sending failed: ' . $e->getMessage());
            die('Email sending failed: ' . $e->getMessage()); // Terminate execution on failure
        }

        return redirect()->route('booking.code', ['code' => $uniqueBookingId])->with('success', 'Booking created successfully!');

    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to create booking.', 'message' => $e->getMessage()], 500);
    }
}


 public function detail(Request $request, $code)
    {
        // dd($code);
        $booking = FlightBooking::where('booking_id', $code)->firstOrFail();

        return view('Booking::frontend.detail', compact('booking'))->with('success', 'Booking successfully!');
    }



    public function checkStatusCheckout($code)

    {

        $booking = $this->booking::where('code', $code)->first();
        $data = [  'error'    => false,   'message'  => '',   'redirect' => ''  ];

        if (empty($booking)) {
            $data = [   'error'    => true,   'redirect' => url('/')   ];
        }

        if (!is_enable_guest_checkout() and $booking->customer_id != Auth::id()) {

            $data = [  'error'    => true, 'redirect' => url('/')   ];

        }

        if (!in_array($booking->status, ['draft', 'unpaid'])) {

            $data = [

                'error'    => true,

                'redirect' => url('/')

            ];

        }

        return response()->json($data, 200);

    }



    protected function validateDoCheckout()

    {



        $request = \request();

        if (!is_enable_guest_checkout() and !Auth::check()) {

            return $this->sendError(__("You have to login in to do this"))->setStatusCode(401);

        }



        if (auth()->user() && !auth()->user()->hasVerifiedEmail() && setting_item('enable_verify_email_register_user') == 1) {

            return $this->sendError(__("You have to verify email first"), ['url' => url('/email/verify')]);

        }

        /**

         * @param Booking $booking

         */

        $validator = Validator::make($request->all(), [

            'code' => 'required',

        ]);

        if ($validator->fails()) {

            return $this->sendError('', ['errors' => $validator->errors()]);

        }

        $code = $request->input('code');



        $booking = $this->booking::where('code', $code)->first();

        $this->bookingInst = $booking;



        if (empty($booking)) {

            abort(404);

        }

        if (!is_enable_guest_checkout() and $booking->customer_id != Auth::id()) {

            abort(404);

        }

        return true;

    }



    public function doCheckout(Request $request)

    {

        /**

         * @var $booking Booking

         * @var $user User

         */

        $res = $this->validateDoCheckout();

        if ($res !== true) return $res;

        $user = auth()->user();



        $booking = $this->bookingInst;



        if (!in_array($booking->status, ['draft', 'unpaid'])) {

            return $this->sendError('', [

                'url' => $booking->getDetailUrl()

            ]);

        }

        $service = $booking->service;

        if (empty($service)) {

            return $this->sendError(__("Service not found"));

        }



        $is_api = request()->segment(1) == 'api';



        /**

         * Google ReCapcha

         */

        if (!$is_api and ReCaptchaEngine::isEnable() and setting_item("booking_enable_recaptcha")) {

            $codeCapcha = $request->input('g-recaptcha-response');

            if (!$codeCapcha or !ReCaptchaEngine::verify($codeCapcha)) {

                return $this->sendError(__("Please verify the captcha"));

            }

        }



        $messages = [];

        $rules = [

            'first_name'      => 'required|string|max:255',

            'last_name'       => 'required|string|max:255',

            'email'           => 'required|string|email|max:255',

            'phone'           => 'required|string|max:255',

            'country'         => 'required',

            'term_conditions' => 'required',

        ];





        $confirmRegister = $request->input('confirmRegister');

        if (!empty($confirmRegister)) {

            $rules['password'] = 'required|string|confirmed|min:6|max:255';

            $rules['email'] = ['required', 'email', 'max:255', Rule::unique('users')];

            $messages['password.confirmed'] = __('The password confirmation does not match');

            $messages['password.min'] = __('The password must be at least 6 characters');

        }



        $how_to_pay = $request->input('how_to_pay', '');

        $credit = $request->input('credit', 0);

        $payment_gateway = $request->input('payment_gateway');



        // require payment gateway except pay full

        if (empty(floatval($booking->deposit)) || $how_to_pay == 'deposit' || !auth()->check()) {

            $rules['payment_gateway'] = 'required';

        }



        if (auth()->check()) {

            if ($credit > $user->balance) {

                return $this->sendError(__("Your credit balance is :amount", ['amount' => $user->balance]));

            }

        } else {

            // force credit to 0 if not login

            $credit = 0;

        }



        $rules = $service->filterCheckoutValidate($request, $rules);

        if (!empty($rules)) {



            $messages['term_conditions.required'] = __('Term conditions is required field');

            $messages['payment_gateway.required'] = __('Payment gateway is required field');



            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {

                return $this->sendError('', ['errors' => $validator->errors()]);

            }

        }



        $wallet_total_used = credit_to_money($credit);

        if ($wallet_total_used > $booking->total) {

            $credit = money_to_credit($booking->total, true);

            $wallet_total_used = $booking->total;

        }



        if ($res = $service->beforeCheckout($request, $booking)) {

            return $res;

        }



        if ($how_to_pay == 'full' and !empty($booking->deposit)) {

            $booking->addMeta('old_deposit', $booking->deposit ?? 0);

        }

        $oldDeposit = $booking->getMeta('old_deposit', 0);

        if (empty(floatval($booking->deposit)) and !empty(floatval($oldDeposit))) {

            $booking->deposit = $oldDeposit;

        }



        // Normal Checkout

        $booking->first_name = $request->input('first_name');

        $booking->last_name = $request->input('last_name');

        $booking->email = $request->input('email');

        $booking->phone = $request->input('phone');

        $booking->address = $request->input('address_line_1');

        $booking->address2 = $request->input('address_line_2');

        $booking->city = $request->input('city');

        $booking->state = $request->input('state');

        $booking->zip_code = $request->input('zip_code');

        $booking->country = $request->input('country');

        $booking->customer_notes = $request->input('customer_notes');

        $booking->gateway = $payment_gateway;

        $booking->wallet_credit_used = floatval($credit);

        $booking->wallet_total_used = floatval($wallet_total_used);

        $booking->pay_now = floatval((int)$booking->deposit == null ? $booking->total : (int)$booking->deposit);



        // If using credit

        if ($booking->wallet_total_used > 0) {

            if ($how_to_pay == 'full') {

                $booking->deposit = 0;

                $booking->pay_now = $booking->total;

            } elseif ($how_to_pay == 'deposit') {

                // case guest input credit more than "pay deposit" need to pay

                // Ex : pay deposit 10$ but guest input 20$ -> minus credit balance = 10$

                if ($wallet_total_used > $booking->deposit) {

                    $wallet_total_used = $booking->deposit;

                    $booking->wallet_total_used = floatval($wallet_total_used);

                    $booking->wallet_credit_used = money_to_credit($wallet_total_used, true);

                }



            }



            $booking->pay_now = max(0, $booking->pay_now - $wallet_total_used);

            $booking->paid = $booking->wallet_total_used;

        } else {

            if ($how_to_pay == 'full') {

                $booking->deposit = 0;

                $booking->pay_now = $booking->total;

            }

        }



        $gateways = get_payment_gateways();

        if ($booking->pay_now > 0) {

            $gatewayObj = new $gateways[$payment_gateway]($payment_gateway);

            if (!empty($rules['payment_gateway'])) {

                if (empty($gateways[$payment_gateway]) or !class_exists($gateways[$payment_gateway])) {

                    return $this->sendError(__("Payment gateway not found"));

                }

                if (!$gatewayObj->isAvailable()) {

                    return $this->sendError(__("Payment gateway is not available"));

                }

            }

        }



        if ($booking->wallet_credit_used && auth()->check()) {

            try {

                $transaction = $user->withdraw($booking->wallet_credit_used, [

                    'wallet_total_used' => $booking->wallet_total_used

                ], $booking->id);



            } catch (\Exception $exception) {

                return $this->sendError($exception->getMessage());

            }

            $booking->wallet_transaction_id = $transaction->id;

        }

        $booking->save();



//        event(new VendorLogPayment($booking));



        if (Auth::check()) {

            $user = auth()->user();

            $user->first_name = $request->input('first_name');

            $user->last_name = $request->input('last_name');

            $user->phone = $request->input('phone');

            $user->address = $request->input('address_line_1');

            $user->address2 = $request->input('address_line_2');

            $user->city = $request->input('city');

            $user->state = $request->input('state');

            $user->zip_code = $request->input('zip_code');

            $user->country = $request->input('country');

            $user->save();

        } elseif (!empty($confirmRegister)) {

            $user = new User();

            $user->first_name = $request->input('first_name');

            $user->last_name = $request->input('last_name');

            $user->email = $request->input('email');

            $user->phone = $request->input('phone');

            $user->address = $request->input('address_line_1');

            $user->address2 = $request->input('address_line_2');

            $user->city = $request->input('city');

            $user->state = $request->input('state');

            $user->zip_code = $request->input('zip_code');

            $user->country = $request->input('country');

            $user->password = bcrypt($request->input('password'));

            $user->status = 'publish';

            $user->save();



            event(new Registered($user));

            Auth::loginUsingId($user->id);

            try {

                event(new SendMailUserRegistered($user));

            } catch (\Matrix\Exception $exception) {

                Log::warning("SendMailUserRegistered: " . $exception->getMessage());

            }

            $user->assignRole(setting_item('user_role'));

        }



        $booking->addMeta('locale', app()->getLocale());

        $booking->addMeta('how_to_pay', $how_to_pay);



        // Save Passenger

        $this->savePassengers($booking, $request);



        if ($res = $service->afterCheckout($request, $booking)) {

            return $res;

        }



        if ($booking->pay_now > 0) {

            try {

                $gatewayObj->process($request, $booking, $service);

            } catch (Exception $exception) {

                return $this->sendError($exception->getMessage());

            }

        } else {

            if ($booking->paid < $booking->total) {

                $booking->status = $booking::PARTIAL_PAYMENT;

            } else {

                $booking->status = $booking::PAID;

            }



            if (!empty($booking->coupon_amount) and $booking->coupon_amount > 0 and $booking->total == 0) {

                $booking->status = $booking::PAID;

            }



            $booking->save();

            event(new BookingCreatedEvent($booking));

            return $this->sendSuccess([

                'url' => $booking->getDetailUrl()

            ], __("You payment has been processed successfully"));

        }

    }



    protected function savePassengers(Booking $booking, Request $request)

    {

        if ($booking->service && is_callable([$booking->service, 'savePassengers'])) {

            call_user_func([$booking->service, 'savePassengers'], $booking, $request);

            return;

        }

        if ($totalPassenger = $booking->calTotalPassenger()) {

            $booking->passengers()->delete();

            $input = $request->input('passengers', []);

            for ($i = 1; $i <= $totalPassenger; $i++) {

                $passenger = new BookingPassenger();

                $data = [

                    'booking_id' => $booking->id,

                    'first_name' => $input[$i]['first_name'] ?? '',

                    'last_name'  => $input[$i]['last_name'] ?? '',

                    'email'      => $input[$i]['email'] ?? '',

                    'phone'      => $input[$i]['phone'] ?? '',

                ];

                $data = $booking->service->filterPassengerData($data, $booking, $request, $i);

                $passenger->fillByAttr(array_keys($data), $data);

                $passenger->save();

            }

        }

    }



    public function confirmPayment(Request $request, $gateway)

    {



        $gateways = get_payment_gateways();

        if (empty($gateways[$gateway]) or !class_exists($gateways[$gateway])) {

            return $this->sendError(__("Payment gateway not found"));

        }

        $gatewayObj = new $gateways[$gateway]($gateway);

        if (!$gatewayObj->isAvailable()) {

            return $this->sendError(__("Payment gateway is not available"));

        }

        return $gatewayObj->confirmPayment($request);

    }



    public function callbackPayment(Request $request, $gateway)

    {

        $gateways = get_payment_gateways();

        if (empty($gateways[$gateway]) or !class_exists($gateways[$gateway])) {

            return $this->sendError(__("Payment gateway not found"));

        }

        $gatewayObj = new $gateways[$gateway]($gateway);

        if (!$gatewayObj->isAvailable()) {

            return $this->sendError(__("Payment gateway is not available"));

        }

        if (!empty($request->input('is_normal'))) {

            return $gatewayObj->callbackNormalPayment();

        }

        return $gatewayObj->callbackPayment($request);

    }



    public function cancelPayment(Request $request, $gateway)

    {



        $gateways = get_payment_gateways();

        if (empty($gateways[$gateway]) or !class_exists($gateways[$gateway])) {

            return $this->sendError(__("Payment gateway not found"));

        }

        $gatewayObj = new $gateways[$gateway]($gateway);

        if (!$gatewayObj->isAvailable()) {

            return $this->sendError(__("Payment gateway is not available"));

        }

        return $gatewayObj->cancelPayment($request);

    }



    /**

     * @param Request $request

     * @return string json

     * @todo Handle Add To Cart Validate

     *

     */

    public function addToCart(Request $request)

    {

        if (!is_enable_guest_checkout() and !Auth::check()) {

            return $this->sendError(__("You have to login in to do this"))->setStatusCode(401);

        }

        if (auth()->user() && !auth()->user()->hasVerifiedEmail() && setting_item('enable_verify_email_register_user') == 1) {

            return $this->sendError(__("You have to verify email first"), ['url' => url('/email/verify')]);

        }



        $validator = Validator::make($request->all(), [

            'service_id'   => 'required|integer',

            'service_type' => 'required'

        ]);

        if ($validator->fails()) {

            return $this->sendError('', ['errors' => $validator->errors()]);

        }

        $service_type = $request->input('service_type');

        $service_id = $request->input('service_id');

        $allServices = get_bookable_services();

        if (empty($allServices[$service_type])) {

            return $this->sendError(__('Service type not found'));

        }

        $module = $allServices[$service_type];

        $service = $module::find($service_id);

        if (empty($service) or !is_subclass_of($service, '\\Modules\\Booking\\Models\\Bookable')) {

            return $this->sendError(__('Service not found'));

        }

        if (!$service->isBookable()) {

            return $this->sendError(__('Service is not bookable'));

        }



        if (\auth()->user() && Auth::id() == $service->author_id) {

            return $this->sendError(__('You cannot book your own service'));

        }



        return $service->addToCart($request);

    }



    // public function detail(Request $request, $code)

    // {

    //     if (!is_enable_guest_checkout() and !Auth::check()) {

    //         return $this->sendError(__("You have to login in to do this"))->setStatusCode(401);

    //     }



    //     $booking = $this->booking::where('code', $code)->first();

    //     if (empty($booking)) {

    //         abort(404);

    //     }



    //     if ($booking->status == 'draft') {

    //         return redirect($booking->getCheckoutUrl());

    //     }

    //     if (!is_enable_guest_checkout() and $booking->customer_id != Auth::id()) {

    //         abort(404);

    //     }

    //     $data = [

    //         'page_title' => __('Booking Details'),

    //         'booking'    => $booking,

    //         'service'    => $booking->service,

    //     ];

    //     if ($booking->gateway) {

    //         $data['gateway'] = get_payment_gateway_obj($booking->gateway);

    //     }

    //     return view('Booking::frontend/detail', $data);

    // }



    public function exportIcal($type, $id = false)

    {

        if (empty($type) or empty($id)) {

            return $this->sendError(__('Service not found'));

        }



        $allServices = get_bookable_services();

        $allServices['room'] = 'Modules\Hotel\Models\HotelRoom';

        if (empty($allServices[$type])) {

            return $this->sendError(__('Service type not found'));

        }

        $module = $allServices[$type];



        $path = '/ical/';

        $fileName = 'booking_' . $type . '_' . $id . '.ics';

        $fullPath = $path . $fileName;



        $content = $this->booking::getContentCalendarIcal($type, $id, $module);

        Storage::disk('uploads')->put($fullPath, $content);

        $file = Storage::disk('uploads')->get($fullPath);



        header('Content-Type: text/calendar; charset=utf-8');

        header('Content-Disposition: attachment; filename="' . $fileName . '"');



        echo $file;

    }



    public function addEnquiry(Request $request)

    {

        $rules = [

            'service_id'    => 'required|integer',

            'service_type'  => 'required',

            'enquiry_name'  => 'required',

            'enquiry_note'  => 'required',

            'enquiry_email' => [

                'required',

                'email',

                'max:255',

            ],

        ];



        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return $this->sendError('', ['errors' => $validator->errors()]);

        }



        if (setting_item('booking_enquiry_enable_recaptcha')) {

            $codeCapcha = trim($request->input('g-recaptcha-response'));

            if (empty($codeCapcha) or !ReCaptchaEngine::verify($codeCapcha)) {

                return $this->sendError(__("Please verify the captcha"));

            }

        }



        $service_type = $request->input('service_type');

        $service_id = $request->input('service_id');

        $allServices = get_bookable_services();

        if (empty($allServices[$service_type])) {

            return $this->sendError(__('Service type not found'));

        }

        $module = $allServices[$service_type];

        $service = $module::find($service_id);

        if (empty($service) or !is_subclass_of($service, '\\Modules\\Booking\\Models\\Bookable')) {

            return $this->sendError(__('Service not found'));

        }

        $row = new $this->enquiryClass();

        $row->fill([

            'name'  => $request->input('enquiry_name'),

            'email' => $request->input('enquiry_email'),

            'phone' => $request->input('enquiry_phone'),

            'note'  => $request->input('enquiry_note'),

        ]);

        $row->object_id = $request->input("service_id");

        $row->object_model = $request->input("service_type");

        $row->status = "pending";

        $row->vendor_id = $service->author_id;

        $row->save();

        event(new EnquirySendEvent($row));

        return $this->sendSuccess([

            'message' => __("Thank you for contacting us! We will be in contact shortly.")

        ]);

    }



    /**

     * @param Request $request

     * @return \Illuminate\Http\JsonResponse

     */

    public function setPaidAmount(Request $request)

    {

        $rules = [

            'remain' => 'required|integer',

            'id'     => 'required'

        ];



        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {

            return $this->sendError('', ['errors' => $validator->errors()]);

        }





        $id = $request->input('id');

        $remain = floatval($request->input('remain'));



        if ($remain < 0) {

            return $this->sendError(__('Remain can not smaller than 0'));

        }



        $booking = Booking::where('id', $id)->first();

        if (empty($booking)) {

            return $this->sendError(__('Booking not found'));

        }



        if (!Auth::user()->hasPermission('dashboard_vendor_access')) {

            if ($booking->vendor_id != Auth()->id()) {

                return $this->sendError(__("You don't have access."));

            }

        }



        $booking->pay_now = $remain;

        $booking->paid = floatval($booking->total) - $remain;

        event(new SetPaidAmountEvent($booking));

        if ($remain == 0) {

            $booking->status = $booking::PAID;

//            $booking->sendStatusUpdatedEmails();

            event(new BookingUpdatedEvent($booking));

        }



        $booking->save();



        return $this->sendSuccess([

            'message' => __("You booking has been changed successfully")

        ]);

    }



    public function modal(Booking $booking)

    {

        if (!is_admin() and $booking->vendor_id != auth()->id() and $booking->customer_id != auth()->id()) abort(404);



        return view('Booking::frontend.detail.modal', ['booking' => $booking, 'service' => $booking->service]);

    }



    // changing autosubmit data

    public function startFormSession(Request $request)
    {
        if (!$request->session()->has('form_id')) {
            $form_id = uniqid(); // Generate unique ID
            $request->session()->put('form_id', $form_id); // Store in session
        }
        
        return response()->json(['form_id' => $request->session()->get('form_id')]);
    }


    public function autoSaveForm(Request $request)
    {
        $formId = $request->input('form_id');
        
        // Check if form ID exists, if not generate a new one
        if (!$formId) {
            $formId = uniqid();
            $request->session()->put('form_id', $formId);
        }

        // Update or insert form data into the database
        DB::table('flight_bookings_random_users')->updateOrInsert(
            ['random_id' => $request->input('random_id')], // Ensure random_id is present
            [
                'booking_id' => $request->input('booking_id'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'zip_code' => $request->input('zip_code'),
                'country' => $request->input('country'),
                'customer_notes' => $request->input('customer_notes'),
                'adults_details' => $request->input('adults_details'),
                'children_details' => $request->input('children_details'),
                'from' => $request->input('from'),
                'to' => $request->input('to'),
                'on_date'=>$request->input('on_date'),
                'return_date' => $request->input('return_date')??'',
                'flight_type' => $request->input('flight_type')??'',
                
                'updated_at' => now(),
                // Add other fields as necessary
            ]
        );

        // Return the form ID in the response
        return response()->json([
            'message' => 'Form data saved successfully',
            'form_id' => $formId
        ]);
    }




    // changable

}

