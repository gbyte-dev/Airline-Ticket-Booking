@extends('admin.layouts.app')

@section('tag')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection


@section('content')
<h2>Add New Return Flight</h2>
    <div class="container-fluid">
        <div class="table-responsive">
            <div style="margin-bottom: 20px;">
                <!-- Add Country Button -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addReturnFlightModal">
                   New Return Flight
                </button>
				
				<a href="{{ route('flight.admin.top-returns-deals.index') }}" class="btn btn-success">
                   Back
                </a>
				
				
				
            </div> 

            <table class="table table-bordered table-striped" id="topreturnflighttable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th>Original Price(CAD)</th>
                        <th>Discounted Price(CAD)</th>
                        <th>Country Name</th>
                        <th>Display</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!isset($returnFlights) && $returnFlights->isEmpty())
						<tr>
							<td colspan="7" class="text-center">No return flights available.</td>
						</tr>
					@else
						@foreach ($returnFlights as $returnFlight)
							<tr>
								<td>{{ $returnFlight->id }}</td>
								<td>{{ $returnFlight->city }}</td>
								<td>{{ $returnFlight->price }}</td>
                                <td>{{ $returnFlight->discount_price }}</td>
								<td>{{ getcontrys($returnFlight->country_id)->country_name  }}</td>
                                <td style="color: {{ $returnFlight->display === 'display_yes' ? 'green' : 'red' }}">
                                    {{ $returnFlight->display === 'display_yes' ? 'Visible' : 'Not Visible' }}
                                </td>
                                
								<td>{{ $returnFlight->created_at }}</td>
								<td>{{ $returnFlight->updated_at }}</td>								
								<td>
									<a href="{{ route('flight.admin.top-returns-deals.viewedit', $returnFlight->id) }}" class="btn btn-warning">
										<i class="fa fa-edit"></i> Edit
									</a>
									<form action="{{ route('flight.admin.top-returns-deals.viewdestroy', $returnFlight->id) }}" method="POST" style="display:inline;">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
											<i class="fa fa-trash"></i> Delete
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					@endif
                </tbody>
            </table>

            
        </div>
    </div>

    <!-- Add Country Modal -->
    <div class="modal fade" id="addReturnFlightModal" tabindex="-1" role="dialog" aria-labelledby="addCountryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCountryModalLabel">New Return Flight</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

    
		<form action="{{ route('flight.admin.top-returns-deals.viewstore') }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="city">City</label>
					<input type="text" class="form-control" id="city" name="city" required>
				</div>
				<div class="form-group">
					<label for="price"> Original Price(CAD)</label>
					<input type="number" class="form-control" id="price" name="price" required>
				</div>
                <div class="form-group">
					<label for="price">Discounted Price(CAD)</label>
					<input type="number" class="form-control" id="discount_price" name="discount_price" required>
				</div>
				<input type="hidden" class="form-control" id="country_id" name="country_id" value="{{ $country_id }}" required>
				
                <div class="form-group">
                    <label for="price">Visible on home page</label><br>
                    <input type="radio" id="display_yes" name="display" value="display_yes"/>    
                    <label>YES</label> 
                    <input type="radio" id="display_no" name="display" value="display_no"/>    
                        <label>NO</label>  
				</div>
				<button type="submit" class="btn btn-primary">Add Return Flight</button>
			</form>

				
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
	<script src="{{ asset('dist/admin/js/jquery.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/admin/css/jquery.dataTables.css') }}">
    <script type="text/javascript" charset="utf8" src="{{ asset('dist/admin/js/jquery.dataTables.js') }}"></script> 
    <script>
     $(document).ready(function() {
            $('#topreturnflighttable').DataTable();
        });
    </script>
@endpush
