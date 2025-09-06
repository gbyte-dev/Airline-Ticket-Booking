

@extends('admin.layouts.app')


@push('css')
<style>
#image{
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

#image:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
@endpush



@section('content')

    <div class="container-fluid">
        <div class="table-responsive">
            <div style="margin-bottom: 20px;">
                <!-- Add Country Button -->
                <button type="button" class="btn btn-success" onclick="window.location='{{ route('flight.admin.top-returns-deals.index') }}'">
					Go to Top Return Deals
				</button>
            </div>
					<center><h1>Edit Page</h1></center>
					
<!---		<form id="addCountryForm"  method="POST" action="{{ route('flight.admin.top-returns-deals.update', $topReturnDeals->id) }}" enctype="multipart/form-data">     -->


<form id="addCountryForm" method="POST" action="{{ route('flight.admin.top-returns-deals.update', $topReturnDeals->id) }}" enctype="multipart/form-data" style="margin: 20px;"> 
    @csrf
    <div class="form-group">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="country_name" class="form-label">Country Name</label>
                <input type="text" class="form-control" id="country_name" name="country_name" value="{{ $topReturnDeals->country_name }}" required>
            </div>
            <div class="col-md-6">
                <label for="from_price" class="form-label">From Price(CAD)</label>
                <input type="number" class="form-control" id="from_price" name="from_price" value="{{ $topReturnDeals->from_price }}" required>
            </div>
            <div class="col-md-6">
                <label for="country_image" class="form-label">Country Image</label>
                <input type="file" class="form-control" id="country_image" name="country_image">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                @if($topReturnDeals->country_image)
                    <img id="image" src="{{ asset('uploads/country_images/' . $topReturnDeals->country_image) }}" alt="{{ $topReturnDeals->country_name }}" class="img-fluid" style="max-width: 200px; height: auto;">
                @else
                    <p>No image available</p>
                @endif 
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Update Country</button>
            </div>
        </div>
    </div>
</form>

		</div>
	</div>
 
@endsection

@push('scripts')
    <script>
     //Any script of this page you can write here
    </script>
@endpush
