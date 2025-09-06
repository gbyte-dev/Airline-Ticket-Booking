<?php
namespace Modules\News\Controllers;

use Illuminate\Http\Request;
use Modules\Subsription;


class SubscriptionController extends Subscription
{

    public function index(Request $request)
    {
        $subsription = Subsription::all();
        return view('news::subsription.index', compact('subsription'));
    }

}
