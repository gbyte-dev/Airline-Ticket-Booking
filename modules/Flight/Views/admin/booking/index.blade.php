@extends('admin.layouts.app')
@section('title', 'News')
@section('content')
    <h3>Bookings </h3>
    <div class="panel">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Booking ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>Type</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td style="color: #08f;">{{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y') }}</td>
                            <td>{{ $booking->booking_id }}</td>
                            <td>{{ $booking->first_name }} {{ $booking->last_name }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->country }}</td>
                            <td>
                                @if ($booking->departure && $booking->return)
                                    Round Trip
                                @elseif ($booking->returnDate && $booking->date)
                                    Round Trip
                                @else
                                    One Way
                                @endif
                            </td>
                            {{-- <td>
                                <select class="form-control" name="status" id="status-{{ $booking->id }}"
                                    onchange="updateStatus(this.value)" style="width: 100px;">
                                    <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="success" {{ $booking->status == 'success' ? 'selected' : '' }}>Confirmed
                                    </option>
                                    <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>
                                        Cancelled</option>
                                    <option value="refund" {{ $booking->status == 'refund' ? 'selected' : '' }}>Refund
                                    </option>
                                </select>
                            </td> --}}
                            <td>
                                {{-- <a href="{{ route('flight.admin.booking.show', $booking->booking_id) }}"
                                    class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> --}}
                                <a href="{{ route('flight.admin.booking.show', $booking->booking_id) }}"
                                    class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- pagenate start --}}
            <div style="float:right;">
                @php
                    $currentPage = $bookings->currentPage();
                    $lastPage = $bookings->lastPage();
                    $blockSize = 5;
                    $startPage = floor(($currentPage - 1) / $blockSize) * $blockSize + 1;
                    $endPage = min($startPage + $blockSize - 1, $lastPage);
                @endphp
                <div class="card mb-1">
                    <div class="d-flex justify-content-between align-items-center">
                        @if ($startPage > 1)
                            <a href="{{ $bookings->url($startPage - $blockSize) }}" class="btn btn-primary">Prev</a>
                        @else
                            <span class="btn btn-secondary disabled">Prev</span>
                        @endif
                        <div class="page-links">
                            @for ($page = $startPage; $page <= $endPage; $page++)
                                <a href="{{ $bookings->url($page) }}"
                                    class="btn btn-outline-warning {{ $page == $currentPage ? 'active' : '' }}">
                                    {{ $page }}
                                </a>
                            @endfor
                        </div>
                        @if ($endPage < $lastPage)
                            <a href="{{ $bookings->url($endPage + 1) }}" class="btn btn-primary">Next</a>
                        @else
                            <span class="btn btn-secondary disabled">Next</span>
                        @endif
                    </div>
                </div>
                <!-- End Pagination Card Container -->


            </div>
               {{-- pagenate End --}}
        </div>
    </div>
@endsection
<script>
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
    }
</script>
