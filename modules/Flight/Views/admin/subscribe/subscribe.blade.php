@extends('admin.layouts.app')

@section('content')
<h3>Subscribers home</h3>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Phone</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $users)
                    {{-- @dd( $users) --}}
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ \Carbon\Carbon::parse($users->created_at)->setTimezone('Asia/Kolkata')->format('d/m/Y h:i A') }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->phone }}</td>
                            {{-- <td>
                                <a href="{{ route('flight.admin.booking.show', $users->id) }}"
                                    class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="float:right;">{{ $data->links() }}</div>
        </div>
    </div>
@endsection
{{-- <script>
    function updateStatus(status) {
        const bookingId = {{ $users->id }};
        alert(bookingId);
        // Pass the booking ID to the function

        // Make an AJAX call to update the status in the database
        fetch(`{{ route('flight.admin.booking.update.status', $users->id) }}`, {
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
</script> --}}
