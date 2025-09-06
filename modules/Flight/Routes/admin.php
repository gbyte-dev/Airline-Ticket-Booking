<?php



use \Illuminate\Support\Facades\Route;
use Modules\Flight\Admin\AllBookingController;
use Modules\Flight\Admin\TopReturnDealsController;
use Modules\Flight\Admin\CountryController;
use Modules\Flight\Models\Subscription;

Route::get('/','flightcontroller@index')->name('flight.admin.index');
Route::get('/create','flightcontroller@create')->name('flight.admin.create');
Route::get('/edit/{id}','flightcontroller@edit')->name('flight.admin.edit');
Route::post('/store/{id}','flightcontroller@store')->name('flight.admin.store');
Route::post('/bulkedit','flightcontroller@bulkedit')->name('flight.admin.bulkedit');
Route::get('/recovery','flightcontroller@recovery')->name('flight.admin.recovery');
Route::get('country','TopReturnDealsController@country');

Route::group(['prefix'=>'{flight_id}/flight-seat'],function (){
    Route::get('/','flightseatcontroller@index')->name('flight.admin.flight.seat.index');
    Route::get('edit/{id}','flightseatcontroller@edit')->name('flight.admin.flight.seat.edit');
    Route::post('store/{id}','flightseatcontroller@store')->name('flight.admin.flight.seat.store');
    Route::post('/bulkedit','flightseatcontroller@bulkedit')->name('flight.admin.flight.seat.bulkedit');
});

Route::group(['prefix'=>'airline'],function (){
    Route::get('/','AirlineController@index')->name('flight.admin.airline.index');
    Route::get('edit/{id}','AirlineController@edit')->name('flight.admin.airline.edit');
    Route::post('store/{id}','AirlineController@store')->name('flight.admin.airline.store');
    Route::post('/bulkedit','AirlineController@bulkedit')->name('flight.admin.airline.bulkedit');
});

Route::group(['prefix'=>'airport'],function (){
    Route::get('/','AirportController@index')->name('flight.admin.airport.index');
    Route::get('edit/{id}','AirportController@edit')->name('flight.admin.airport.edit');
    Route::post('store/{id}','AirportController@store')->name('flight.admin.airport.store');
    Route::post('/bulkedit','AirportController@bulkedit')->name('flight.admin.airport.bulkedit');
    Route::get('/import-iata','AirportController@importiata')->name('flight.admin.airport.importiata')->middleware('signed');
});

Route::group(['prefix'=>'seat-type'],function (){
    Route::get('/','SeatTypeController@index')->name('flight.admin.seat_type.index');
    Route::get('edit/{id}','SeatTypeController@edit')->name('flight.admin.seat_type.edit');
    Route::post('store/{id}','SeatTypeController@store')->name('flight.admin.seat_type.store');
    Route::post('/bulkedit','SeatTypeController@bulkedit')->name('flight.admin.seat_type.bulkedit');
});

Route::group(['prefix'=>'attribute'],function (){
    Route::get('/','AttributeController@index')->name('flight.admin.attribute.index');
    Route::get('edit/{id}','AttributeController@edit')->name('flight.admin.attribute.edit');
    Route::post('store/{id}','AttributeController@store')->name('flight.admin.attribute.store');
    Route::post('/editattrbulk','AttributeController@editattrbulk')->name('flight.admin.attribute.bulkedit');

    Route::get('terms/{id}','AttributeController@terms')->name('flight.admin.attribute.term.index');
    Route::get('term_edit/{id}','AttributeController@term_edit')->name('flight.admin.attribute.term.edit');
    Route::match(['get','post'],'term_store','AttributeController@term_store')->name('flight.admin.attribute.term.store');
    Route::post('/edittermbulk','AttributeController@edittermbulk')->name('flight.admin.attribute.edittermbulk');
});



Route::group(['prefix'=>'all-booking'],function (){

    Route::get('/','AllBookingController@index')->name('flight.admin.booking.index');
    // Route::get('/{booking_id}', 'AllBookingController@show')->name('flight.admin.booking.show');
    Route::get('/{booking_id}', 'AllBookingController@show')->name('flight.admin.booking.show');
    // Route::post('/update-booking-status/{id}', [AllBookingController::class, 'updateStatus'])->name('flight.admin.booking.update.status');
    Route::post('/update-booking-status/{id}', [AllBookingController::class, 'updateStatus'])->name('flight.admin.booking.update.status');

   
});
  
// Subscription Controller
Route::group(['prefix'=>'subscribe'],function (){
    Route::get('/','SubscriptionController@show')->name('flight.admin.subscribe.show'); 
    // Route::get('/','SubscriptionController@index')->name('flight.admin.subscribe.index');  
});


Route::get('/leads','AllBookingController@leadsdata')->name('flight.admin.booking.leads');
Route::get('showleads/{id}', 'AllBookingController@showleads')->name('flight.admin.booking.showleads');
Route::get('showquote', 'AllBookingController@showquote')->name('flight.admin.booking.showquote');
Route::get('quotedisplay/{id}', 'AllBookingController@showquotedisplay')->name('flight.admin.booking.quotedisplay');
// Route::group(['prefix'=>'top-returns-deals'],function (){
    // Route::get('/','TopReturnDealsController@index')->name('flight.admin.top-returns-deals.index');
    // Route::get('/{id}', 'TopReturnDealsController@show')->name('flight.admin.top-returns-deals.show');
	
    // // Route::post('/update-top-returns-deals-status/{id}', [TopReturnDealsController::class, 'updateStatus'])->name('flight.admin.booking.update.status'); 
	
    // Route::post('/update-top-returns-deals-status/{id}', [TopReturnDealsController::class, 'updateStatus'])->name('flight.admin.top-returns-deals.update.status');
	
    // Route::get('/leads','TopReturnDealsController@leads')->name('flight.admin.top-returns-deals.leads');
// });  

Route::group(['prefix' => 'top-returns-deals'], function () {
    Route::get('/', 'TopReturnDealsController@index')->name('flight.admin.top-returns-deals.index');
    Route::get('/{id}', 'TopReturnDealsController@show')->name('flight.admin.top-returns-deals.show'); 
    Route::post('/update-top-returns-deals/{id}', [TopReturnDealsController::class, 'update'])->name('flight.admin.top-returns-deals.update');
    Route::post('/store', [TopReturnDealsController::class, 'store'])->name('flight.admin.top-returns-deals.store');
	Route::delete('destroy/{id}', 'TopReturnDealsController@destroy')->name('flight.admin.top-returns-deals.destroy');
	
	
	Route::get('view/{id}', 'TopReturnDealsController@viewpage')->name('flight.admin.top-returns-deals.viewpage'); 
	Route::get('view/edit/{id}', 'TopReturnDealsController@viewedit')->name('flight.admin.top-returns-deals.viewedit');
	Route::post('view/store', 'TopReturnDealsController@viewstore')->name('flight.admin.top-returns-deals.viewstore');
    Route::put('view/update/{id}', 'TopReturnDealsController@viewupdate')->name('flight.admin.top-returns-deals.viewupdate');
    Route::delete('view/destroy/{id}', 'TopReturnDealsController@viewdestroy')->name('flight.admin.top-returns-deals.viewdestroy');
	
	
});
