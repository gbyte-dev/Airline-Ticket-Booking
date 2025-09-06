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


class CheapController extends FrontendController
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    public function index(Request $request, $city = '')
    {
        $currency = Session::get('currency', 'INR');
        $selectedCurrency = $request->query('currency', $currency);
    //     echo '<pre>';
    //    echo $selectedCurrency;
        if ($currency === '' || $selectedCurrency !== $currency) {
            session('currency', $selectedCurrency, time() + (86400 * 30), "/");
            Session::put(['currency' => $selectedCurrency]);
        } else {
            $selectedCurrency = $currency;
        }
    
        // Retrieve all cities from the database
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
    // echo '<pre>';
    // echo $selectedCurrency;
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
    
        return $symbol . ' ' . number_format($convertedAmount,2);
    }
    
    private function convertCurrency($amount, $currency, $conversionRates)
    {
        return isset($conversionRates[$currency]) ? $amount * $conversionRates[$currency] : $amount;
    }
    
    public function viewstore(Request $request)
{
    // dd($request->all());
    $validatedData = $request->validate([
        'booking_type' => 'required',
        'from' => 'required',
        'to' => 'required',
        'start_date' =>'required',
        // 'enddate' => 'required',
        'phone' => 'required|numeric',
        'email' => 'required|email',
        'name' => 'required',
        // 'coupan_code' => 'required',
    ]);
    if ($request->has('enddate')) {
        $validatedData['enddate'] = $request->enddate; // Add it manually if needed
    }

    if ($validatedData['booking_type'] == 'oneway') {
        $validatedData['booking_type'] = 'oneway'; 
    } else {
        $validatedData['booking_type'] = 'round-trip';
    }
    $returnFlight = FreeQuote::create($validatedData);
    
   // Mail::to($validatedData['email'])->send(new QuoteRequestMail($validatedData));
   try {
    if (!empty($validatedData['email'])) { // Check if email is not empty
        Mail::to($validatedData['email'])->send(new QuoteRequestMail($validatedData));
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

   return redirect()->back()->with('success', 'Return flight created successfully.');
}


}
