<?php

namespace Modules\Flight\Controllers;

use App\Http\Controllers\Controller;
use Modules\Flight\Models\SeatType;
use Modules\Location\Models\LocationCategory;
use Modules\Flight\Models\Subscription;
use Illuminate\Http\Request;
use Modules\Location\Models\Location;
use Modules\Review\Models\Review;
use Modules\Core\Models\Attributes;
use DB;
use Illuminate\Support\Facades\Crypt;
use Cookie;
use Session;
use Illuminate\Support\Facades\Mail; // Ensure this line is included
use App\Mail\SubscriptionMail;

class SubscriptionController extends Controller
{
public function index(Request $request) {
    // dd($request->all());
    $emailTo = env('EMAIL_TO')??'';
    $serverIpAddress = $request->ip();  // Use Laravel's Request::ip() for IP address
    $request->validate([
        'email' => 'required|email',
        'phone' => 'required|numeric',  // Add validation for phone
    ]);

    // Check if the email is already subscribed
    $check = Subscription::where('email', $request->email)->first();
    if ($check) {
        return redirect()->back()->with('error', 'You have already subscribed with this email!');
    }

    // Check if the IP address is already subscribed
    $ipExists = Subscription::where('ip_address', $serverIpAddress)->exists();
    if ($ipExists) {
        return redirect()->back()->with('error', 'You have already subscribed from this IP address!');
    }
    // Create a new subscription
    Subscription::create([
        'email' => $request->email,
        'phone' => $request->phone,
        'ip_address' => $serverIpAddress,
    ]);

    // Sending email
    try {
        if (!empty($request->email)) {  // Ensure email is provided
            Mail::to($request->email)
            ->cc($emailTo)
            ->send(new SubscriptionMail($request->all()));  // Use request email
        } else {
            \Log::warning('Email address is empty, email not sent.');
            return redirect()->back()->with('error', 'Email address is empty.');
        }
    } catch (Exception $e) {
        \Log::error('Email sending failed: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Email sending failed: ' . $e->getMessage());
    }

    return redirect()->back()->with('success', 'You have successfully subscribed!');
}

public function checkIp(Request $request) {
    // Get the IP address of the client
    $serverIpAddress = $request->ip();

    // Check if the IP address exists in the Subscription table
    $ipExists = Subscription::where('ip_address', $serverIpAddress)->exists();
    
    // Return the result as a JSON response
    return response()->json(['ipExists' => $ipExists]);
}

}