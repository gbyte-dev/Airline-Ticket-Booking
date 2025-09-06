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
class CountryShowController extends FrontendController
{
   
   
   
    public function CountryShowNew(Request $request , $city = '')
    {
      
        $currency = Session::get('currency', 'CAD');
        $selectedCurrency = $request->query('currency', $currency);
    
        if ($currency === '' || $selectedCurrency !== $currency) {
            session('currency', $selectedCurrency, time() + (86400 * 30), "/");
            Session::put(['currency' => $selectedCurrency]);
        } else {
            $selectedCurrency = $currency;
        }
    
        // $country_details =  getcontrys($city);
        $country_detail = DB::table('bravo_return_conutry as b')
            ->select('b.id', 'b.country_name','b.from_price')
            ->where('b.country_name', '=', $city)
            ->first(); 

if ($country_detail) { 
    $cities = DB::table('bravo_return_filght_city as c')
        ->select('c.*', 'b.country_name', 'b.from_price') // Select city fields with country details
        ->join('bravo_return_conutry as b', 'c.country_id', '=', 'b.id')
        ->where('c.country_id', $country_detail->id)
        ->get();
    
    // dd($cities);
} else {
    dd("Country not found.");
}
        // if ($country_detail) { // Check if country_detail exists
        //     $cities = DB::table('bravo_return_filght_city')
        //         ->where('country_id', $country_detail->id)
        //         ->get();
            
        //     dd($cities);
        // } else {
        //     dd("Country not found.");
        // }

     
        $cityDetails = null;
      
        $discountPrice = $cityDetails->discount_price ?? '0';
        $price = $cityDetails->price ?? '0';
  
        $convertedPrice = $this->formatPrice($price, $selectedCurrency);
        $converteddisPrice = $this->formatPrice($discountPrice, $selectedCurrency);
    
        return view('News::frontend.cheap-flights.CountryShow_new', compact('city', 'cities', 'cityDetails', 'convertedPrice', 'converteddisPrice','country_detail'));
    }
   
   
   public function CountryShowDeals(Request $request , $city = '')
   {
	     return view('News::frontend.cheap-flights.CountryShow_deals');
   }
   
   
    public function index(Request $request , $city = '')
    {
      
        $currency = Session::get('currency', 'CAD');
        $selectedCurrency = $request->query('currency', $currency);
    
        if ($currency === '' || $selectedCurrency !== $currency) {
            session('currency', $selectedCurrency, time() + (86400 * 30), "/");
            Session::put(['currency' => $selectedCurrency]);
        } else {
            $selectedCurrency = $currency;
        }
    
        // $country_details =  getcontrys($city);
        $country_detail = DB::table('bravo_return_conutry as b')
            ->select('b.id', 'b.country_name','b.from_price')
            ->where('b.country_name', '=', $city)
            ->first(); 

if ($country_detail) { 
    $cities = DB::table('bravo_return_filght_city as c')
        ->select('c.*', 'b.country_name', 'b.from_price') // Select city fields with country details
        ->join('bravo_return_conutry as b', 'c.country_id', '=', 'b.id')
        ->where('c.country_id', $country_detail->id)
        ->get();
    
    // dd($cities);
} else {
    dd("Country not found.");
}
        // if ($country_detail) { // Check if country_detail exists
        //     $cities = DB::table('bravo_return_filght_city')
        //         ->where('country_id', $country_detail->id)
        //         ->get();
            
        //     dd($cities);
        // } else {
        //     dd("Country not found.");
        // }

     
        $cityDetails = null;
      
        $discountPrice = $cityDetails->discount_price ?? '0';
        $price = $cityDetails->price ?? '0';
 
        $convertedPrice = $this->formatPrice($price, $selectedCurrency);
        $converteddisPrice = $this->formatPrice($discountPrice, $selectedCurrency);
    
        return view('News::frontend.cheap-flights.CountryShowDetails', compact('city', 'cities', 'cityDetails', 'convertedPrice', 'converteddisPrice','country_detail'));
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
    
}
