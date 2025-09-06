<?php



use \Illuminate\Support\Facades\Route;
use Modules\Flight\Admin\AllBookingController;
use Modules\Flight\Admin\TopReturnDealsController;

mailto:route::get('/','flightcontroller@index')->name('flight.admin.index');

mailto:route::get('/create','flightcontroller@create')->name('flight.admin.create');

mailto:route::get('/edit/{id}','flightcontroller@edit')->name('flight.admin.edit');

mailto:route::post('/store/{id}','flightcontroller@store')->name('flight.admin.store');

mailto:route::post('/bulkedit','flightcontroller@bulkedit')->name('flight.admin.bulkedit');

mailto:route::get('/recovery','flightcontroller@recovery')->name('flight.admin.recovery');



Route::group(['prefix'=>'{flight_id}/flight-seat'],function (){

    mailto:route::get('/','flightseatcontroller@index')->name('flight.admin.flight.seat.index');

    mailto:route::get('edit/{id}','flightseatcontroller@edit')->name('flight.admin.flight.seat.edit');

    mailto:route::post('store/{id}','flightseatcontroller@store')->name('flight.admin.flight.seat.store');

    mailto:route::post('/bulkedit','flightseatcontroller@bulkedit')->name('flight.admin.flight.seat.bulkedit');

});

Route::group(['prefix'=>'airline'],function (){

    mailto:route::get('/','airlinecontroller@index')->name('flight.admin.airline.index');

    mailto:route::get('edit/{id}','airlinecontroller@edit')->name('flight.admin.airline.edit');

    mailto:route::post('store/{id}','airlinecontroller@store')->name('flight.admin.airline.store');

    mailto:route::post('/bulkedit','airlinecontroller@bulkedit')->name('flight.admin.airline.bulkedit');

});

Route::group(['prefix'=>'airport'],function (){

    mailto:route::get('/','airportcontroller@index')->name('flight.admin.airport.index');

    mailto:route::get('edit/{id}','airportcontroller@edit')->name('flight.admin.airport.edit');

    mailto:route::post('store/{id}','airportcontroller@store')->name('flight.admin.airport.store');

    mailto:route::post('/bulkedit','airportcontroller@bulkedit')->name('flight.admin.airport.bulkedit');

    mailto:route::get('/import-iata','airportcontroller@importiata')->name('flight.admin.airport.importiata')->middleware('signed');



});

Route::group(['prefix'=>'seat-type'],function (){

    mailto:route::get('/','seattypecontroller@index')->name('flight.admin.seat_type.index');

    mailto:route::get('edit/{id}','seattypecontroller@edit')->name('flight.admin.seat_type.edit');

    mailto:route::post('store/{id}','seattypecontroller@store')->name('flight.admin.seat_type.store');

    mailto:route::post('/bulkedit','seattypecontroller@bulkedit')->name('flight.admin.seat_type.bulkedit');



});

Route::group(['prefix'=>'attribute'],function (){

    mailto:route::get('/','attributecontroller@index')->name('flight.admin.attribute.index');

    mailto:route::get('edit/{id}','attributecontroller@edit')->name('flight.admin.attribute.edit');

    mailto:route::post('store/{id}','attributecontroller@store')->name('flight.admin.attribute.store');

    mailto:route::post('/editattrbulk','attributecontroller@editattrbulk')->name('flight.admin.attribute.bulkedit');



    mailto:route::get('terms/{id}','attributecontroller@terms')->name('flight.admin.attribute.term.index');

    mailto:route::get('term_edit/{id}','attributecontroller@term_edit')->name('flight.admin.attribute.term.edit');

    mailto:route::match(['get','post'],'term_store','attributecontroller@term_store')->name('flight.admin.attribute.term.store');

    mailto:route::post('/edittermbulk','attributecontroller@edittermbulk')->name('flight.admin.attribute.edittermbulk');

});



Route::group(['prefix'=>'all-booking'],function (){

    mailto:route::get('/','allbookingcontroller@index')->name('flight.admin.booking.index');
    Route::get('/{id}', 'mailto:allbookingcontroller@show')->name('flight.admin.booking.show');
    // Route::post('/update-booking-status/{id}', [AllBookingController::class, 'updateStatus'])->name('flight.admin.booking.update.status');
    Route::post('/update-booking-status/{id}', [AllBookingController::class, 'updateStatus'])->name('flight.admin.booking.update.status');

   
});
mailto:route::get('/leads','allbookingcontroller@leadsdata')->name('flight.admin.booking.leads');
Route::get('/{id}', 'mailto:allbookingcontroller@showleads')->name('flight.admin.booking.showleads');
// Route::group(['prefix'=>'top-returns-deals'],function (){
    // mailto:route::get('/','topreturndealscontroller@index')->name('flight.admin.top-returns-deals.index');
    // Route::get('/{id}', 'mailto:topreturndealscontroller@show')->name('flight.admin.top-returns-deals.show');
	
    // // Route::post('/update-top-returns-deals-status/{id}', [TopReturnDealsController::class, 'updateStatus'])->name('flight.admin.booking.update.status');
	
    // Route::post('/update-top-returns-deals-status/{id}', [TopReturnDealsController::class, 'updateStatus'])->name('flight.admin.top-returns-deals.update.status');
	
    // mailto:route::get('/leads','topreturndealscontroller@leads')->name('flight.admin.top-returns-deals.leads');
// });  

Route::group(['prefix' => 'top-returns-deals'], function () {
    Route::get('/', 'mailto:topreturndealscontroller@index')->name('flight.admin.top-returns-deals.index');
    Route::get('/{id}', 'mailto:topreturndealscontroller@show')->name('flight.admin.top-returns-deals.show'); 
    
	
    
    Route::post('/update-top-returns-deals/{id}', [TopReturnDealsController::class, 'update'])->name('flight.admin.top-returns-deals.update');
    
   
    Route::post('/store', [TopReturnDealsController::class, 'store'])->name('flight.admin.top-returns-deals.store');
	
	
	
	Route::get('view/{id}', 'mailto:topreturndealscontroller@viewpage')->name('flight.admin.top-returns-deals.viewpage'); 
	Route::get('view/edit/{id}', 'mailto:topreturndealscontroller@viewedit')->name('flight.admin.top-returns-deals.viewedit');
    Route::put('view/update/{id}', 'mailto:topreturndealscontroller@viewupdate')->name('flight.admin.top-returns-deals.viewupdate');
    Route::delete('view/destroy/{id}', 'mailto:topreturndealscontroller@viewdestroy')->name('flight.admin.top-returns-deals.viewdestroy');
	
	
});
