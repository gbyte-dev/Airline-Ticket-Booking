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
<?php if(session('success')): ?>
<script>
    Swal.fire({
        title: "Thank you!",
        text: "<?php echo e(session('success')); ?>",
        icon: "success",
        confirmButtonText: "OK",
        customClass: {
            confirmButton: 'custom-confirm-button'  // Add this class to customize the button
        }
    });
</script>

<?php endif; ?>

<div class="bravo-booking-page padding-content">
    <div class="container">
        
                
                    
                        
                    
                
            
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
                                        <div class="val"><?php echo e($booking->first_name); ?></div>
                                    </li>
                                    <li class="info-last-name">
                                        <div class="label">Last name</div>
                                        <div class="val"><?php echo e($booking->last_name); ?></div>
                                    </li>
                                    <li class="info-email">
                                        <div class="label">Email</div>
                                        <div class="val"><?php echo e($booking->email); ?></div>
                                    </li>
                                    <li class="info-phone">
                                        <div class="label">Phone</div>
                                        <div class="val"><?php echo e($booking->phone); ?></div>
                                    </li>
                                    <li class="info-address">
                                        <div class="label">Address</div>
                                        <div class="val"><?php echo e($booking->address); ?></div>
                                    </li>
                                    
                                    <li class="info-city">
                                        <div class="label">City</div>
                                        <div class="val"><?php echo e($booking->city); ?></div>
                                    </li>
                                    <li class="info-state">
                                        <div class="label">State/Province/Region</div>
                                        <div class="val"><?php echo e($booking->state); ?></div>
                                    </li>
                                    <li class="info-zip-code">
                                        <div class="label">ZIP code/Postal code</div>
                                        <div class="val"><?php echo e($booking->zip_code); ?></div>
                                    </li>
                                    <li class="info-country">
                                        <div class="label">Country</div>
                                        <div class="val"><?php echo e($booking->country); ?></div>
                                    </li>
                                    
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
                    
                <li><span>Booking Trip</span>: <?php if($booking->departure && $booking->return): ?>
                    Round Trip
                <?php elseif($booking->returnDate && $booking->date): ?>
                    Round Trip
                <?php else: ?>
                    One Way
                <?php endif; ?></li>
                 <?php if(empty($booking->returnDate) && empty($booking->date) && !empty($booking->airName)): ?>
                
               
                    <li><span>Booking Date:</span> <?php echo e(\Carbon\Carbon::parse($booking->created_at)->format('d/m/Y')); ?></li>
                    <li><span>Booking Number:</span> <?php echo e($booking->booking_id); ?></li>
                    <li><span>Booking From:</span><?php echo e($booking->departureLocation); ?></li>
                    <li><span>Booking To:</span>  <?php echo e($booking->arrivalLocation); ?> </li>
                    
                    <?php if($booking->totalFare): ?>
                    <li>
                        <span class="bg-light">Total Fare</span>
                        <td>
                            <?php if($booking->currency_type): ?>
                                <?php echo $booking->currency_type; ?>

                            <?php endif; ?> <?php echo e($booking->totalFare); ?>

                        </td>
                    </li>
                  <?php endif; ?>
                  <?php endif; ?>
                
                  <?php if($booking->departure): ?>
                  <?php
                    try {
                        $dataToDebug = Crypt::decrypt($booking->departure);
                    } catch (\Exception $e) {
                        $dataToDebug = $booking->departure; 
                    }
                    // @dd($dataToDebug)
                ?>
                 <li><span>Booking Date:</span> <?php echo e(\Carbon\Carbon::parse($booking->created_at)->format('d/m/Y')); ?></li>
                 <li><span>Booking Number:</span> <?php echo e($booking->booking_id); ?></li>
                 <li><span>Booking From:</span><?php echo e($dataToDebug[1]['departureLocation']); ?></li>
                 <li><span>Booking To:</span>  <?php echo e($dataToDebug[1]['arrivalLocation']); ?> </li>
                 <li>
                    <?php if($booking->totalFare): ?>
                    <span class="bg-light">Total Fare</span>
                    <td>
                        <?php if($booking->currency_type): ?>
                            <?php echo $booking->currency_type; ?>

                        <?php endif; ?> <?php echo e($booking->totalFare); ?>

                    </td>
                </li>
                <?php endif; ?>
                <?php endif; ?>
                  <?php if($booking->returnDate && $booking->date): ?>
                  
              
                  <li><span>Booking Date:</span> <?php echo e(\Carbon\Carbon::parse($booking->created_at)->format('d/m/Y')); ?></li>
                  <li><span>Booking Number:</span> <?php echo e($booking->booking_id); ?></li>
                  <li><span>Booking From:</span><?php echo e($booking->departureLocation); ?></li>
                  <li><span>Booking To:</span>  <?php echo e($booking->to); ?> </li>
                
                 
                <div class="row d-flex">
                    <div class="col-6">
                        <b style="font-size: large;">Airport from: </b>
                        <span style="font-size: medium; color:black;">Departure Date: </span>
                        <?php $__currentLoopData = json_decode($booking->flight_details, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <?php echo e($flight['da']['name'] ?? 'N/A'); ?>(<?php echo e($flight['da']['city'] ?? 'N/A'); ?>)
                            </li>
                            
                          
                            <?php if($index == 1): ?> 
                                <?php if(isset($flights[$index + 1])): ?>
                                    <li>
                                        <b>Return Flight Departure: </b><?php echo e($flights[$index + 1]['da']['name'] ?? 'N/A'); ?>(<?php echo e($flights[$index + 1]['da']['city'] ?? 'N/A'); ?>)
                                    </li>
                                <?php else: ?>
                                    <li>   <span style="font-size: medium;color:black;">Return Flight </span></li>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                
                    <div class="col-6" >
                        <b style="font-size: large;">Airport to: </b>
                        <?php $__currentLoopData = json_decode($booking->flight_details, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li style="padding-top: 16px;">
                                <?php echo e($flight['aa']['name'] ?? 'N/A'); ?>(<?php echo e($flight['aa']['city'] ?? 'N/A'); ?>)
                            </li>
                
                        
                            <?php if($index == 1): ?> 
                                <?php if(isset($flights[$index + 1])): ?>
                                    <li>
                                        <b >Return Flight Arrival: </b><?php echo e($flights[$index + 1]['aa']['name'] ?? 'N/A'); ?>(<?php echo e($flights[$index + 1]['aa']['city'] ?? 'N/A'); ?>)
                                    </li>
                                <?php else: ?>
                                    
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                

                  <li>
                     <?php if($booking->totalFare): ?>
                     <span class="bg-light">Total Fare :</span>
                     <td>
                         <?php if($booking->currency_type): ?>
                             <?php echo $booking->currency_type; ?>

                         <?php endif; ?> <?php echo e($booking->totalFare); ?>

                     </td>
                     <?php endif; ?> 
                 </li>
                 
                  <?php endif; ?>
                    
                    <li><span>Booking Status:</span> <span class="badge badge-primary badge-partial_payment" style="color:white;">Under Process</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/Base/Booking/Views/frontend/global/booking-detail-notice.blade.php ENDPATH**/ ?>