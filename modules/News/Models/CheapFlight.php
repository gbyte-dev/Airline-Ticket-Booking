<?php

namespace Modules\News\Models;



use App\BaseModel;

use App\User;

use Illuminate\Database\Eloquent\SoftDeletes;

use Modules\Core\Models\SEO;

use Modules\Review\Models\Review;



class CheapFlight extends BaseModel

{

    use SoftDeletes;

    protected $table = 'core_news';

    protected $fillable = [

        // 'title',

        // 'content',

        // 'status',

        // 'cat_id',

        // 'image_id',

        // 'gallery',

    ];

    // protected $slugField     = 'slug';

    // protected $slugFromField = 'title';

    // protected $seo_type = 'news';

    // public $type = 'news';

    // protected $sitemap_type = 'page';



}

