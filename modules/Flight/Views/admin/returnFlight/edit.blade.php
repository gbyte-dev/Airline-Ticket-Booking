@extends('admin.layouts.app')

@section('content')
<h2>Edit New Return Flight</h2>
<div class="container-fluid">
	<div class="table-responsive">
	<div style="margin-bottom: 20px;">
	
	</div>
		<form action="{{ route('flight.admin.top-returns-deals.viewupdate', $returnflightview->id) }}" method="POST">
			@csrf
			@method('PUT') 
			<div class="form-group">
				<label for="city">City</label>
				<input type="text" class="form-control" id="city" name="city" value="{{ $returnflightview->city }}" required>
			</div>
			<div class="form-group">
				<label for="price">Original Price(CAD)</label>
				<input type="number" class="form-control" id="price" name="price" value="{{ $returnflightview->price }}" required>
			</div>
			<div class="form-group">
				<label for="price">Discounted Price(CAD)</label>
				<input type="number" class="form-control" id="price" name="discount_price" value="{{ $returnflightview->discount_price }}" required>
			</div>
			<div class="form-group">
				<label for="price">Visible on home page</label><br>
				<input type="radio" id="display_yes" name="display" style="color:green"  value="display_yes" {{ $returnflightview->display === 'display_yes' ? 'checked' : '' }}/>    
				<label>YES</label> 
				<input type="radio" id="display_no" name="display" style="color: red"   value="display_no"  {{ $returnflightview->display === 'display_no' ? 'checked' : '' }}/>    
					<label>NO</label>  
			</div>
				<button type="submit" class="btn btn-primary">Update Return Flight</button>
		</form>
		
	</div>
	<div class=""><button type="button" class="btn btn-danger color-white" style="margin: -35px 166px; position: absolute;color:white;">
		<a style="color:white !important;text-decoration: none !important;" href="{{ route('flight.admin.top-returns-deals.viewpage', $returnflightview->country_id) }}">Back Return Flight</a>
	</button></div>
</div>

@endsection

@section('scripts')
<script>
//Any script of this page you can write here
</script>
@endsection
