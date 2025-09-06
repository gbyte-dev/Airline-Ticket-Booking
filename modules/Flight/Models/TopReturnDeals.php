<?php

namespace Modules\Flight\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Location\Models\Location;

class TopReturnDeals extends Model
{
    protected $table = 'bravo_return_conutry';

    protected $fillable = [
        'id',
        'country_name',
        'from_price',
        'country_image',
        'created_at',
        'updated_at',
    ];

   
}

