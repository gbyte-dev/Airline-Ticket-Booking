@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
    <h3>Leads Customer </h3>
    <div class="panel">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        {{-- <th>Random_ID</th> --}}
                        <th>Passenger Name
                          </th>
                        <th>Phone</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Flight Date</th>
                        <th>Flight Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leads as $booking)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            {{-- <td>{{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y') }}</td> --}}
                            {{-- <td >{{ $booking->random_id }}</td> --}}
                            <td style="color: #08f;">{{ $booking->first_name }}
                               {{ $booking->last_name }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->from }}</td>
                            <td>{{ $booking->to}}</td>
                            <td>{{ $booking->on_date}}</td>
                            <td>{{ ($booking->flight_type=='return')?'round trip':'one-way'}}</td>
                            
                            <td>
                                <a href="{{ route('flight.admin.booking.showleads', $booking->id) }}"
                                    class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div style="float:right;">{{ $bookings->links() }}</div> --}}
            <div style="float:right;">
                @php
                    $currentPage = $leads->currentPage();
                    $lastPage = $leads->lastPage();
                    $blockSize = 5;
                    $startPage = floor(($currentPage - 1) / $blockSize) * $blockSize + 1;
                    $endPage = min($startPage + $blockSize - 1, $lastPage);
                @endphp
                <div class="card mb-1">
                    <div class="d-flex justify-content-between align-items-center">
                        @if ($startPage > 1)
                            <a href="{{ $leads->url($startPage - $blockSize) }}" class="btn btn-primary">Prev</a>
                        @else
                            <span class="btn btn-secondary disabled">Prev</span>
                        @endif
                        <div class="page-links">
                            @for ($page = $startPage; $page <= $endPage; $page++)
                                <a href="{{ $leads->url($page) }}"
                                    class="btn btn-outline-warning {{ $page == $currentPage ? 'active' : '' }}">
                                    {{ $page }}
                                </a>
                            @endfor
                        </div>
                        @if ($endPage < $lastPage)
                            <a href="{{ $leads->url($endPage + 1) }}" class="btn btn-primary">Next</a>
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
{{-- <script>
    function updateStatus(status) {
        const bookingId = {{ $booking->id }};
        alert(bookingId);
        // Pass the booking ID to the function

        // Make an AJAX call to update the status in the database
        fetch(`{{ route('flight.admin.booking.update.status', $booking->id) }}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                },
                body: JSON.stringify({
                    status: status
                })
            })
            .then(response => response.json())
            .then(data => {
                // Show alert message based on response
                alert(data.message);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error updating the status.');
            });
    }</script> --}}
