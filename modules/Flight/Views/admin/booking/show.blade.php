<style>
    .table td,
    .table th {
        padding: 1rem !important;
    }
</style>
<style>
    /* Add this CSS to your main stylesheet */
    .card-body {
        background-color: #f8f9fa;
        padding: 20px;
    }

    .card-body h5 {
        font-weight: bold;
        color: #333;
    }

    .card-body ul {
        font-size: 14px;
        line-height: 1.6;
    }

    .card-body button {
        font-size: 16px;
        font-weight: bold;
        padding: 12px;
        border-radius: 5px;
    }

    .card-body button:hover {
        background-color: #0056b3;
        transition: background-color 0.3s ease;
    }
</style>

@extends('admin.layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">

                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-3">
                                        @if ($booking->first_name)
                                            <p class="card-text"><b>Name: </b> {{ $booking->first_name }} @if ($booking->last_name)
                                                    {{ $booking->last_name }}
                                                @endif
                                            </p>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        @if ($booking->phone)
                                            <p class="card-text"><b>Phone: </b> {{ $booking->phone }}</p>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        @if ($booking->email)
                                            <p class="card-text"><b>Email:</b> {{ $booking->email }}</p>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        @if ($booking->address)
                                            <p class="card-text"><b>Address:</b> {{ $booking->address }}</p>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-3">
                                        @if ($booking->city)
                                            <p class="card-text"><b>City:</b> {{ $booking->city }}</p>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        @if ($booking->state)
                                            <p class="card-text"><b>State:</b> {{ $booking->state }}</p>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        @if ($booking->country)
                                            <p class="card-text"><b>Country:</b> {{ $booking->country }}</p>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        @if ($booking->zip_code)
                                            <p class="card-text"><b>Zip Code:</b> {{ $booking->zip_code }}</p>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @if ($booking->totalFare)
                            <tr>
                                <th class="bg-light">Total Fare</th>
                                <td>
                                    @if ($booking->currency_type)
                                        {!! $booking->currency_type !!}
                                    @endif {{ $booking->totalFare }}
                                </td>
                            </tr>
                        @endif
                        @if ($booking->created_at)
                            <tr>
                                <th class="bg-light">Booking Date</th>
                                <td>{{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y') }}</td>
                            </tr>
                        @endif
                        @if ($booking->flight_class)
                            <tr>
                                <th class="bg-light">Flight Class</th>
                                <td>{{ $booking->flight_class == 'any' ? 'Economy' : $booking->flight_class }}</td>
                            </tr>
                        @endif
                        <tr>
                            <th class="bg-light">Booking Trip</th>
                            <td>
                                @if ($booking->departure && $booking->return)
                                    Round Trip
                                @elseif ($booking->returnDate && $booking->date)
                                    Round Trip
                                @else
                                    One Way
                                @endif
                            </td>
                        </tr>
                        @if (empty($booking->returnDate) && empty($booking->date) && !empty($booking->airName))
                            <tr>
                                <th class="bg-light">Flight Details</th>
                                <td>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="card-title mb-0"> {{ $booking->departureLocation }}->
                                                        {{ $booking->arrivalLocation }} </h5>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <span data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                        class="btn btn-primary btn-sm">
                                                        flight Details
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-md-2">
                                                    <p class="card-text"><b>Flight
                                                            Number:</b>{{ $booking->airCode }}-{{ $booking->flightNumbers }}
                                                    </p>
                                                    <p class="card-text"><b>Airline:</b> {{ $booking->airName }}</p>
                                                    <p class="card-text">{{ $booking->departureLocation }}</p>
                                                    <p class="card-text"><b>Departure Time:</b>
                                                        {{ $booking->departureTimes }}</p>
                                                    <p class="card-text"><b>Departure Date:</b>
                                                        {{ date('d/m/Y', strtotime($booking->departureDate)) }}</p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text"><b>Duration:</b> {{ $booking->durationText }}</p>
                                                    <p class="card-text"><b>Stop:</b> {{ $booking->stopText }}</p>
                                                </div>
                                                <div class="col-md-5">
                                                    @foreach (json_decode($booking->stopsTime, true) as $stop)
                                                        <p class="card-text">
                                                        <div class="card mb-2">
                                                            <div class="card-header">
                                                                <strong style="color: #337ab7;">Stop:</strong> <span
                                                                    style="font-weight: bold; color: #ff9700;">{{ date('H:i', strtotime($stop['start_time'])) }}
                                                                    {{ $stop['city'] }} {{ $stop['airport_name'] }}</span>
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-text"><strong style="color: #337ab7;">Waiting
                                                                        Time:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ $stop['waiting_time'] }}</span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure in
                                                                        {{ $stop['city'] }}:</strong> <span
                                                                        style="font-weight: bold; color: #337ab7;">{{ $stop['airport_name'] }}</span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure Date:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ date('d-m-Y', strtotime($stop['depaturetime'])) }}</span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure Time:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ date('H:i', strtotime($stop['depaturetime'])) }}</span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Arrival:</strong> <span
                                                                        style="font-weight: bold; color: #337ab7;">{{ $stop['next_airport_name'] }}</span>
                                                                </p>
                                                                <p class="card-text"><strong style="color: #337ab7;">Arrival
                                                                        Date:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ date('d-m-Y', strtotime($stop['end_time'])) }}</span>
                                                                </p>
                                                                <p class="card-text"><strong style="color: #337ab7;">Arrival
                                                                        Time:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ date('H:i', strtotime($stop['end_time'])) }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        </p>
                                                    @endforeach
                                                </div>
                                                <div class="col-md-2">
                                                    <p class="card-text"><b>To:</b> {{ $booking->arrivalLocation }}</p>
                                                    <p class="card-text"><b>Arrival Time:</b> {{ $booking->arrivalTimes }}
                                                    </p>
                                                    <p class="card-text"><b>Arrival Date:</b> {{ $booking->arrivalDate }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                        @if ($booking->returnDate && $booking->date)
                            {{-- @dd($booking); --}}
                            <tr>
                                <th class="bg-light">Depature Flight Details</th>
                                <td>
                                    <div class="card mb-3">
                                        <div class="row p-1">
                                            <div class="col-6">
                                                <h5 class="card-title mb-0"> {{ $booking->departureLocation }}->
                                                    {{ $booking->to }} </h5>
                                            </div>
                                            <div class="col-6 text-end">
                                                <span data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                                    class="btn btn-primary btn-sm">
                                                    flight Details
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <p class="card-text"><b>Flight
                                                            Name:</b>{{ $booking->airName }}
                                                    </p>
                                                    <p class="card-text"><b>Flight
                                                            Number:</b>{{ $booking->airCode }}-{{ $booking->flightNumbers }}
                                                    </p>
                                                    <p class="card-text">{{ $booking->departureLocation }}</p>
                                                    <p class="card-text"><b>Departure Time:</b>
                                                        {{ $booking->departureTimes }}</p>
                                                    <p class="card-text"><b>Departure Date:</b>
                                                        {{ date('d/m/Y', strtotime($booking->departureDate)) }}</p>
                                                </div>
                                                @php $i=0 @endphp
                                                @foreach (json_decode($booking->stopsTime, true) as $stop)
                                                    <?php
                                if (isset($stop['end_time']) && date('Y-m-d', strtotime($stop['end_time'])) == date('Y-m-d', strtotime($booking->returnDate))) {
                                   ?>
                                                    <div class="col-sm-4">
                                                        <div class="card-header">
                                                            <strong style="color: #337ab7;">Stop:</strong> <span
                                                                style="font-weight: bold; color: #ff9700;">{{ date('d-m-Y H:i', strtotime($stop['start_time'])) }}
                                                                {{ $stop['city'] }} {{ $stop['airport_name'] }}</span>
                                                        </div>
                                                        <?php 
                                    break;
                                }
                                else{ ?>
                                                        <div class="col-sm-4">
                                                            <p class="card-text">
                                                            <div class="card mb-2">
                                                                <div class="card-header">
                                                                    <strong style="color: #337ab7;">Stop:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ date('H:i', strtotime($stop['start_time'])) }}
                                                                        {{ $stop['city'] }}
                                                                        {{ $stop['airport_name'] }}</span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Waiting
                                                                            Time:</strong> <span
                                                                            style="font-weight: bold; color: #ff9700;">{{ $stop['waiting_time'] }}</span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Departure in
                                                                            {{ $stop['city'] }}:</strong> <span
                                                                            style="font-weight: bold; color: #337ab7;">{{ $stop['airport_name'] }}</span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Departure
                                                                            Date:</strong>
                                                                        <span
                                                                            style="font-weight: bold; color: #ff9700;">{{ date('d-m-Y', strtotime($stop['depaturetime'])) }}</span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Departure
                                                                            Time:</strong>
                                                                        <span
                                                                            style="font-weight: bold; color: #ff9700;">{{ date('H:i', strtotime($stop['depaturetime'])) }}</span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Arrival:</strong> <span
                                                                            style="font-weight: bold; color: #337ab7;">{{ $stop['next_airport_name'] }}</span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Arrival
                                                                            Date:</strong> <span
                                                                            style="font-weight: bold; color: #ff9700;">{{ date('d-m-Y', strtotime($stop['end_time'])) }}</span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Arrival
                                                                            Time:</strong> <span
                                                                            style="font-weight: bold; color: #ff9700;">{{ date('H:i', strtotime($stop['end_time'])) }}</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            </p>
                                                            <?php 
                    $i++;
                     }
                        ?>
                                                        </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                        @if ($booking->returnDate && $booking->date)
         @php   $stopsTime = json_decode($booking->stopsTime, true); @endphp

    @php if(count($stopsTime) == $i){ 
          echo '';
     }else{

@endphp;
                            <tr>
                                <th class="bg-light">Return Flight Details</th>
                                <td>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">
                                                {{ $booking->to }}---->{{ $booking->arrivalLocation }}</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">

                                                @for ($index = $i; $index < count($stopsTime); $index++)
                                                    @php $stop = $stopsTime[$index]; @endphp
                                                    <div class="col-md-4">
                                                        <div class="card mb-2">
                                                            <div class="card-header">
                                                                <span style="font-weight: bold; color: #ff9700;">
                                                                    {{ $stop['city'] }} {{ $stop['airport_name'] }}</span>
                                                            </div>
                                                            <div class="card-body">
                                                                {{-- <p class="card-text"><strong style="color: #337ab7;">Waiting Time:</strong> <span
                    style="font-weight: bold; color: #ff9700;">{{ $stop['waiting_time'] }}</span>
                </p> --}}
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure in
                                                                        {{ $stop['city'] }}:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #337ab7;">{{ $stop['airport_name'] }}</span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure Date:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ date('d-m-Y', strtotime($stop['depaturetime'])) }}</span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure Time:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ date('H:i', strtotime($stop['depaturetime'])) }}</span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Arrival:</strong> <span
                                                                        style="font-weight: bold; color: #337ab7;">{{ $stop['next_airport_name'] }}</span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Arrival
                                                                        Date:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ date('d-m-Y', strtotime($stop['end_time'])) }}</span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Arrival
                                                                        Time:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;">{{ date('H:i', strtotime($stop['end_time'])) }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
           @php   }    @endphp 
                        @endif
                        @if ($booking->adults)
                            <tr>
                                <th class="bg-light">Passengers</th>
                                <td>
                                    @if ($booking->adults)
                                        {{ $booking->adults }}-Adults,
                                    @endif
                                    @if ($booking->children)
                                        {{ $booking->children }}-Children,
                                    @endif
                                    @if ($booking->infants)
                                        {{ $booking->infants }}-Infants
                                    @endif
                                </td>
                            </tr>
                        @endif

                        {{-- @if ($booking->totalBaseFare)
                            <tr>
                                <th class="bg-light">Base Fare</th>
                                <td>
                                    @if ($booking->currency_type)
                                        {!! $booking->currency_type !!}
                                    @endif
                                    {{ number_format($booking->totalBaseFare, 2) }}
                                </td>
                            </tr>
                        @endif

                        @if ($booking->totalTaxes)
                            <tr>
                                <th class="bg-light">Taxes</th>
                                <td>
                                    @if ($booking->currency_type)
                                        {!! $booking->currency_type !!}
                                    @endif {{ $booking->totalTaxes }}
                                </td>
                            </tr>
                        @endif
                        @if ($booking->totalDiscount)
                            <tr>
                                <th class="bg-light"> Discount</th>
                                <td>
                                    @if ($booking->currency_type)
                                        {!! $booking->currency_type !!}
                                    @endif {{ $booking->totalDiscount }}
                                </td>
                            </tr>
                        @endif --}}
                        @if ($booking->departure)
                            <tr>
                                <th class="bg-light">Departure</th>
                                <td>
                                    <div class="row">
                                        @php
                                            $bookingData = Crypt::decryptString($booking->departure);
                                            $book = unserialize($bookingData);
                                        @endphp
                                        <div class="col-md-12">
                                            @if (isset($book) && !empty($book) && is_array($book))
                                                @php
                                                    $startingDeparture =
                                                        $book[1]['departureLocation'] ?? 'Unknown Departure Location';
                                                    $finalArrival = 'Unknown Arrival Location';
                                                    foreach ($book as $key => $flight) {
                                                        if (is_array($flight) && isset($flight['arrivalLocation'])) {
                                                            $finalArrival = $flight['arrivalLocation'];
                                                        }
                                                    }
                                                @endphp
                                                <h5>{{ $startingDeparture }}----> {{ $finalArrival }}</h5>
                                            @else
                                                <p>No flight information available.</p>
                                            @endif
                                        </div>

                                        @if (isset($book) && !empty($book))
                                            @foreach ($book as $key => $flight)
                                                <div class="col-md-4"
                                                    style="    line-height: 28px;
    margin-left: 10px;background-color: #f1f1f1; border: 1px solid #ddd; padding: 0px; margin-bottom: 0px;">
                                                    @if (is_array($flight))
                                                    <div class="padding-left" style="padding-left: 10px;">
                                                        <h4 style="color: #d16527;">Flight {{ $key }}</h4>
                                                        <strong style="color: #337ab7; ">Airline Code:</strong>
                                                        {{ $flight['airCode'] }}<br>
                                                        <strong style="color: #337ab7;">Airline Name:</strong>
                                                        {{ $flight['airName'] }}<br>
                                                        <strong style="color: #337ab7;">Flight Number:</strong>
                                                        {{ $flight['flightNumbers'] }}<br>
                                                        <strong style="color: #337ab7;">Departure
                                                            Locations:</strong>{{ $flight['departureLocations'] }}<br>
                                                        <strong style="color: #337ab7;">Departure Time:</strong>
                                                        {{ $flight['departureTimes'] }}<br>
                                                        <strong style="color: #337ab7;">Departure Date:</strong>
                                                        {{ $flight['departureDate'] }}<br>
                                                        <strong style="color: #337ab7;">Duration:</strong>
                                                        {{ $flight['durationText'] }}<br>
                                                        <strong style="color: #337ab7;">Arrival Time:</strong>
                                                        {{ $flight['arrivalTimes'] }}<br>
                                                        <strong style="color: #337ab7;">Arrival Date:</strong>
                                                        {{ $flight['arrivalDate'] }}<br>
                                                        <strong style="color: #337ab7;">Arrival
                                                            Locations:</strong>{{ $flight['arrivalLocations'] }}<br>
                                                    </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                            <table class="table table-bordered table-striped pt-1">
                                                <tr>
                                                    <th>Total Base Fare</th>
                                                    <th>Total Taxes</th>
                                                    <th>Total Discount</th>
                                                    <th>Total Fare</th>
                                                </tr>
                                                <tr>
                                                    <td> {!! $booking->currency_type !!}
                                                        {{ number_format($book['totalBaseFare'] ?? 0, 2) }}</td>
                                                    <td> {!! $booking->currency_type !!}
                                                        {{ number_format($book['totalTaxes'] ?? 0, 2) }}</td>
                                                    <td> {!! $booking->currency_type !!}
                                                        {{ number_format($book['totalDiscount'] ?? 0, 2) }}</td>
                                                    <td> {!! $booking->currency_type !!}
                                                        {{ number_format($book['totalFare'] ?? 0, 2) }}</td>
                                                </tr>
                                            </table>
                                        @else
                                            <div>No booking information available.</div>
                                        @endif
                                    </div>
                                </td>

                            </tr>
                        @endif
                        @if ($booking->return)
                            <tr>
                                <th class="bg-light">Return</th>
                                <td>
                                    <div class="row">
                                        @php
                                            $bookingReturn = Crypt::decryptString($booking->return);
                                            $bookReturn = unserialize($bookingReturn);
                                        @endphp
                                        <div class="col-md-12">
                                            @if (isset($bookReturn) && !empty($bookReturn) && is_array($bookReturn))
                                                @php
                                                    // Get the starting departure location from the first flight
                                                    $startingDeparture =
                                                        $bookReturn[0]['departureLocation'] ??
                                                        'Unknown Departure Location';

                                                    // Initialize variable for final arrival location
                                                    $finalArrival = 'Unknown Arrival Location';

                                                    // Loop through the bookReturn array to find the last flight's arrival location
foreach ($bookReturn as $key => $flight) {
    if (is_array($flight) && isset($flight['arrivalLocation'])) {
        $finalArrival = $flight['arrivalLocation'];
                                                        }
                                                    }
                                                @endphp

                                                <h5>{{ $startingDeparture }}----> {{ $finalArrival }}</h5>
                                            @else
                                                <p>No flight information available.</p>
                                            @endif
                                        </div>
                                        @if (isset($bookReturn) && !empty($bookReturn))
                                            @foreach ($bookReturn as $key => $flight)
                                                {{-- <div class="col-md-4"
                                                    style="background-color: #f1f1f1; border: 1px solid #ddd; padding: 0px; margin-bottom: 0px;">
                                                    @if (is_array($flight))
                                                        <h4 style="color: #d16527;">Flight {{ $key + 1 }}</h4>
                                                        <strong style="color: #337ab7;">Airline Code:</strong>
                                                        {{ $flight['airCode'] }}<br>
                                                        <strong style="color: #337ab7;">Airline Name:</strong>
                                                        {{ $flight['airName'] }}<br>
                                                        <strong style="color: #337ab7;">Flight Number:</strong>
                                                        {{ $flight['flightNumbers'] }}<br>
                                                        <strong style="color: #337ab7;">Departure
                                                            Locations:</strong>{{ $flight['departureLocations'] }}<br>
                                                        <strong style="color: #337ab7;">Departure Time:</strong>
                                                        {{ $flight['departureTimes'] }}<br>
                                                        <strong style="color: #337ab7;">Departure Date:</strong>
                                                        {{ $flight['departureDate'] }}<br>
                                                        <strong style="color: #337ab7;">Duration:</strong>
                                                        {{ $flight['durationText'] }}<br>
                                                        <strong style="color: #337ab7;">Arrival Time:</strong>
                                                        {{ $flight['arrivalTimes'] }}<br>
                                                        <strong style="color: #337ab7;">Arrival Date:</strong>
                                                        {{ $flight['arrivalDate'] }}<br>
                                                        <strong style="color: #337ab7;">Arrival
                                                            Locations:</strong>{{ $flight['arrivalLocations'] }}<br>
                                                    @endif
                                                </div> --}}
                                                <div class="col-md-4" style="background-color: #f9f9f9;    line-height: 18px;
    margin-left: 10px; border: 1px solid #ddd; border-radius: 8px; padding: 15px; margin-bottom: 15px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);">
                                                    @if (is_array($flight))
                                                        <h4 style="color: #d16527; font-weight: bold; margin-bottom: 10px;">Flight {{ $key + 1 }}</h4>
                                                        <p><strong style="color: #337ab7;">Airline Code:</strong> {{ $flight['airCode'] }}</p>
                                                        <p><strong style="color: #337ab7;">Airline Name:</strong> {{ $flight['airName'] }}</p>
                                                        <p><strong style="color: #337ab7;">Flight Number:</strong> {{ $flight['flightNumbers'] }}</p>
                                                        <p><strong style="color: #337ab7;">Departure Locations:</strong> {{ $flight['departureLocations'] }}</p>
                                                        <p><strong style="color: #337ab7;">Departure Time:</strong> {{ $flight['departureTimes'] }}</p>
                                                        <p><strong style="color: #337ab7;">Departure Date:</strong> {{ $flight['departureDate'] }}</p>
                                                        <p><strong style="color: #337ab7;">Duration:</strong> {{ $flight['durationText'] }}</p>
                                                        <p><strong style="color: #337ab7;">Arrival Time:</strong> {{ $flight['arrivalTimes'] }}</p>
                                                        <p><strong style="color: #337ab7;">Arrival Date:</strong> {{ $flight['arrivalDate'] }}</p>
                                                        <p><strong style="color: #337ab7;">Arrival Locations:</strong> {{ $flight['arrivalLocations'] }}</p>
                                                    @endif
                                                </div>
                                                
                                            @endforeach
                                            <table class="table table-bordered table-striped pt-1">
                                                <tr>
                                                    <th>Total Base Fare</th>
                                                    <th>Total Taxes</th>
                                                    <th>Total Discount</th>
                                                    <th>Total Fare</th>
                                                </tr>
                                                <tr>
                                                    <td>{!! $booking->currency_type !!}
                                                        {{ number_format($bookReturn['totalBaseFare'] ?? 0, 2) }}
                                                    </td>
                                                    <td>{!! $booking->currency_type !!}
                                                        {{ number_format($bookReturn['totalTaxes'] ?? 0, 2) }}</td>
                                                    <td>{!! $booking->currency_type !!}
                                                        {{ number_format($bookReturn['totalDiscount'] ?? 0, 2) }}
                                                    </td>
                                                    <td>{!! $booking->currency_type !!}
                                                        {{ number_format($bookReturn['totalFare'] ?? 0, 2) }}</td>
                                                </tr>
                                            </table>
                                        @else
                                            <div style="color: #337ab7;">No booking information available.</div>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @if (isset($book['adults']) && $book['adults'] > 0)
                                <tr>
                                    <th class="bg-light">Passengers</th>
                                    <td>{{ $book['adults'] ?? 0 }} Adults, {{ $book['children'] ?? 0 }} Children,
                                        {{ $book['infants'] ?? 0 }} Infants</td>
                                </tr>
                            @endif
                        @endif
                        @if ($booking->combo_return)
                            <tr>
                                <th class="bg-light">Combo Return</th>
                                <td>{{ $booking->combo_return }}</td>
                            </tr>
                        @endif
                        @if ($booking->adults_details)
                            <tr>
                                <th class="bg-light">Adults Details</th>
                                <td>
                                    @php
                                        $adultsDetails = json_decode($booking->adults_details, true);
                                    @endphp
                                    @if ($adultsDetails)
                                        <ul>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped m-0">
                                                    <tbody>
                                                        @if (is_array($adultsDetails))
                                                            @foreach ($adultsDetails as $adult)
                                                                <tr>
                                                                    <td>
                                                                        <strong>Name:</strong> {{ $adult['fname'] ?? '' }}
                                                                        {{ $adult['lname'] ?? '' }}
                                                                    </td>
                                                                    <td>
                                                                        <strong>Gender:</strong>
                                                                        {{ $adult['gender'] ?? '' }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td colspan="2">No details available.</td>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                </table>

                                            </div>
                                        @else
                                            No details available.
                                    @endif

                                </td>
                            </tr>
                        @endif
                        @if ($booking->children_details)
                            <tr>
                                <th class="bg-light">children Details</th>
                                <td>
                                    @php
                                        $adultsDetails = json_decode($booking->children_details, true);
                                    @endphp
                                    @if ($adultsDetails)
                                        <ul>
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    @if (is_array($adultsDetails))
                                                        @foreach ($adultsDetails as $adult)
                                                            <tr>
                                                                <td>
                                                                    <strong>Name:</strong> {{ $adult['fname'] ?? '' }}
                                                                    {{ $adult['lname'] ?? '' }}
                                                                </td>
                                                                <td>
                                                                    <strong>Gender:</strong> {{ $adult['gender'] ?? '' }}
                                                                </td>
                                                                <td>
                                                                    <strong>Dob:</strong>
                                                                    {{ \Carbon\Carbon::parse($adult['dob'] ?? '')->format('d-m-Y') }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="3">No details available.</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>

                                        </ul>
                                    @else
                                        No details available.
                                    @endif

                                </td>
                            </tr>
                        @endif
                        @if ($booking->infants_details)
                            <tr>
                                <th class="bg-light">Infants Details</th>
                                <td>
                                    @php
                                        $adultsDetails = json_decode($booking->infants_details, true);
                                    @endphp
                                    @if ($adultsDetails)
                                        <ul>
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    @if (is_array($adultsDetails))
                                                        @foreach ($adultsDetails as $adult)
                                                            <tr>
                                                                <td>
                                                                    <strong>Name:</strong> {{ $adult['fname'] ?? '' }}
                                                                    {{ $adult['lname'] ?? '' }}
                                                                </td>
                                                                <td>
                                                                    <strong>Gender:</strong> {{ $adult['gender'] ?? '' }}
                                                                </td>
                                                                <td>
                                                                    <strong>Dob:</strong>
                                                                    {{ \Carbon\Carbon::parse($adult['dob'] ?? '')->format('d-m-Y') }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="3">No details available.</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </ul>
                                    @else
                                        No details available.
                                    @endif

                                </td>
                            </tr>
                        @endif
                        @if ($booking->customer_notes)
                            <tr>
                                <th class="bg-light">Customer Notes</th>
                                <td>{{ $booking->customer_notes }}</td>
                            </tr>
                        @endif
                        @if ($booking->term_conditions)
                            <tr>
                                <th class="bg-light">Terms and Conditions</th>
                                <td>
                                    @if ($booking->term_conditions)
                                        true
                                    @else
                                        false
                                    @endif
                                </td>
                            </tr>
                        @endif

                    </tbody>

                </table>

                <div class="mt-3">
                    <a href="{{ route('flight.admin.booking.index') }}" class="btn btn-primary">Back to All Bookings</a>

                </div>

            </div>

        </div>

    </div>
@endsection
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- Modal -->
<div class="modal-dialog modal-dialog-scrollable">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($booking->flight_details)
                    <div class="col-md-12 col-12">
                        <div class="card-header text-center ">
                            <b class="font_manish " style="color: #ff7d01">Departure
                                Flight</b>
                        </div>
                    </div>
                        @foreach (json_decode($booking->flight_details, true) as $flightad)
                            @if ($flightad['da']['code'] == $booking->to)
                            <div class="col-md-12 col-12">
                                <div class="card-header text-center ">
                                    <b class="font_manish " style="color: #ff7d01">Return
                                        Flight</b>
                                </div>
                            </div>
                                <div class="container-fluid">
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-12 col-md-12">
                                            <div class="card shadow-lg rounded border-0">
                                                <div class="card-body">
                                                    <!-- Flight Header -->
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-3">
                                                        <div>
                                                            <h4 class="text-primary mb-0">
                                                                {{ $flightad['fD']['aI']['name'] }}
                                                            </h4>
                                                            <p class="text-muted">
                                                                @if (isset($flightad['fD']['aI']) && isset($flightad['fD']['aI']['name']))
                                                                    <strong>Flight Number:</strong>
                                                                    {{ $flightad['fD']['aI']['code'] }}-{{ $flightad['fD']['fN'] }}
                                                                @else
                                                                    Not available
                                                                @endif
                                                                |<strong>Aircraft Type:</strong>
                                                                {{ $flightad['fD']['eT'] }}
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <h5 class="text-success">
                                                                {{ floor($flightad['duration'] / 60) }} hours
                                                                {{ $flightad['duration'] % 60 }} min
                                                            </h5>
                                                            <p class="text-muted">Duration</p>
                                                        </div>
                                                    </div>

                                                    <!-- Flight Information Grid -->
                                                    <div class="row">
                                                        <!-- Departure Info -->
                                                        <div class="col-sm-5">
                                                            <h5 class="text-info">Departure</h5>
                                                            <ul class="list-unstyled">
                                                                <li><strong>Airport:</strong>
                                                                    {{ $flightad['da']['name'] }}
                                                                    ({{ $flightad['da']['code'] }})
                                                                </li>
                                                                <li><strong>City:</strong>
                                                                    {{ $flightad['da']['city'] }}</li>
                                                                @if (isset($flightad['da']['terminal']))
                                                                    <li><strong>Terminal:</strong>
                                                                        {{ $flightad['da']['terminal'] }}</li>
                                                                @endif
                                                                <li><strong>Time:</strong>
                                                                    {{ \Carbon\Carbon::parse($flightad['dt'])->format('d M Y, h:i A') }}
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- Flight Duration Info -->
                                                        <div class="col-sm-2 text-center">
                                                            <div
                                                                class="d-flex justify-content-center align-items-center">
                                                                <div class="rounded-circle bg-info text-white"
                                                                    style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                                                    <i class="bi bi-clock-fill"></i>
                                                                </div>
                                                            </div>
                                                            <h5 class="mt-3 text-muted">Duration</h5>
                                                            <p class="text-primary">
                                                                {{ floor($flightad['duration'] / 60) }} hours
                                                                {{ $flightad['duration'] % 60 }} min
                                                            </p>
                                                        </div>
                                                        <!-- Arrival Info -->
                                                        <div class="col-sm-5">
                                                            <h5 class="text-success">Arrival</h5>
                                                            <ul class="list-unstyled">
                                                                <li><strong>Airport:</strong>
                                                                    {{ $flightad['aa']['name'] }}
                                                                    ({{ $flightad['aa']['code'] }})</li>
                                                                <li><strong>City:</strong>
                                                                    {{ $flightad['aa']['city'] }}</li>
                                                                @if (isset($flightad['aa']['terminal']))
                                                                    <li><strong>Terminal:</strong>
                                                                        {{ $flightad['aa']['terminal'] }}</li>
                                                                @endif
                                                                <li><strong>Time:</strong>
                                                                    {{ \Carbon\Carbon::parse($flightad['at'])->format('d M Y, h:i A') }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Flight Info Footer -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="container-fluid">
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-12 col-md-12">
                                            <div class="card shadow-lg rounded border-0">
                                                <div class="card-body">
                                                    <!-- Flight Header -->
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-3">
                                                        <div>
                                                            <h4 class="text-primary mb-0">
                                                                {{ $flightad['fD']['aI']['name'] }}
                                                            </h4>
                                                            <p class="text-muted">
                                                                @if (isset($flightad['fD']['aI']) && isset($flightad['fD']['aI']['name']))
                                                                    <strong>Flight Number:</strong>
                                                                    {{ $flightad['fD']['aI']['code'] }}-{{ $flightad['fD']['fN'] }}
                                                                @else
                                                                    Not available
                                                                @endif
                                                                |<strong>Aircraft Type:</strong>
                                                                {{ $flightad['fD']['eT'] }}
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <h5 class="text-success">
                                                                {{ floor($flightad['duration'] / 60) }} hours
                                                                {{ $flightad['duration'] % 60 }} min
                                                            </h5>
                                                            <p class="text-muted">Duration</p>
                                                        </div>
                                                    </div>

                                                    <!-- Flight Information Grid -->
                                                    <div class="row">
                                                        <!-- Departure Info -->
                                                        <div class="col-sm-5">
                                                            <h5 class="text-info">Departure</h5>
                                                            <ul class="list-unstyled">
                                                                <li><strong>Airport:</strong>
                                                                    {{ $flightad['da']['name'] }}
                                                                    ({{ $flightad['da']['code'] }})
                                                                </li>
                                                                <li><strong>City:</strong>
                                                                    {{ $flightad['da']['city'] }}</li>
                                                                @if (isset($flightad['da']['terminal']))
                                                                    <li><strong>Terminal:</strong>
                                                                        {{ $flightad['da']['terminal'] }}</li>
                                                                @endif
                                                                <li><strong>Time:</strong>
                                                                    {{ \Carbon\Carbon::parse($flightad['dt'])->format('d M Y, h:i A') }}
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <!-- Flight Duration Info -->
                                                        <div class="col-sm-2 text-center">
                                                            <div
                                                                class="d-flex justify-content-center align-items-center">
                                                                <div class="rounded-circle bg-info text-white"
                                                                    style="width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;">
                                                                    <i class="bi bi-clock-fill"></i>
                                                                </div>
                                                            </div>
                                                            <h5 class="mt-3 text-muted">Duration</h5>
                                                            <p class="text-primary">
                                                                {{ floor($flightad['duration'] / 60) }} hours
                                                                {{ $flightad['duration'] % 60 }} min
                                                            </p>
                                                        </div>
                                                        <!-- Arrival Info -->
                                                        <div class="col-sm-5">
                                                            <h5 class="text-success">Arrival</h5>
                                                            <ul class="list-unstyled">
                                                                <li><strong>Airport:</strong>
                                                                    {{ $flightad['aa']['name'] }}
                                                                    ({{ $flightad['aa']['code'] }})</li>
                                                                <li><strong>City:</strong>
                                                                    {{ $flightad['aa']['city'] }}</li>
                                                                @if (isset($flightad['aa']['terminal']))
                                                                    <li><strong>Terminal:</strong>
                                                                        {{ $flightad['aa']['terminal'] }}</li>
                                                                @endif
                                                                <li><strong>Time:</strong>
                                                                    {{ \Carbon\Carbon::parse($flightad['at'])->format('d M Y, h:i A') }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Flight Info Footer -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
