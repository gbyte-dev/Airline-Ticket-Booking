<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>config('news.news_route_prefix')],function(){
    Route::get('/'.config('news.news_category_route_prefix').'/{slug}', 'CategoryNewsController@index')->name('news.category.index');
    Route::get('/'.config('news.news_tag_route_prefix').'/{slug}', 'TagNewsController@index')->name('news.tag.index');
    Route::get('/','NewsController@index')->name('news.index');// News Page
    Route::get('/{slug}','NewsController@detail')->name('news.detail');// Detail
});


Route::prefix('vendor/'.config('news.news_route_prefix'))->name('news.vendor.')->middleware(['auth','verified'])->group(function(){
    Route::get('/','VendorNewsController@index')->name('index');
    Route::get('/create','VendorNewsController@create')->name('create');
    Route::get('/edit/{id}', 'VendorNewsController@edit')->name('edit');
    Route::post('/bulkEdit','VendorNewsController@bulkEdit')->name('bulkEdit');
    Route::post('/store/{id}','VendorNewsController@store')->name('store');
});
Route::get('country','NewsController@country');

//flight details 
Route::get('/cheap-flights-to-{city}','CheapController@index')->name('cheap-flights');// News Page

Route::get('/cheap-flights/{city}','CheapController@index')->name('cheap-flights.city');

// routes/web.php tripNew
Route::get('/convert-prices', 'CheapController@convertCurrency')->name('convert-prices');
Route::post('/freequote', 'CheapController@viewstore')->name('freequote');
Route::get('/cheap-flights-{city}', 'CountryShowController@index')->name('showallcountry');
Route::get('/cheap-flights-{city}', 'CountryShowController@CountryShowNew')->name('showallCountry');
Route::get('/today-top-deals', 'CountryShowController@CountryShowDeals')->name('CountryShowDeals');
Route::get('/top-airline-deals', 'CountryShowController@CountryShowDeals')->name('CountryShowDeals');

Route::get('/cheap-flights-to-{city}', 'CheapController@tripNew')->name('cheap-flight');
Route::get('/grouptravel','NewsController@group')->name('news.group');
Route::get('/multi-city','NewsController@city')->name('news.multicity');
//Route::get('/clear-cache', function () {
//    \Artisan::call('config:clear');
//    \Artisan::call('cache:clear');
//    \Artisan::call('view:clear');
//    return 'Cache cleared';
//});

