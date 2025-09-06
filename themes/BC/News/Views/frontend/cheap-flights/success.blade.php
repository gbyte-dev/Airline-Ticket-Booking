<!DOCTYPE html>
<html>
<head>
    <title>Quote Request</title>
</head>
<body>
    <h1>New Quote Request</h1>
    <p><strong>Booking Type:</strong> {{ $data['booking_type'] }}</p>
    <p><strong>From:</strong> {{ $data['from'] }}</p>
    <p><strong>To:</strong> {{ $data['to'] }}</p>
    <p><strong>Depart Date:</strong> {{ $data['start_date'] }}</p>
    @if(isset($data['enddate']))
        <p><strong>Return Date:</strong> {{ $data['enddate'] }}</p>
    @endif
    <p><strong>Source Page:</strong> {{ $data['source_page'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Class:</strong> {{ $data['travel_class'] }}</p>
    <p><strong>Passenger:</strong> {{ $data['passengers'] }}</p>
</body>
</html>
