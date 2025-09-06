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



<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-header">
                <h4 class="card-title mb-0">Booking Details</h4>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <a href="<?php echo e(route('flight.admin.booking.showquote')); ?>" class="btn btn-primary">
                        <i class="bi bi-arrow-left"></i> Back to All Leads
                    </a>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <?php if($booking->name): ?>
                            <p><span class="details-label">Name:</span> <?php echo e($booking->name); ?></p>
                        <?php endif; ?>
                        <?php if($booking->email): ?>
                            <p><span class="details-label">Email:</span> <?php echo e($booking->email); ?></p>
                        <?php endif; ?>
                        <?php if($booking->phone): ?>
                            <p><span class="details-label">Phone:</span> <?php echo e($booking->phone); ?></p>

                        <?php endif; ?>
 <p><span class="details-label">Flight From:</span> <?php echo e($booking->from); ?></p>
                    </div>

                    <div class="col-md-6 mb-2">
                       
                        <p><span class="details-label">Flight To:</span> <?php echo e($booking->to); ?></p>
                        <p><span class="details-label">Flight Date:</span> <?php echo e($booking->start_date); ?></p>
                        <p><span class="details-label">Return Date:</span> <?php echo e($booking->enddate ?? 'N/A'); ?></p>
                        <p><span class="details-label">Booking Type:</span> <?php echo e(ucfirst($booking->booking_type)); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/booking/quotedisplay.blade.php ENDPATH**/ ?>