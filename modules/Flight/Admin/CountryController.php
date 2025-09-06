<?php
namespace Modules\Flight\Admin;

use Illuminate\Http\Request;
use Modules\AdminController;
use Modules\Flight\Models\TopReturnDeals;
use Modules\Flight\Models\ReturnFlight;

class CountryController extends AdminController
{
    public function country(Request $request){
		$country_detail = TopReturnDeals::all();
       
		return view('News::frontend.blocks.list-news.index',compact('country_detail'));
	}

}