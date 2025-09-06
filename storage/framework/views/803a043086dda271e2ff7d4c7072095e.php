
<?php $__env->startSection('content'); ?>

<div class="row">
		<div class="col-md-12  col-lg-6 ">
			<?php echo $__env->make('Flight::frontend.blocks.referform.referformtext', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	   </div>
	 	<div class="col-md-12  col-lg-6 ">
		   <?php echo $__env->make('Flight::frontend.blocks.referform.referform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Flight/Views/frontend/referandearn.blade.php ENDPATH**/ ?>