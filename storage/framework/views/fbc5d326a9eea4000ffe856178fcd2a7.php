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


<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">

                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php if($booking->first_name): ?>
                                            <p class="card-text"><b>Name: </b> <?php echo e($booking->first_name); ?> <?php if($booking->last_name): ?>
                                                    <?php echo e($booking->last_name); ?>

                                                <?php endif; ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php if($booking->phone): ?>
                                            <p class="card-text"><b>Phone: </b> <?php echo e($booking->phone); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php if($booking->email): ?>
                                            <p class="card-text"><b>Email:</b> <?php echo e($booking->email); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php if($booking->address): ?>
                                            <p class="card-text"><b>Address:</b> <?php echo e($booking->address); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php if($booking->city): ?>
                                            <p class="card-text"><b>City:</b> <?php echo e($booking->city); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php if($booking->state): ?>
                                            <p class="card-text"><b>State:</b> <?php echo e($booking->state); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php if($booking->country): ?>
                                            <p class="card-text"><b>Country:</b> <?php echo e($booking->country); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?php if($booking->zip_code): ?>
                                            <p class="card-text"><b>Zip Code:</b> <?php echo e($booking->zip_code); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php if($booking->totalFare): ?>
                            <tr>
                                <th class="bg-light">Total Fare</th>
                                <td>
                                    <?php if($booking->currency_type): ?>
                                        <?php echo $booking->currency_type; ?>

                                    <?php endif; ?> <?php echo e($booking->totalFare); ?>

                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if($booking->created_at): ?>
                            <tr>
                                <th class="bg-light">Booking Date</th>
                                <td><?php echo e(\Carbon\Carbon::parse($booking->created_at)->format('d/m/Y')); ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if($booking->flight_class): ?>
                            <tr>
                                <th class="bg-light">Flight Class</th>
                                <td><?php echo e($booking->flight_class == 'any' ? 'Economy' : $booking->flight_class); ?></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <th class="bg-light">Booking Trip</th>
                            <td>
                                <?php if($booking->departure && $booking->return): ?>
                                    Round Trip
                                <?php elseif($booking->returnDate && $booking->date): ?>
                                    Round Trip
                                <?php else: ?>
                                    One Way
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php if(empty($booking->returnDate) && empty($booking->date) && !empty($booking->airName)): ?>
                            <tr>
                                <th class="bg-light">Flight Details</th>
                                <td>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="card-title mb-0"> <?php echo e($booking->departureLocation); ?>->
                                                        <?php echo e($booking->arrivalLocation); ?> </h5>
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
                                                            Number:</b><?php echo e($booking->airCode); ?>-<?php echo e($booking->flightNumbers); ?>

                                                    </p>
                                                    <p class="card-text"><b>Airline:</b> <?php echo e($booking->airName); ?></p>
                                                    <p class="card-text"><?php echo e($booking->departureLocation); ?></p>
                                                    <p class="card-text"><b>Departure Time:</b>
                                                        <?php echo e($booking->departureTimes); ?></p>
                                                    <p class="card-text"><b>Departure Date:</b>
                                                        <?php echo e(date('d/m/Y', strtotime($booking->departureDate))); ?></p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="card-text"><b>Duration:</b> <?php echo e($booking->durationText); ?></p>
                                                    <p class="card-text"><b>Stop:</b> <?php echo e($booking->stopText); ?></p>
                                                </div>
                                                <div class="col-md-5">
                                                    <?php $__currentLoopData = json_decode($booking->stopsTime, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <p class="card-text">
                                                        <div class="card mb-2">
                                                            <div class="card-header">
                                                                <strong style="color: #337ab7;">Stop:</strong> <span
                                                                    style="font-weight: bold; color: #ff9700;"><?php echo e(date('H:i', strtotime($stop['start_time']))); ?>

                                                                    <?php echo e($stop['city']); ?> <?php echo e($stop['airport_name']); ?></span>
                                                            </div>
                                                            <div class="card-body">
                                                                <p class="card-text"><strong style="color: #337ab7;">Waiting
                                                                        Time:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e($stop['waiting_time']); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure in
                                                                        <?php echo e($stop['city']); ?>:</strong> <span
                                                                        style="font-weight: bold; color: #337ab7;"><?php echo e($stop['airport_name']); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure Date:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e(date('d-m-Y', strtotime($stop['depaturetime']))); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure Time:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e(date('H:i', strtotime($stop['depaturetime']))); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Arrival:</strong> <span
                                                                        style="font-weight: bold; color: #337ab7;"><?php echo e($stop['next_airport_name']); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong style="color: #337ab7;">Arrival
                                                                        Date:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e(date('d-m-Y', strtotime($stop['end_time']))); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong style="color: #337ab7;">Arrival
                                                                        Time:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e(date('H:i', strtotime($stop['end_time']))); ?></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        </p>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                <div class="col-md-2">
                                                    <p class="card-text"><b>To:</b> <?php echo e($booking->arrivalLocation); ?></p>
                                                    <p class="card-text"><b>Arrival Time:</b> <?php echo e($booking->arrivalTimes); ?>

                                                    </p>
                                                    <p class="card-text"><b>Arrival Date:</b> <?php echo e($booking->arrivalDate); ?>

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if($booking->returnDate && $booking->date): ?>
                            
                            <tr>
                                <th class="bg-light">Depature Flight Details</th>
                                <td>
                                    <div class="card mb-3">
                                        <div class="row p-1">
                                            <div class="col-6">
                                                <h5 class="card-title mb-0"> <?php echo e($booking->departureLocation); ?>->
                                                    <?php echo e($booking->to); ?> </h5>
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
                                                            Name:</b><?php echo e($booking->airName); ?>

                                                    </p>
                                                    <p class="card-text"><b>Flight
                                                            Number:</b><?php echo e($booking->airCode); ?>-<?php echo e($booking->flightNumbers); ?>

                                                    </p>
                                                    <p class="card-text"><?php echo e($booking->departureLocation); ?></p>
                                                    <p class="card-text"><b>Departure Time:</b>
                                                        <?php echo e($booking->departureTimes); ?></p>
                                                    <p class="card-text"><b>Departure Date:</b>
                                                        <?php echo e(date('d/m/Y', strtotime($booking->departureDate))); ?></p>
                                                </div>
                                                <?php $i=0 ?>
                                                <?php $__currentLoopData = json_decode($booking->stopsTime, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php
                                if (isset($stop['end_time']) && date('Y-m-d', strtotime($stop['end_time'])) == date('Y-m-d', strtotime($booking->returnDate))) {
                                   ?>
                                                    <div class="col-sm-4">
                                                        <div class="card-header">
                                                            <strong style="color: #337ab7;">Stop:</strong> <span
                                                                style="font-weight: bold; color: #ff9700;"><?php echo e(date('d-m-Y H:i', strtotime($stop['start_time']))); ?>

                                                                <?php echo e($stop['city']); ?> <?php echo e($stop['airport_name']); ?></span>
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
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e(date('H:i', strtotime($stop['start_time']))); ?>

                                                                        <?php echo e($stop['city']); ?>

                                                                        <?php echo e($stop['airport_name']); ?></span>
                                                                </div>
                                                                <div class="card-body">
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Waiting
                                                                            Time:</strong> <span
                                                                            style="font-weight: bold; color: #ff9700;"><?php echo e($stop['waiting_time']); ?></span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Departure in
                                                                            <?php echo e($stop['city']); ?>:</strong> <span
                                                                            style="font-weight: bold; color: #337ab7;"><?php echo e($stop['airport_name']); ?></span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Departure
                                                                            Date:</strong>
                                                                        <span
                                                                            style="font-weight: bold; color: #ff9700;"><?php echo e(date('d-m-Y', strtotime($stop['depaturetime']))); ?></span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Departure
                                                                            Time:</strong>
                                                                        <span
                                                                            style="font-weight: bold; color: #ff9700;"><?php echo e(date('H:i', strtotime($stop['depaturetime']))); ?></span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Arrival:</strong> <span
                                                                            style="font-weight: bold; color: #337ab7;"><?php echo e($stop['next_airport_name']); ?></span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Arrival
                                                                            Date:</strong> <span
                                                                            style="font-weight: bold; color: #ff9700;"><?php echo e(date('d-m-Y', strtotime($stop['end_time']))); ?></span>
                                                                    </p>
                                                                    <p class="card-text"><strong
                                                                            style="color: #337ab7;">Arrival
                                                                            Time:</strong> <span
                                                                            style="font-weight: bold; color: #ff9700;"><?php echo e(date('H:i', strtotime($stop['end_time']))); ?></span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            </p>
                                                            <?php 
                    $i++;
                     }
                        ?>
                                                        </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if($booking->returnDate && $booking->date): ?>
         <?php   $stopsTime = json_decode($booking->stopsTime, true); ?>

    <?php if(count($stopsTime) == $i){ 
          echo '';
     }else{

?>;
                            <tr>
                                <th class="bg-light">Return Flight Details</th>
                                <td>
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">
                                                <?php echo e($booking->to); ?>----><?php echo e($booking->arrivalLocation); ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-3">

                                                <?php for($index = $i; $index < count($stopsTime); $index++): ?>
                                                    <?php $stop = $stopsTime[$index]; ?>
                                                    <div class="col-md-4">
                                                        <div class="card mb-2">
                                                            <div class="card-header">
                                                                <span style="font-weight: bold; color: #ff9700;">
                                                                    <?php echo e($stop['city']); ?> <?php echo e($stop['airport_name']); ?></span>
                                                            </div>
                                                            <div class="card-body">
                                                                
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure in
                                                                        <?php echo e($stop['city']); ?>:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #337ab7;"><?php echo e($stop['airport_name']); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure Date:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e(date('d-m-Y', strtotime($stop['depaturetime']))); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Departure Time:</strong>
                                                                    <span
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e(date('H:i', strtotime($stop['depaturetime']))); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Arrival:</strong> <span
                                                                        style="font-weight: bold; color: #337ab7;"><?php echo e($stop['next_airport_name']); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Arrival
                                                                        Date:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e(date('d-m-Y', strtotime($stop['end_time']))); ?></span>
                                                                </p>
                                                                <p class="card-text"><strong
                                                                        style="color: #337ab7;">Arrival
                                                                        Time:</strong> <span
                                                                        style="font-weight: bold; color: #ff9700;"><?php echo e(date('H:i', strtotime($stop['end_time']))); ?></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
           <?php   }    ?> 
                        <?php endif; ?>
                        <?php if($booking->adults): ?>
                            <tr>
                                <th class="bg-light">Passengers</th>
                                <td>
                                    <?php if($booking->adults): ?>
                                        <?php echo e($booking->adults); ?>-Adults,
                                    <?php endif; ?>
                                    <?php if($booking->children): ?>
                                        <?php echo e($booking->children); ?>-Children,
                                    <?php endif; ?>
                                    <?php if($booking->infants): ?>
                                        <?php echo e($booking->infants); ?>-Infants
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endif; ?>

                        
                        <?php if($booking->departure): ?>
                            <tr>
                                <th class="bg-light">Departure</th>
                                <td>
                                    <div class="row">
                                        <?php
                                            $bookingData = Crypt::decryptString($booking->departure);
                                            $book = unserialize($bookingData);
                                        ?>
                                        <div class="col-md-12">
                                            <?php if(isset($book) && !empty($book) && is_array($book)): ?>
                                                <?php
                                                    $startingDeparture =
                                                        $book[1]['departureLocation'] ?? 'Unknown Departure Location';
                                                    $finalArrival = 'Unknown Arrival Location';
                                                    foreach ($book as $key => $flight) {
                                                        if (is_array($flight) && isset($flight['arrivalLocation'])) {
                                                            $finalArrival = $flight['arrivalLocation'];
                                                        }
                                                    }
                                                ?>
                                                <h5><?php echo e($startingDeparture); ?>----> <?php echo e($finalArrival); ?></h5>
                                            <?php else: ?>
                                                <p>No flight information available.</p>
                                            <?php endif; ?>
                                        </div>

                                        <?php if(isset($book) && !empty($book)): ?>
                                            <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-4"
                                                    style="    line-height: 28px;
    margin-left: 10px;background-color: #f1f1f1; border: 1px solid #ddd; padding: 0px; margin-bottom: 0px;">
                                                    <?php if(is_array($flight)): ?>
                                                    <div class="padding-left" style="padding-left: 10px;">
                                                        <h4 style="color: #d16527;">Flight <?php echo e($key); ?></h4>
                                                        <strong style="color: #337ab7; ">Airline Code:</strong>
                                                        <?php echo e($flight['airCode']); ?><br>
                                                        <strong style="color: #337ab7;">Airline Name:</strong>
                                                        <?php echo e($flight['airName']); ?><br>
                                                        <strong style="color: #337ab7;">Flight Number:</strong>
                                                        <?php echo e($flight['flightNumbers']); ?><br>
                                                        <strong style="color: #337ab7;">Departure
                                                            Locations:</strong><?php echo e($flight['departureLocations']); ?><br>
                                                        <strong style="color: #337ab7;">Departure Time:</strong>
                                                        <?php echo e($flight['departureTimes']); ?><br>
                                                        <strong style="color: #337ab7;">Departure Date:</strong>
                                                        <?php echo e($flight['departureDate']); ?><br>
                                                        <strong style="color: #337ab7;">Duration:</strong>
                                                        <?php echo e($flight['durationText']); ?><br>
                                                        <strong style="color: #337ab7;">Arrival Time:</strong>
                                                        <?php echo e($flight['arrivalTimes']); ?><br>
                                                        <strong style="color: #337ab7;">Arrival Date:</strong>
                                                        <?php echo e($flight['arrivalDate']); ?><br>
                                                        <strong style="color: #337ab7;">Arrival
                                                            Locations:</strong><?php echo e($flight['arrivalLocations']); ?><br>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <table class="table table-bordered table-striped pt-1">
                                                <tr>
                                                    <th>Total Base Fare</th>
                                                    <th>Total Taxes</th>
                                                    <th>Total Discount</th>
                                                    <th>Total Fare</th>
                                                </tr>
                                                <tr>
                                                    <td> <?php echo $booking->currency_type; ?>

                                                        <?php echo e(number_format($book['totalBaseFare'] ?? 0, 2)); ?></td>
                                                    <td> <?php echo $booking->currency_type; ?>

                                                        <?php echo e(number_format($book['totalTaxes'] ?? 0, 2)); ?></td>
                                                    <td> <?php echo $booking->currency_type; ?>

                                                        <?php echo e(number_format($book['totalDiscount'] ?? 0, 2)); ?></td>
                                                    <td> <?php echo $booking->currency_type; ?>

                                                        <?php echo e(number_format($book['totalFare'] ?? 0, 2)); ?></td>
                                                </tr>
                                            </table>
                                        <?php else: ?>
                                            <div>No booking information available.</div>
                                        <?php endif; ?>
                                    </div>
                                </td>

                            </tr>
                        <?php endif; ?>
                        <?php if($booking->return): ?>
                            <tr>
                                <th class="bg-light">Return</th>
                                <td>
                                    <div class="row">
                                        <?php
                                            $bookingReturn = Crypt::decryptString($booking->return);
                                            $bookReturn = unserialize($bookingReturn);
                                        ?>
                                        <div class="col-md-12">
                                            <?php if(isset($bookReturn) && !empty($bookReturn) && is_array($bookReturn)): ?>
                                                <?php
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
                                                ?>

                                                <h5><?php echo e($startingDeparture); ?>----> <?php echo e($finalArrival); ?></h5>
                                            <?php else: ?>
                                                <p>No flight information available.</p>
                                            <?php endif; ?>
                                        </div>
                                        <?php if(isset($bookReturn) && !empty($bookReturn)): ?>
                                            <?php $__currentLoopData = $bookReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                
                                                <div class="col-md-4" style="background-color: #f9f9f9;    line-height: 18px;
    margin-left: 10px; border: 1px solid #ddd; border-radius: 8px; padding: 15px; margin-bottom: 15px; box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);">
                                                    <?php if(is_array($flight)): ?>
                                                        <h4 style="color: #d16527; font-weight: bold; margin-bottom: 10px;">Flight <?php echo e($key + 1); ?></h4>
                                                        <p><strong style="color: #337ab7;">Airline Code:</strong> <?php echo e($flight['airCode']); ?></p>
                                                        <p><strong style="color: #337ab7;">Airline Name:</strong> <?php echo e($flight['airName']); ?></p>
                                                        <p><strong style="color: #337ab7;">Flight Number:</strong> <?php echo e($flight['flightNumbers']); ?></p>
                                                        <p><strong style="color: #337ab7;">Departure Locations:</strong> <?php echo e($flight['departureLocations']); ?></p>
                                                        <p><strong style="color: #337ab7;">Departure Time:</strong> <?php echo e($flight['departureTimes']); ?></p>
                                                        <p><strong style="color: #337ab7;">Departure Date:</strong> <?php echo e($flight['departureDate']); ?></p>
                                                        <p><strong style="color: #337ab7;">Duration:</strong> <?php echo e($flight['durationText']); ?></p>
                                                        <p><strong style="color: #337ab7;">Arrival Time:</strong> <?php echo e($flight['arrivalTimes']); ?></p>
                                                        <p><strong style="color: #337ab7;">Arrival Date:</strong> <?php echo e($flight['arrivalDate']); ?></p>
                                                        <p><strong style="color: #337ab7;">Arrival Locations:</strong> <?php echo e($flight['arrivalLocations']); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <table class="table table-bordered table-striped pt-1">
                                                <tr>
                                                    <th>Total Base Fare</th>
                                                    <th>Total Taxes</th>
                                                    <th>Total Discount</th>
                                                    <th>Total Fare</th>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $booking->currency_type; ?>

                                                        <?php echo e(number_format($bookReturn['totalBaseFare'] ?? 0, 2)); ?>

                                                    </td>
                                                    <td><?php echo $booking->currency_type; ?>

                                                        <?php echo e(number_format($bookReturn['totalTaxes'] ?? 0, 2)); ?></td>
                                                    <td><?php echo $booking->currency_type; ?>

                                                        <?php echo e(number_format($bookReturn['totalDiscount'] ?? 0, 2)); ?>

                                                    </td>
                                                    <td><?php echo $booking->currency_type; ?>

                                                        <?php echo e(number_format($bookReturn['totalFare'] ?? 0, 2)); ?></td>
                                                </tr>
                                            </table>
                                        <?php else: ?>
                                            <div style="color: #337ab7;">No booking information available.</div>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <?php if(isset($book['adults']) && $book['adults'] > 0): ?>
                                <tr>
                                    <th class="bg-light">Passengers</th>
                                    <td><?php echo e($book['adults'] ?? 0); ?> Adults, <?php echo e($book['children'] ?? 0); ?> Children,
                                        <?php echo e($book['infants'] ?? 0); ?> Infants</td>
                                </tr>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if($booking->combo_return): ?>
                            <tr>
                                <th class="bg-light">Combo Return</th>
                                <td><?php echo e($booking->combo_return); ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if($booking->adults_details): ?>
                            <tr>
                                <th class="bg-light">Adults Details</th>
                                <td>
                                    <?php
                                        $adultsDetails = json_decode($booking->adults_details, true);
                                    ?>
                                    <?php if($adultsDetails): ?>
                                        <ul>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped m-0">
                                                    <tbody>
                                                        <?php if(is_array($adultsDetails)): ?>
                                                            <?php $__currentLoopData = $adultsDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Name:</strong> <?php echo e($adult['fname'] ?? ''); ?>

                                                                        <?php echo e($adult['lname'] ?? ''); ?>

                                                                    </td>
                                                                    <td>
                                                                        <strong>Gender:</strong>
                                                                        <?php echo e($adult['gender'] ?? ''); ?>

                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php else: ?>
                                                            <tr>
                                                                <td colspan="2">No details available.</td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        <?php else: ?>
                                            No details available.
                                    <?php endif; ?>

                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if($booking->children_details): ?>
                            <tr>
                                <th class="bg-light">children Details</th>
                                <td>
                                    <?php
                                        $adultsDetails = json_decode($booking->children_details, true);
                                    ?>
                                    <?php if($adultsDetails): ?>
                                        <ul>
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <?php if(is_array($adultsDetails)): ?>
                                                        <?php $__currentLoopData = $adultsDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td>
                                                                    <strong>Name:</strong> <?php echo e($adult['fname'] ?? ''); ?>

                                                                    <?php echo e($adult['lname'] ?? ''); ?>

                                                                </td>
                                                                <td>
                                                                    <strong>Gender:</strong> <?php echo e($adult['gender'] ?? ''); ?>

                                                                </td>
                                                                <td>
                                                                    <strong>Dob:</strong>
                                                                    <?php echo e(\Carbon\Carbon::parse($adult['dob'] ?? '')->format('d-m-Y')); ?>

                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="3">No details available.</td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>

                                        </ul>
                                    <?php else: ?>
                                        No details available.
                                    <?php endif; ?>

                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if($booking->infants_details): ?>
                            <tr>
                                <th class="bg-light">Infants Details</th>
                                <td>
                                    <?php
                                        $adultsDetails = json_decode($booking->infants_details, true);
                                    ?>
                                    <?php if($adultsDetails): ?>
                                        <ul>
                                            <table class="table table-bordered table-striped">
                                                <tbody>
                                                    <?php if(is_array($adultsDetails)): ?>
                                                        <?php $__currentLoopData = $adultsDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td>
                                                                    <strong>Name:</strong> <?php echo e($adult['fname'] ?? ''); ?>

                                                                    <?php echo e($adult['lname'] ?? ''); ?>

                                                                </td>
                                                                <td>
                                                                    <strong>Gender:</strong> <?php echo e($adult['gender'] ?? ''); ?>

                                                                </td>
                                                                <td>
                                                                    <strong>Dob:</strong>
                                                                    <?php echo e(\Carbon\Carbon::parse($adult['dob'] ?? '')->format('d-m-Y')); ?>

                                                                </td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php else: ?>
                                                        <tr>
                                                            <td colspan="3">No details available.</td>
                                                        </tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </ul>
                                    <?php else: ?>
                                        No details available.
                                    <?php endif; ?>

                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if($booking->customer_notes): ?>
                            <tr>
                                <th class="bg-light">Customer Notes</th>
                                <td><?php echo e($booking->customer_notes); ?></td>
                            </tr>
                        <?php endif; ?>
                        <?php if($booking->term_conditions): ?>
                            <tr>
                                <th class="bg-light">Terms and Conditions</th>
                                <td>
                                    <?php if($booking->term_conditions): ?>
                                        true
                                    <?php else: ?>
                                        false
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endif; ?>

                    </tbody>

                </table>

                <div class="mt-3">
                    <a href="<?php echo e(route('flight.admin.booking.index')); ?>" class="btn btn-primary">Back to All Bookings</a>

                </div>

            </div>

        </div>

    </div>
<?php $__env->stopSection(); ?>
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
                    <?php if($booking->flight_details): ?>
                    <div class="col-md-12 col-12">
                        <div class="card-header text-center ">
                            <b class="font_manish " style="color: #ff7d01">Departure
                                Flight</b>
                        </div>
                    </div>
                        <?php $__currentLoopData = json_decode($booking->flight_details, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flightad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($flightad['da']['code'] == $booking->to): ?>
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
                                                                <?php echo e($flightad['fD']['aI']['name']); ?>

                                                            </h4>
                                                            <p class="text-muted">
                                                                <?php if(isset($flightad['fD']['aI']) && isset($flightad['fD']['aI']['name'])): ?>
                                                                    <strong>Flight Number:</strong>
                                                                    <?php echo e($flightad['fD']['aI']['code']); ?>-<?php echo e($flightad['fD']['fN']); ?>

                                                                <?php else: ?>
                                                                    Not available
                                                                <?php endif; ?>
                                                                |<strong>Aircraft Type:</strong>
                                                                <?php echo e($flightad['fD']['eT']); ?>

                                                            </p>
                                                        </div>
                                                        <div>
                                                            <h5 class="text-success">
                                                                <?php echo e(floor($flightad['duration'] / 60)); ?> hours
                                                                <?php echo e($flightad['duration'] % 60); ?> min
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
                                                                    <?php echo e($flightad['da']['name']); ?>

                                                                    (<?php echo e($flightad['da']['code']); ?>)
                                                                </li>
                                                                <li><strong>City:</strong>
                                                                    <?php echo e($flightad['da']['city']); ?></li>
                                                                <?php if(isset($flightad['da']['terminal'])): ?>
                                                                    <li><strong>Terminal:</strong>
                                                                        <?php echo e($flightad['da']['terminal']); ?></li>
                                                                <?php endif; ?>
                                                                <li><strong>Time:</strong>
                                                                    <?php echo e(\Carbon\Carbon::parse($flightad['dt'])->format('d M Y, h:i A')); ?>

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
                                                                <?php echo e(floor($flightad['duration'] / 60)); ?> hours
                                                                <?php echo e($flightad['duration'] % 60); ?> min
                                                            </p>
                                                        </div>
                                                        <!-- Arrival Info -->
                                                        <div class="col-sm-5">
                                                            <h5 class="text-success">Arrival</h5>
                                                            <ul class="list-unstyled">
                                                                <li><strong>Airport:</strong>
                                                                    <?php echo e($flightad['aa']['name']); ?>

                                                                    (<?php echo e($flightad['aa']['code']); ?>)</li>
                                                                <li><strong>City:</strong>
                                                                    <?php echo e($flightad['aa']['city']); ?></li>
                                                                <?php if(isset($flightad['aa']['terminal'])): ?>
                                                                    <li><strong>Terminal:</strong>
                                                                        <?php echo e($flightad['aa']['terminal']); ?></li>
                                                                <?php endif; ?>
                                                                <li><strong>Time:</strong>
                                                                    <?php echo e(\Carbon\Carbon::parse($flightad['at'])->format('d M Y, h:i A')); ?>

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
                            <?php else: ?>
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
                                                                <?php echo e($flightad['fD']['aI']['name']); ?>

                                                            </h4>
                                                            <p class="text-muted">
                                                                <?php if(isset($flightad['fD']['aI']) && isset($flightad['fD']['aI']['name'])): ?>
                                                                    <strong>Flight Number:</strong>
                                                                    <?php echo e($flightad['fD']['aI']['code']); ?>-<?php echo e($flightad['fD']['fN']); ?>

                                                                <?php else: ?>
                                                                    Not available
                                                                <?php endif; ?>
                                                                |<strong>Aircraft Type:</strong>
                                                                <?php echo e($flightad['fD']['eT']); ?>

                                                            </p>
                                                        </div>
                                                        <div>
                                                            <h5 class="text-success">
                                                                <?php echo e(floor($flightad['duration'] / 60)); ?> hours
                                                                <?php echo e($flightad['duration'] % 60); ?> min
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
                                                                    <?php echo e($flightad['da']['name']); ?>

                                                                    (<?php echo e($flightad['da']['code']); ?>)
                                                                </li>
                                                                <li><strong>City:</strong>
                                                                    <?php echo e($flightad['da']['city']); ?></li>
                                                                <?php if(isset($flightad['da']['terminal'])): ?>
                                                                    <li><strong>Terminal:</strong>
                                                                        <?php echo e($flightad['da']['terminal']); ?></li>
                                                                <?php endif; ?>
                                                                <li><strong>Time:</strong>
                                                                    <?php echo e(\Carbon\Carbon::parse($flightad['dt'])->format('d M Y, h:i A')); ?>

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
                                                                <?php echo e(floor($flightad['duration'] / 60)); ?> hours
                                                                <?php echo e($flightad['duration'] % 60); ?> min
                                                            </p>
                                                        </div>
                                                        <!-- Arrival Info -->
                                                        <div class="col-sm-5">
                                                            <h5 class="text-success">Arrival</h5>
                                                            <ul class="list-unstyled">
                                                                <li><strong>Airport:</strong>
                                                                    <?php echo e($flightad['aa']['name']); ?>

                                                                    (<?php echo e($flightad['aa']['code']); ?>)</li>
                                                                <li><strong>City:</strong>
                                                                    <?php echo e($flightad['aa']['city']); ?></li>
                                                                <?php if(isset($flightad['aa']['terminal'])): ?>
                                                                    <li><strong>Terminal:</strong>
                                                                        <?php echo e($flightad['aa']['terminal']); ?></li>
                                                                <?php endif; ?>
                                                                <li><strong>Time:</strong>
                                                                    <?php echo e(\Carbon\Carbon::parse($flightad['at'])->format('d M Y, h:i A')); ?>

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
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/booking/show.blade.php ENDPATH**/ ?>