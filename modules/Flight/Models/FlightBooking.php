<?php

namespace Modules\Flight\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Location\Models\Location;

class FlightBooking extends Model
{
    protected $table = 'bravo_flight_bookings';

    protected $primaryKey = 'booking_id';

    protected $fillable = [
        'id',
        'booking_id',
        'first_name',
        'last_name',
        'phone',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'customer_notes',
        'adults_details',
        'children_details',
        'infants_details',
        'airCode',
        'code',
        'airName',
        'flightNumbers',
        'departureTimes',
        'arrivalTimes',
        'durationText',
        'departureDate',
        'stopText',
        'departureLocation',
        'arrivalLocation',
        'adults',
        'children',
        'infants',
        'totalBaseFare',
        'totalTaxes',
        'totalDiscount',
        'stopsTime',
        'arrivalDate',
        'term_conditions',
        'departure',
        'return',
        'created_at',
        'updated_at',
        'email',
        'combo_return',
        'totalFare',
        'status',
        'from',
        'to',
        'date',
        'returnDate',
        'flight_deatils',
        'flight_class',
    ];

    protected $casts = [
        'adults_details' => 'json',
        'children_details' => 'json',
        'infants_details' => 'json',
        'stopsTime' => 'json',
        'flight_deatils' => 'json',
        // 'combo_return' => 'json',
        // 'return' => 'json',
        // 'departure' => 'json',
    ];

    // public function departureLocationData()
    // {
    //     return $this->belongsTo(Location::class, 'departureLocation', 'airport_code');
    // }

    // public function arrivalLocationData()
    // {
    //     return $this->belongsTo(Location::class, 'arrivalLocation', 'airport_code');
    // }
}

