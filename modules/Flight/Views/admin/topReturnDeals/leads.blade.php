@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Random_ID</th>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Country</th>
                        {{-- <th>Status</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leads as $booking)
                        <tr>
                            {{-- <td>{{ $loop->iteration }}</td> --}}
                            {{-- <td>{{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y') }}</td> --}}
                            <td>{{ $booking->random_id }}</td>
                            <td>{{ $booking->first_name }} {{ $booking->last_name }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->address }}</td>
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
                           
                            <td>
                                {{-- <a href="{{ route('flight.admin.booking.show', $booking->id) }}"
                                    class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="float:right;">{{ $bookings->links() }}</div>
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
