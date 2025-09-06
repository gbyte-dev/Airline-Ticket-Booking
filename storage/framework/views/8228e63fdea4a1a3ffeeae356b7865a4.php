<style>
    .table td,
    .table th {
        padding: 1rem !important;
    }
</style>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <div class="mt-3 " style="padding-bottom: 25px;">
                    <a href="<?php echo e(route('flight.admin.booking.leads')); ?>" class="btn btn-primary">Back to All leads</a>

                </div>
                            <td colspan="2">
                               
                                        <?php if($booking->first_name): ?>
                                            <p class="card-text"><b>Passenger Name: </b> <?php echo e($booking->first_name); ?> <?php if($booking->last_name): ?>
                                                    <?php echo e($booking->last_name); ?>

                                                <?php endif; ?>
                                            </p>
                                        <?php endif; ?>
                                  
                                        <?php if($booking->phone): ?>
                                            <p class="card-text"><b>Phone: </b> <?php echo e($booking->phone); ?></p>
                                        <?php endif; ?>
                                  
                                    
                                        <?php if($booking->address): ?>
                                            <p class="card-text"><b>Address:</b> <?php echo e($booking->address); ?></p>
                                        <?php endif; ?>
                                 
                      
                                        <?php if($booking->city): ?>
                                            <p class="card-text"><b>City:</b> <?php echo e($booking->city); ?></p>
                                        <?php endif; ?>
                                   
                                        <?php if($booking->state): ?>
                                            <p class="card-text"><b>State :</b> <?php echo e($booking->state); ?></p>
                                        <?php endif; ?>
                                        <?php if($booking->country): ?>
                                            <p class="card-text"><b>Country :</b> <?php echo e($booking->country); ?></p>
                                        <?php endif; ?>
                                            <p class="card-text"><b>Flight from :</b> <?php echo e($booking->from); ?></p>
                       
                                            <p class="card-text"><b>Flight To :</b> <?php echo e($booking->to); ?></p>
                                    
                                            <p class="card-text"><b>Flight Date :</b> <?php echo e($booking->on_date); ?></p>
                                            <p class="card-text"><b>Flight Return Date :</b> <?php echo e($booking->return_date); ?></p>
                                            <p class="card-text"><b>Flight Type :</b> <?php echo e(($booking->flight_type=='return')?'round trip':'one-way'); ?></p>
                                    </div>
                         
                            
                            </td>
                        </tr>
                        
                       
               

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/booking/showLeads.blade.php ENDPATH**/ ?>