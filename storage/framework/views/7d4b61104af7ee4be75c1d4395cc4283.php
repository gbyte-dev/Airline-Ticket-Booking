<?php $__env->startPush('css'); ?>

    <link href="<?php echo e(asset('module/booking/css/checkout.css?_ver='.config('app.asset_version'))); ?>" rel="stylesheet">

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

    <div class="bravo-booking-page padding-content" >

        <div class="container">

            <?php echo $__env->make('Booking::frontend/global/booking-detail-notice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row booking-success-detail">

                <div class="col-md-8">

                    

                    <div class="text-center">

                        

                    </div>

                </div>

                <div class="col-md-4">

                    

                </div>

            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if(session('success')): ?>
<script>

    Swal.fire({
        title: "Thankyou!",
        text:"<?php echo e(session('success')); ?>",
        icon: "success"
      });
    </script>
<?php endif; ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Booking/Views/frontend/detail.blade.php ENDPATH**/ ?>