<?php
namespace Modules\Flight\Admin;

use Illuminate\Http\Request;
use Modules\AdminController;
use Modules\Flight\Models\TopReturnDeals;
use Modules\Flight\Models\ReturnFlight;

class TopReturnDealsController extends AdminController
{
    public function index(Request $request)
    {
		// echo public_path('uploads/country_images');
		// echo '<br>';
		// echo asset('uploads/country_images/');
		// echo '<br>'; 
        $topReturnDeals = TopReturnDeals::latest()->paginate(4);
        return view('Flight::admin.topReturnDeals.index', compact('topReturnDeals'));
    }
	public function country(Request $request){
		$country_detail = TopReturnDeals::all();
       
		return view('News::frontend.blocks.list-news.index',compact('country_detail'));
	}
    public function show($id)
    {
        $topReturnDeals = TopReturnDeals::findOrFail($id);
        return view('Flight::admin.topReturnDeals.show', compact('topReturnDeals'));
    }



public function update(Request $request, $id)
{
    // Find the deal by ID
    $topReturnDeals = TopReturnDeals::find($id);

    // Check if the object exists
    if (!$topReturnDeals) {
        return redirect()->route('flight.admin.top-returns-deals.index');
    }

    // Initialize $imageName with the existing image name
    $imageName = $topReturnDeals->country_image;

    // If a new image is uploaded
    if ($request->hasFile('country_image')) {
        $image = $request->file('country_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        
        // Move the uploaded image to the directory
        $image->move(public_path('uploads/country_images'), $imageName);

        // Delete the old image if it exists
        if ($topReturnDeals->country_image && file_exists(public_path('uploads/country_images/' . $topReturnDeals->country_image))) {
            unlink(public_path('uploads/country_images/' . $topReturnDeals->country_image));
        }
    }

    // Update other fields
    $topReturnDeals->country_name = $request->input('country_name');
    $topReturnDeals->from_price = $request->input('from_price');

    // Only update country_image if a new one was uploaded
    $topReturnDeals->country_image = $imageName;

    // Save the updated model
    $topReturnDeals->save();

    // Redirect back with success message
    return redirect()->route('flight.admin.top-returns-deals.index')->with('success', 'Updated successfully!');
}


 
   
    public function store(Request $request)
    {
        $request->validate([
            'country_name' => 'required|string|max:255',
			'from_price' =>'required',
			'country_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the uploaded image
        ]);
		
		if ($request->hasFile('country_image')) {
			$image = $request->file('country_image');
			$imageName = time() . '.' . $image->getClientOriginalExtension();
			$image->move(public_path('uploads/country_images'), $imageName);  
			// Store the image in the '/home4/tripgwdd/flight.tripgare.com/public/uploads/country_images' directory
		}

        TopReturnDeals::create([
            'country_name' => $request->country_name,
			'from_price' =>$request->from_price,
			'country_image' => $imageName ?? null, 
        ]);

        //return response()->json(['message' => 'Country added successfully!']);
		return redirect()->route('flight.admin.top-returns-deals.index')->with('success', 'Country added successfully!');
    }
	
	public function destroy($country_id)
	{
		$returnFlights = ReturnFlight::where('country_id', $country_id);
		$returnFlights->delete();
		
		$topreturndeals = TopReturnDeals::findOrFail($country_id);
		$topreturndeals->delete();

		return redirect()->route('flight.admin.top-returns-deals.index')
						 ->with('success', 'Return flight deleted successfully.');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	public function viewPage($country_id = null)
    {
        
		if ($country_id) {
			$returnFlights = ReturnFlight::where('country_id', $country_id)->get();
		} else {
			// If no country_id is provided, get all return flights
			//$returnFlights = ReturnFlight::latest()->paginate(10);
			echo 'country_id not found';
		}
	
	
        return view('Flight::admin.returnFlight.index', compact('returnFlights','country_id'));
	}
	
	public function viewedit($id)
    {
		$returnflightview = ReturnFlight::findOrFail($id);
        return view('Flight::admin.returnFlight.edit', compact('returnflightview'));
	}
	
	public function viewstore(Request $request)
	{
		$request->validate([
			'city' => 'required|string|max:255',
			'price' => 'required|numeric',
			'discount_price' => 'required|numeric',
			'display'  => 'required|string|in:display_yes,display_no',
			'country_id' => 'required|integer',
			
		]);
		$data = $request->all();
		$data['display'] = $request->input('display') === 'display_yes' ? 'display_yes' : 'display_no';
		$returnFlight = ReturnFlight::create($data);
		return redirect()->route('flight.admin.top-returns-deals.viewpage', ['id' => $returnFlight->country_id])
						 ->with('success', 'Return flight created successfully.');
	}

	
	public function viewupdate(Request $request, $id)
    {
		$request->validate([
			'city' => 'required|string|max:255',
			'price' => 'required|numeric',
			'discount_price' => 'required|numeric',
			'display'  => 'required|string|in:display_yes,display_no',
//			'country_id' => 'required|integer',
		]);
	
		
		$returnFlight = ReturnFlight::findOrFail($id);
		$data = $request->all();
        $data['display'] = $request->input('display') === 'display_yes' ? 'display_yes' : 'display_no';
		$returnFlight->update($data);

		return redirect()->route('flight.admin.top-returns-deals.viewpage', ['id' => $returnFlight->country_id])
						 ->with('success', 'Return flight updated successfully.');
	}
	
	public function viewdestroy($id)
	{
		$returnFlight = ReturnFlight::findOrFail($id);
		$country_id = $returnFlight->country_id;
		
		echo "$country_id";
		
		$returnFlight->delete();

		return redirect()->route('flight.admin.top-returns-deals.index')
						 ->with('success', 'Return flight deleted successfully.');
	}
	
	
	// Route::get('view/{id}', 'TopReturnDealsController@viewpage')->name('flight.admin.top-returns-deals.viewPage'); 
	// Route::get('view/edit/{id}', 'TopReturnDealsController@viewedit')->name('flight.admin.top-returns-deals.viewedit');
    // Route::put('view/update/{id}', 'TopReturnDealsController@viewupdate')->name('flight.admin.top-returns-deals.viewupdate');
    // Route::delete('view/destroy/{id}', 'TopReturnDealsController@viewdestroy')->name('flight.admin.top-returns-deals.viewdestroy');
}
