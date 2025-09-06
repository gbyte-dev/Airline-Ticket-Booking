<?php



namespace Modules\Location\Controllers;



use App\Http\Controllers\Controller;

use Modules\Location\Models\Location;

use Illuminate\Http\Request;



class LocationController extends Controller

{

    public $location;

    public function __construct(Location $location)

    {

        $this->location = $location;

    }



    public function index(Request $request) {}



    public function detail(Request $request, $slug)

    {

        $row = $this->location::where('slug', $slug)->where("status", "publish")->first();;

        if (empty($row)) {

            return redirect('/');

        }

        $translation = $row->translate();

        $data = [

            'row' => $row,

            'translation' => $translation,

            'seo_meta' => $row->getSeoMetaWithTranslation(app()->getLocale(), $translation),

            'breadcrumbs'       => [

                [

                    'name'  => $translation->name,

                    'class' => 'active'

                ],

            ],

        ];

        $this->setActiveMenu($row);

        return view('Location::frontend.detail', $data);

    }



    // public function searchForSelect2( Request $request ){

    //     // dd($request);

    //     $search = $request->query('search');

    //     $query = Location::select('bravo_locations.*', 'bravo_locations.name as title')->where("bravo_locations.status","publish");



    //     if ($search) {

    //         $query->where('bravo_locations.name', 'like', '%' . $search . '%');



    //         if( setting_item('site_enable_multi_lang') && setting_item('site_locale') != app()->getLocale() ){

    //             $query->leftJoin('bravo_location_translations', function ($join) use ($search) {

    //                 $join->on('bravo_locations.id', '=', 'bravo_location_translations.origin_id');

    //             });

    //             $query->orWhere(function($query) use ($search) {

    //                 $query->where('bravo_location_translations.name', 'LIKE', '%' . $search . '%');

    //             });

    //         }



    //     }

    //     $res = $query->orderBy('name', 'asc')->limit(20)->get();

    //     if(!empty($res) and count($res)){

    //         $list_json = [];

    //         foreach ($res as $location) {

    //             $translate = $location->translate();

    //             $list_json[] = [

    //                 'id' => $location->id,

    //                 'title' => $translate->name,

    //             ];

    //         }

    //         return $this->sendSuccess(['data'=>$list_json]);

    //     }

    //     return $this->sendError(__("Location not found"));

    // }



    // public function searchForSelect2(Request $request)

    // {

    //     $search = $request->query('search');



    //     // Check if search term is at least 3 characters long

    //     if (strlen($search) < 3) {

    //         return $this->sendError(__('Search term must be at least 3 characters long'));

    //     }



    //     $query = Location::select('bravo_locations.*', 'bravo_locations.name as title')

    //         ->where('bravo_locations.status', 'publish');



    //     if ($search) {

    //         $query->where(function ($query) use ($search) {

    //             $query->where('bravo_locations.name', 'like', '%' . $search . '%')

    //                 ->orWhere('bravo_locations.airport_code', 'like', '%' . $search . '%')

    //                 ->orWhere('bravo_locations.airport_name', 'like', '%' . $search . '%');

    //         });



    //         if (setting_item('site_enable_multi_lang') && setting_item('site_locale') != app()->getLocale()) {

    //             $query->leftJoin('bravo_location_translations', function ($join) {

    //                 $join->on('bravo_locations.id', '=', 'bravo_location_translations.origin_id');

    //             });

    //             $query->orWhere(function ($query) use ($search) {

    //                 $query->where('bravo_location_translations.name', 'LIKE', '%' . $search . '%');

    //             });

    //         }

    //     }



    //     $res = $query->orderBy('name', 'asc')->limit(20)->get();



    //     if (!empty($res) && count($res)) {

    //         $list_json = [];

    //         foreach ($res as $location) {

    //             $translate = $location->translate();

    //             $list_json[] = [

    //                 'id' => $location->id,

    //                 'title' => $translate->name,

    //             ];

    //         }

    //         return $this->sendSuccess(['data' => $list_json]);

    //     }



    //     return $this->sendError(__("Location not found"));

    // }



    public function searchForSelect2(Request $request)

{

    $search = $request->query('search');



    // Check if search term is at least 3 characters long

    if (strlen($search) < 3) {

        return $this->sendError(__(''));

    }



    $query = Location::select('bravo_locations.*', 'bravo_locations.name as title')

        ->where('bravo_locations.status', 'publish');



    if ($search) {

        $query->where(function ($query) use ($search) {

            $query->where('bravo_locations.airport_code', 'like', '%' . $search . '%')

                ->orWhere('bravo_locations.name', 'like', '%' . $search . '%')

                ->orWhere('bravo_locations.airport_name', 'like', '%' . $search . '%');

        });



        if (setting_item('site_enable_multi_lang') && setting_item('site_locale') != app()->getLocale()) {

            $query->leftJoin('bravo_location_translations', function ($join) {

                $join->on('bravo_locations.id', '=', 'bravo_location_translations.origin_id');

            });

            $query->orWhere(function ($query) use ($search) {

                $query->where('bravo_location_translations.name', 'LIKE', '%' . $search . '%');

            });

        }

    }



    // Add priority ordering

    $query->orderByRaw(

        "CASE

            WHEN airport_code LIKE ? THEN 1

            WHEN name LIKE ? THEN 2

            WHEN airport_name LIKE ? THEN 3

            ELSE 4

        END",

        ["%$search%", "%$search%", "%$search%"]

    );



    $res = $query->orderBy('airport_code', 'asc')->limit(20)->get();



    if (!empty($res) && count($res)) {

        $list_json = [];

        foreach ($res as $location) {

            $translate = $location->translate();

            $list_json[] = [

                'id' => $location->airport_code,

                'title' => $location->airport_code,

                'airport_name' => $location->airport_name,

                'city' => $translate->name,

                'airport_country_name' => $location->airport_country_name,

                'airport_country_code' => $location->airport_country_code,

            ];

        }

        return $this->sendSuccess(['data' => $list_json]);

    }

    

    return $this->sendError(__("Location not found"));

}



}

