@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
    <h3>Free quote</h3>
    <div class="panel">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                              
                        <th>Phone</th>
                        <th>From</th>
                        <th>To</th>
                        
                        <th>Flight Type</th>
                        <th>Page Source</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quote as $booking)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            {{-- <td>{{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y') }}</td> --}}
                            {{-- <td >{{ $booking->random_id }}</td> --}}
                            <td style="color: #08f;">{{ $booking->name }}</td>
                            
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->from }}</td>
                            <td>{{ $booking->to}}</td>
                            
                           <td>{{ $booking-> booking_type}}</td>
                            
                            
                            <td>
                                <a href="{{ $booking->page_url }}"
                                    class="btn btn-secondary btn-sm"><i class="fa fa-eye"></i></a>
                            </td>
							 <td>
                                <a href="{{ route('flight.admin.booking.quotedisplay', $booking->id) }}"
                                    class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div style="float:right;">{{ $quote->links() }}</div> --}}
            <div style="float:right;">
                @php
                    $currentPage = $quote->currentPage();
                    $lastPage = $quote->lastPage();
                    $blockSize = 5;
                    $startPage = floor(($currentPage - 1) / $blockSize) * $blockSize + 1;
                    $endPage = min($startPage + $blockSize - 1, $lastPage);
                @endphp
                <div class="card mb-1">
                    <div class="d-flex justify-content-between align-items-center">
                        @if ($startPage > 1)
                            <a href="{{ $quote->url($startPage - $blockSize) }}" class="btn btn-primary">Prev</a>
                        @else
                            <span class="btn btn-secondary disabled">Prev</span>
                        @endif
                        <div class="page-links">
                            @for ($page = $startPage; $page <= $endPage; $page++)
                                <a href="{{ $quote->url($page) }}"
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
</div>
@endsection
