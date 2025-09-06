<?php
use Modules\Booking\Models\FlightBooking;
?>
<style>
.custom-confirm-button {
    background-color: #ff7d01; 
    color: #fff;              
}
.padding-content{
    padding: 25px 0;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
    Swal.fire({
        title: "Thank you!",
        text: "{{ session('success') }}",
        icon: "success",
        confirmButtonText: "OK",
        customClass: {
            confirmButton: 'custom-confirm-button'  // Add this class to customize the button
        }
    });
</script>

@endif
{{-- @dd($booking) --}}
<div class="bravo-booking-page padding-content">
    <div class="container">
        {{-- <div class="row booking-success-notice">
            <div class="col-lg-8 col-md-8"> --}}
                {{-- <div class="d-flex align-items-center">
                    <img src="https://sandbox.bookingcore.co/images/ico_success.svg" alt="Payment Success"> --}}
                    {{-- <div class="notice-success">
                        <p class="line1"><span>{{ $booking->first_name}} {{$booking->last_name }}</span>
                            your booking was submitted successfully!!!
                        </p> --}}
                        {{-- <p class="line2">Booking details has been sent to: <span>pumekujafa@mailinator.com</span></p> --}}
                    {{-- </div> --}}
                {{-- </div> --}}
            {{-- </div>
            
        </div> --}}
        <div class="row booking-success-detail">
           
        
     
            <div class="col-md-8">
                <div class="booking-review">
                    <h4 class="booking-review-title">Your Information</h4>
                    <div class="booking-review-content">
                        <div class="review-section">
                            <div class="info-form">
                                <ul>
                                    <li class="info-first-name">
                                        <div class="label">First name</div>
                                        <div class="val">{{$booking->first_name}}</div>
                                    </li>
                                    <li class="info-last-name">
                                        <div class="label">Last name</div>
                                        <div class="val">{{$booking->last_name}}</div>
                                    </li>
                                    <li class="info-email">
                                        <div class="label">Email</div>
                                        <div class="val">{{$booking->email}}</div>
                                    </li>
                                    <li class="info-phone">
                                        <div class="label">Phone</div>
                                        <div class="val">{{$booking->phone}}</div>
                                    </li>
                                    <li class="info-address">
                                        <div class="label">Address</div>
                                        <div class="val">{{$booking->address}}</div>
                                    </li>
                                    {{-- <li class="info-address2">
                                        <div class="label">Address line 2</div>
                                        <div class="val">Rem nostrud ipsum of</div>
                                    </li> --}}
                                    <li class="info-city">
                                        <div class="label">City</div>
                                        <div class="val">{{$booking->city}}</div>
                                    </li>
                                    <li class="info-state">
                                        <div class="label">State/Province/Region</div>
                                        <div class="val">{{$booking->state}}</div>
                                    </li>
                                    <li class="info-zip-code">
                                        <div class="label">ZIP code/Postal code</div>
                                        <div class="val">{{$booking->zip_code}}</div>
                                    </li>
                                    <li class="info-country">
                                        <div class="label">Country</div>
                                        <div class="val">{{$booking->country}}</div>
                                    </li>
                                    {{-- <li class="info-notes">
                                        <div class="label">Special Requirements</div>
                                        <div class="val">{{$booking->}}</div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="" class="btn btn-primary">Booking
                        History</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 pt-5 booking-success-notice">
               
                <ul class="booking-info-detail">
                    {{-- @php
                    try {
                        $dataToDebug = Crypt::decrypt($booking->departure);
                    } catch (\Exception $e) {
                        $dataToDebug = $booking->departure; 
                    }
                @endphp --}}
                <li><span>Booking Trip</span>: @if ($booking->departure && $booking->return)
                    Round Trip
                @elseif ($booking->returnDate && $booking->date)
                    Round Trip
                @else
                    One Way
                @endif</li>
                 @if (empty($booking->returnDate) && empty($booking->date) && !empty($booking->airName))
                {{-- @dd($dataToDebug); --}}
               
                    <li><span>Booking Date:</span> {{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y') }}</li>
                    <li><span>Booking Number:</span> {{ $booking->booking_id }}</li>
                    <li><span>Booking From:</span>{{ $booking->departureLocation }}</li>
                    <li><span>Booking To:</span>  {{ $booking->arrivalLocation }} </li>
                    {{-- <li><span class="bg-light">Total Fare:</span> {{ $dataToDebug['currency'] ?? 'No Data Available'}}-{{ $dataToDebug['totalFare'] ?? 'No Data Available' }}</li> --}}
                    @if ($booking->totalFare)
                    <li>
                        <span class="bg-light">Total Fare</span>
                        <td>
                            @if ($booking->currency_type)
                                {!! $booking->currency_type !!}
                            @endif {{ $booking->totalFare }}
                        </td>
                    </li>
                  @endif
                  @endif
                
                  @if ($booking->departure)
                  @php
                    try {
                        $dataToDebug = Crypt::decrypt($booking->departure);
                    } catch (\Exception $e) {
                        $dataToDebug = $booking->departure; 
                    }
                    // @dd($dataToDebug)
                @endphp
                 <li><span>Booking Date:</span> {{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y') }}</li>
                 <li><span>Booking Number:</span> {{ $booking->booking_id }}</li>
                 <li><span>Booking From:</span>{{ $dataToDebug[1]['departureLocation'] }}</li>
                 <li><span>Booking To:</span>  {{ $dataToDebug[1]['arrivalLocation'] }} </li>
                 <li>
                    @if ($booking->totalFare)
                    <span class="bg-light">Total Fare</span>
                    <td>
                        @if ($booking->currency_type)
                            {!! $booking->currency_type !!}
                        @endif {{ $booking->totalFare }}
                    </td>
                </li>
                @endif
                @endif
                  @if ($booking->returnDate && $booking->date)
                  
              {{-- @dd(json_decode($booking)) --}}
                  <li><span>Booking Date:</span> {{ \Carbon\Carbon::parse($booking->created_at)->format('d/m/Y') }}</li>
                  <li><span>Booking Number:</span> {{ $booking->booking_id }}</li>
                  <li><span>Booking From:</span>{{ $booking->departureLocation  }}</li>
                  <li><span>Booking To:</span>  {{ $booking->to}} </li>
                
                 {{-- <div class="row d-flex">
               
                    <div class="col-6" >  <b style=" font-size: large;">Airport from: </b>
                        @foreach  (json_decode($booking->flight_details, true) as $flight) <li> 
                            {{ $flight['da']['name'] ?? 'N/A' }}({{ $flight['da']['city'] ?? 'N/A' }})
                    </li>
                    @endforeach
                  </div>
                  <div class="col-6" > <b style="font-size: large;"> Airport to: </b> 
                    @foreach (json_decode($booking->flight_details, true) as $flight) 
                    <li> 
                        {{ $flight['aa']['name'] ?? 'N/A' }}({{ $flight['aa']['city'] ?? 'N/A' }})
                    </li>
                    @endforeach

                    
                </div>
                </div> --}}
                <div class="row d-flex">
                    <div class="col-6">
                        <b style="font-size: large;">Airport from: </b>
                        <span style="font-size: medium; color:black;">Departure Date: </span>
                        @foreach (json_decode($booking->flight_details, true) as $index => $flight)
                            <li>
                                {{ $flight['da']['name'] ?? 'N/A' }}({{ $flight['da']['city'] ?? 'N/A' }})
                            </li>
                            
                          
                            @if ($index == 1) 
                                @if (isset($flights[$index + 1]))
                                    <li>
                                        <b>Return Flight Departure: </b>{{ $flights[$index + 1]['da']['name'] ?? 'N/A' }}({{ $flights[$index + 1]['da']['city'] ?? 'N/A' }})
                                    </li>
                                @else
                                    <li>   <span style="font-size: medium;color:black;">Return Flight </span></li>
                                @endif
                            @endif
                        @endforeach
                    </div>
                
                    <div class="col-6" >
                        <b style="font-size: large;">Airport to: </b>
                        @foreach (json_decode($booking->flight_details, true) as $index => $flight)
                            <li style="padding-top: 16px;">
                                {{ $flight['aa']['name'] ?? 'N/A' }}({{ $flight['aa']['city'] ?? 'N/A' }})
                            </li>
                
                        
                            @if ($index == 1) 
                                @if (isset($flights[$index + 1]))
                                    <li>
                                        <b >Return Flight Arrival: </b>{{ $flights[$index + 1]['aa']['name'] ?? 'N/A' }}({{ $flights[$index + 1]['aa']['city'] ?? 'N/A' }})
                                    </li>
                                @else
                                    {{-- <li><b style="font-size: large;color: black;">Return Flight</b></li> --}}
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
                

                  <li>
                     @if ($booking->totalFare)
                     <span class="bg-light">Total Fare :</span>
                     <td>
                         @if ($booking->currency_type)
                             {!! $booking->currency_type !!}
                         @endif {{ $booking->totalFare }}
                     </td>
                     @endif 
                 </li>
                 {{-- @foreach (json_decode($booking->stopsTime, true) as $stop)
                  <li> <span>Airport Name: </span>{{ $stop['airport_name'] ?? 'N/A' }}</li>
                @endforeach --}}
                  @endif
                    {{-- <li><span>Payment Method:</span> Offline Payment</li> --}}
                    <li><span>Booking Status:</span> <span class="badge badge-primary badge-partial_payment" style="color:white;">Under Process</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
