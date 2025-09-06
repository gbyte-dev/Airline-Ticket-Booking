<?php
namespace Modules\News\Controllers;

use Illuminate\Http\Request;
use Modules\FrontendController;
use Modules\Language\Models\Language;
use Modules\News\Models\News;
use Modules\News\Models\FreeQuote;
use Modules\News\Models\NewsCategory;
use Modules\News\Models\NewsTranslation;
use Modules\News\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail; // Ensure this line is included
use App\Mail\QuoteRequestMail;
use Illuminate\Support\Facades\Log;

class CheapController extends FrontendController
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }
  public function tripNew(Request $request, $city = ''){
    $currency = Session::get('currency', 'CAD');
    $selectedCurrency = $request->query('currency', $currency);

    if ($currency === '' || $selectedCurrency !== $currency) {
        session('currency', $selectedCurrency, time() + (86400 * 30), "/");
        Session::put(['currency' => $selectedCurrency]);
    } else {
        $selectedCurrency = $currency;
    }


    $cities = DB::table('bravo_return_filght_city')->get();
    // dd($cities);
    // die;
    $cityDetails = null;
    $city = str_replace("-"," ",$city);
    
    if ($city) {
        $cityDetails = DB::table('bravo_return_filght_city')
                          ->where('city', $city)
                          ->first();
      
    $cities = DB::table('bravo_return_filght_city')->where('country_id', $cityDetails->country_id)->get();                
    //    dd($cities);
    // die;                     
    }

    $discountPrice = $cityDetails->discount_price ?? '0';
    $price = $cityDetails->price ?? '0';

    $convertedPrice = $this->formatPrice($price, $selectedCurrency);
    $converteddisPrice = $this->formatPrice($discountPrice, $selectedCurrency);
    return view('News::frontend.cheap-flights.trip_new', compact('city', 'cities', 'cityDetails', 'convertedPrice', 'converteddisPrice'));
  }
    public function index(Request $request, $city = '')
    {
        $currency = Session::get('currency', 'CAD');
        $selectedCurrency = $request->query('currency', $currency);
 
        if ($currency === '' || $selectedCurrency !== $currency) {
            session('currency', $selectedCurrency, time() + (86400 * 30), "/");
            Session::put(['currency' => $selectedCurrency]);
        } else {
            $selectedCurrency = $currency;
        }
    
   
        $cities = DB::table('bravo_return_filght_city')->get();
        $cityDetails = null;
        $city = str_replace("-"," ",$city);
        
        if ($city) {
            $cityDetails = DB::table('bravo_return_filght_city')
                              ->where('city', $city)
                              ->first();
        }
    
        $discountPrice = $cityDetails->discount_price ?? '0';
        $price = $cityDetails->price ?? '0';
  
        $convertedPrice = $this->formatPrice($price, $selectedCurrency);
        $converteddisPrice = $this->formatPrice($discountPrice, $selectedCurrency);
    
        return view('News::frontend.cheap-flights.trip', compact('city', 'cities', 'cityDetails', 'convertedPrice', 'converteddisPrice'));
    }
    
     
    private function formatPrice($amount, $currency)
    {
        $conversionRates = ['INR' => 61.42, 'USD' => 0.74, 'CAD' => 1];
        $symbols = ['INR' => '₹', 'USD' => '$', 'CAD' => 'C$'];
    
        $convertedAmount = $this->convertCurrency($amount, $currency, $conversionRates);
        $symbol = $symbols[$currency] ?? '';
    
        return $symbol . ' ' . number_format($convertedAmount,0);
    }
    
    private function convertCurrency($amount, $currency, $conversionRates)
    {
        return isset($conversionRates[$currency]) ? $amount * $conversionRates[$currency] : $amount;
    }
    
    public function viewstore(Request $request)
   {
    $validatedData = $request->all();
	if(is_array($validatedData['from'])){
		$validatedData['from'] = json_encode($validatedData['from']);
	}
	if(is_array($validatedData['to'])){
		$validatedData['to'] = json_encode($validatedData['to']);
	}
	//echo '<pre>';print_r($validatedData);die; 
    $validatedData['travel_class'] = $request->input('travel_class', null);
    $validatedData['passengers'] = $request->input('passengers', null);
     $validatedData['source_page'] = $request->input('page_url');

    if(isset($request->email2 )  && $request->email2 !=''){
            $validatedData['email'] = $request->email2;
    } 
   if(isset($request->email )  && $request->email !=''){
            $validatedData['email'] = $request->email;
    } 

    if ($request->has('enddate')) {
        $validatedData['enddate'] = $request->enddate; // Add it manually if needed
    } 

    if ($validatedData['booking_type'] == 'oneway') {
        $validatedData['booking_type'] = 'oneway'; 
    } else { 
        $validatedData['booking_type'] = 'round-trip';
    }
    if ($request->filled('phoneprefix')) {
        $validatedData['phone'] = $request->phoneprefix . ' ' . $validatedData['phone'];
    }
	
	$validatedData['page_url'] = $request->page_url ? $request->page_url : Null;
	//echo "<pre>";print_r($validatedData);die('======'); 
	
    $returnFlight = FreeQuote::create($validatedData);
    
   $emailTo = env('EMAIL_TO')?? '';
   Mail::to($validatedData['email'])->send(new QuoteRequestMail($validatedData));
   // new try
    try {
        if (!empty($validatedData['email'])) {
            // Send email to the user
            Mail::to($validatedData['email'])->send(new QuoteRequestMail($validatedData));

            // Optionally send email to a default recipient (e.g., admin)
            if (!empty($emailTo)) {
                Mail::to($emailTo)->send(new QuoteRequestMail($validatedData));
            }

            \Log::info('Email successfully sent to ' . $validatedData['email']);
        } else {
            // Log a warning if no email is provided
            \Log::warning('No email address provided in the form. Email not sent.');
        }
    } catch (\Exception $e) {
        // Log the exception and inform the user gracefully
        \Log::error('Email sending failed: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Failed to send the email. Please try again.');
    }

// old try
  //  try {
  //   if (!empty($validatedData['email'])) { // Check if email is not empty
  //       Mail::to($emailTo)->send(new QuoteRequestMail($validatedData));
  //   } else {
  //       // Log if the email address is empty or invalid
  //       \Log::warning('Email address is empty, email not sent.');
  //       die('Email address is empty.'); // Terminate execution if needed
  //   }
  // } catch (Exception $e) {
  //   // Log the exception message
  //   \Log::error('Email sending failed: ' . $e->getMessage());
  //   die('Email sending failed: ' . $e->getMessage()); // Terminate execution on failure
  // }

   return redirect()->back()->with('success', 'We have Successfuly taken your details we will connect with you Shortly! Team Tripgare');
}


}
