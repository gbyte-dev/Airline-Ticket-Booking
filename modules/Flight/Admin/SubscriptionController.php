<?php


namespace Modules\Flight\Admin;


     use Modules\Flight\Models\Subscription;
     use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    use Illuminate\Support\Facades\Auth;

    use Illuminate\Support\Facades\Validator;

    use Modules\AdminController;

    use Modules\Core\Events\CreatedServicesEvent;

    use Modules\Core\Events\UpdatedServiceEvent;

    use Modules\Core\Models\Attributes;

    use Modules\Location\Models\Location;

    use Modules\Location\Models\LocationCategory;

    use Modules\Flight\Models\Flight;

    use Modules\Flight\Models\FlightTerm;

class SubscriptionController extends AdminController
{
     
    public function show()
{
    // Retrieve the latest subscriptions, paginated by 3 per page
    $data = Subscription::latest()->paginate(10);

    // Check if there are no records found
    if ($data->isEmpty()) {
        return redirect()->back()->with('warning', __('No record found!'));
    }

    // Return the view with the subscription data
    return view('Flight::admin.subscribe.subscribe', compact('data'));
}


}
