<style>
    .table td,
    .table th {
        padding: 1rem !important;
    }
</style>
@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <div class="mt-3 " style="padding-bottom: 25px;">
                    <a href="{{ route('flight.admin.booking.leads') }}" class="btn btn-primary">Back to All leads</a>

                </div>
                            <td colspan="2">
                               
                                        @if ($booking->first_name)
                                            <p class="card-text"><b>Passenger Name: </b> {{ $booking->first_name }} @if ($booking->last_name)
                                                    {{ $booking->last_name }}
                                                @endif
                                            </p>
                                        @endif
                                  
                                        @if ($booking->phone)
                                            <p class="card-text"><b>Phone: </b> {{ $booking->phone }}</p>
                                        @endif
                                  
                                    
                                        @if ($booking->address)
                                            <p class="card-text"><b>Address:</b> {{ $booking->address }}</p>
                                        @endif
                                 
                      
                                        @if ($booking->city)
                                            <p class="card-text"><b>City:</b> {{ $booking->city }}</p>
                                        @endif
                                   
                                        @if ($booking->state)
                                            <p class="card-text"><b>State :</b> {{ $booking->state }}</p>
                                        @endif
                                        @if ($booking->country)
                                            <p class="card-text"><b>Country :</b> {{ $booking->country }}</p>
                                        @endif
                                            <p class="card-text"><b>Flight from :</b> {{ $booking->from }}</p>
                       
                                            <p class="card-text"><b>Flight To :</b> {{ $booking->to }}</p>
                                    
                                            <p class="card-text"><b>Flight Date :</b> {{ $booking->on_date }}</p>
                                            <p class="card-text"><b>Flight Return Date :</b> {{ $booking->return_date }}</p>
                                            <p class="card-text"><b>Flight Type :</b> {{ ($booking->flight_type=='return')?'round trip':'one-way'}}</p>
                                    </div>
                         
                            
                            </td>
                        </tr>
                        
                       
               

        </div>

    </div>
@endsection
