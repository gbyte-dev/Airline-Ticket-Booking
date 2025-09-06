<?php

//  Retrieve Data from this tbale   'bravo_flight_bookings' and show here



namespace Modules\Flight\Admin;



use Illuminate\Http\Request;

use Modules\AdminController;

use Modules\Flight\Models\FlightBooking;
use Illuminate\Support\Facades\DB;




class AllBookingController extends AdminController

{

		 public function index(Request $request)

        {
			$bookings = FlightBooking::select('bravo_flight_bookings.*')->latest()->paginate(10);
		    return view('Flight::admin.booking.index', compact('bookings'));
        }


		
		public function show($booking_id)
		{
			$booking = FlightBooking::findorFail($booking_id);
			return view('Flight::admin.booking.show', compact('booking'));
		}

		public function updateStatus(Request $request, $id) {
			
			$booking = FlightBooking::find($id);
			if ($booking) {
				$booking->status = $request->input('status');
				$booking->save();
		
				return response()->json(['message' => 'Status updated successfully!']);
			}
			return response()->json(['message' => 'Booking not found.'], 404);
		}
		public function showleads($id)
		{
			$booking = DB::table('flight_bookings_random_users')->where('id', $id)->first();
			// Check if the record exists
			// if (!$leads) {
				return view('Flight::admin.booking.showLeads', compact('booking'));
			// }

		}
		
		public function leadsdata(Request $request)

        {
			$leads = DB::table('flight_bookings_random_users')->latest()->paginate(10);
		    return view('Flight::admin.booking.leads', compact('leads'));
        }
        public function showquote(Request $request)

        {
			$quote = DB::table('free_quote')->latest()->paginate(10);
           
		    return view('Flight::admin.booking.showquotedata', compact('quote'));
        }
        public function showquotedisplay($id)
		{
			$booking = DB::table('free_quote')->where('id', $id)->first();
			
				return view('Flight::admin.booking.quotedisplay', compact('booking'));
			

		}
		


}
