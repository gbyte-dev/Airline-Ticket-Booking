<?php

namespace Modules\Flight\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Location\Models\Location;

class ReturnFlight extends Model
{
    protected $table = 'bravo_return_filght_city';

    protected $fillable = [
        'id',
        'city',
        'price',
        'discount_price',
        'display',
        'country_id',
        'created_at',
        'updated_at',
    ];

   
}

