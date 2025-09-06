@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="table-responsive">
            <div style="margin-bottom: 20px;">
                <!-- Add Country Button -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCountryModal">
                    Add Country
                </button>
                <h3 class="pt-2">Top return flights</h3>
            </div>

            <table class="table table-bordered table-striped" id="topreturndealtable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Country Name</th>
                        <th>From Price(CAD)</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($topReturnDeals as $topReturnDeal)
                        <tr>
                            <td>{{ $topReturnDeal->id }}</td>
                            <td>{{ $topReturnDeal->country_name }}</td>
                            <td>{{ $topReturnDeal->from_price }}</td>
							<td>
								@if($topReturnDeal->country_image)
									<a href="{{ asset('uploads/country_images/' . $topReturnDeal->country_image) }}" target="_blank">
										<img src="{{ asset('uploads/country_images/' . $topReturnDeal->country_image) }}" alt="{{ $topReturnDeal->country_name }}" class="img-fluid" style="max-width: 200px; height: auto;">
									</a>
								@else
									No image
								@endif
							</td>
                            <td>{{ \Carbon\Carbon::parse($topReturnDeal->created_at)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($topReturnDeal->updated_at)->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('flight.admin.top-returns-deals.show', $topReturnDeal->id) }}"
                                    class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>  
								<a href="{{ route('flight.admin.top-returns-deals.viewpage', $topReturnDeal->id) }}"
                                    class="btn btn-info btn-sm"><i class="fa fa-info"></i></a> 
									
								<form action="{{ route('flight.admin.top-returns-deals.destroy', $topReturnDeal->id) }}" method="POST" style="display:inline;">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
											<i class="fa fa-trash"></i> Delete
										</button>
								</form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
     <div style="float:right;">
                @php
                    $currentPage = $topReturnDeals->currentPage();
                    $lastPage = $topReturnDeals->lastPage();
                    $blockSize = 5;
                    $startPage = floor(($currentPage - 1) / $blockSize) * $blockSize + 1;
                    $endPage = min($startPage + $blockSize - 1, $lastPage);
                @endphp
                <div class="card mb-1">
                    <div class="d-flex justify-content-between align-items-center">
                        @if ($startPage > 1)
                            <a href="{{ $topReturnDeals->url($startPage - $blockSize) }}" class="btn btn-primary">Prev</a>
                        @else
                            <span class="btn btn-secondary disabled">Prev</span>
                        @endif
                        <div class="page-links">
                            @for ($page = $startPage; $page <= $endPage; $page++)
                                <a href="{{ $topReturnDeals->url($page) }}"
                                    class="btn btn-outline-warning {{ $page == $currentPage ? 'active' : '' }}">
                                    {{ $page }}
                                </a>
                            @endfor
                        </div>
                        @if ($endPage < $lastPage)
                            <a href="{{ $quote->url($endPage + 1) }}" class="btn btn-primary">Next</a>
                        @else
                            <span class="btn btn-secondary disabled">Next</span>
                        @endif
                    </div>
                </div>
                <!-- End Pagination Card Container -->


            </div>
        </div>
    </div>

    <!-- Add Country Modal -->
    <div class="modal fade" id="addCountryModal" tabindex="-1" role="dialog" aria-labelledby="addCountryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCountryModalLabel">Add New Country</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addCountryForm"  method="POST" action="{{ route('flight.admin.top-returns-deals.store') }}" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <label for="country_name">Country Name</label>
							<input type="hidden" name="url" id="url" value="{{ route('flight.admin.top-returns-deals.store') }}">
                            <input type="text" class="form-control" id="country_name" name="country_name" required>
                        </div>
                        <div class="form-group">
                            <label for="from_price">From Price(CAD)</label>
							<input type="hidden" name="url" id="url" value="{{ route('flight.admin.top-returns-deals.store') }}">
                            <input type="number" class="form-control" id="from_price" name="from_price" required>
                        </div>
						 <div class="form-group">
							<label for="country_image">Country Image</label>
							<input type="file" class="form-control" id="country_image" name="country_image" required>
						</div>
                        <button type="submit" class="btn btn-primary">Add Country</button>
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
//    <script>
//     $(document).ready(function() {
//            $('#topreturndealtable').DataTable();
//        });
//    </script>
@endpush


