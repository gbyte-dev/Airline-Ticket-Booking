<?php

namespace Modules\News\Models;



use App\BaseModel;

use App\User;

use Illuminate\Database\Eloquent\SoftDeletes;

use Modules\Core\Models\SEO;

use Modules\Review\Models\Review;



class FreeQuote extends BaseModel

{

    use SoftDeletes;

    protected $table = 'free_quote';

    protected $fillable = [

        'booking_type',
        'from' ,
        'to' ,
        'start_date', 
        'enddate',
        'phone',
        'email',
        'name',
        'coupan_code',
        'travel_class',
        'passengers', 
        'source_page',
		'page_url'
    ];

}