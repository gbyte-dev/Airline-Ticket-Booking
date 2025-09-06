<?php

namespace Modules\Booking\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightBooking extends Model
{
    use HasFactory;

    protected $table = 'bravo_flight_bookings'; // Specify the table name if different
    
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone',
        'city',
        'state',
        'zip_code',
        'country',
        'customer_notes',
        'adults_details', // JSON field
        'children_details', // JSON field
        'infants_details', // JSON field
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
        'totalFare',
        'stopsTime',
        'arrivalDate',
        'departure',
        'return',
        'address',
        'email',
        'term_conditions',
        'booking_id',
        'status',
        'currency_type',
        'from',
        'to',
        'date',
        'returnDate',
        'flight_details',
        'flight_class',
    ];

    protected $casts = [
        'adults_details' => 'array',
        'children_details' => 'array',
        'infants_details' => 'array',
        'stopsTime'=>'array',

    ];
    
}

?>