<style>
    .table td, .table th {
        padding: 1rem !important;
    }
    .details-label {
        font-weight: bold;
        color: #6c757d;
    }
    .card-body p {
        margin-bottom: 0.75rem;
    }
</style>

@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title mb-0">Booking Details</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <a href="{{ route('flight.admin.booking.showquote') }}" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Back to All Leads
                    </a>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-2">
                        @if ($booking->name)
                            <p><span class="details-label">Name:</span> {{ $booking->name }}</p>
                        @endif
                        @if ($booking->email)
                            <p><span class="details-label">Email:</span> {{ $booking->email }}</p>
                        @endif
                        @if ($booking->phone)
                            <p><span class="details-label">Phone:</span> {{ $booking->phone }}</p>

                        @endif
 <p><span class="details-label">Flight From:</span> {{ $booking->from }}</p>
                    </div>

                    <div class="col-md-6 mb-2">
                       
                        <p><span class="details-label">Flight To:</span> {{ $booking->to }}</p>
                        <p><span class="details-label">Flight Date:</span> {{ $booking->start_date }}</p>
                        <p><span class="details-label">Return Date:</span> {{ $booking->enddate ?? 'N/A' }}</p>
                        <p><span class="details-label">Booking Type:</span> {{ ucfirst($booking->booking_type) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

