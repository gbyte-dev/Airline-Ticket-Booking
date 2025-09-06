<!DOCTYPE html>
<head>
    <title>Booking Enquiry</title>
</head>
<body>
    <h4>Hello , New Booking Enquiry has been Recived Click here to View</h4>
    <a href="{{ route('flight.admin.booking.show', $data['booking_id']) }}">View Booking </a>

       {{-- Url: https://flight.tripgare.com/admin/module/flight/all-booking/123 --}}
       {{-- Url:{{ route('flight.admin.booking.show', $datea->booking_id) }} --}}
    {{-- <p><strong>Booking Type:</strong> {{ $data['booking_type'] }}</p> --}}
    {{-- <p><strong>From:</strong>
       {{ isset($data['departureLocation']) ? $data['departureLocation'] : '' }}
        </p>
    <p><strong>To:</strong> {{ isset($data['arrivalLocation']) ? $data['arrivalLocation'] : '' }}</p>
    <p><strong>Depart Date:</strong> {{ $data['date'] }}</p>
    @if(isset($data['returnDate']))
        <p><strong>Return Date:</strong> {{ $data['returnDate'] }}</p>
    @endif
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p> --}}
</body>
</html>