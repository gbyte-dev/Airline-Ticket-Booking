<?php $__env->startSection('content'); ?>
<h2>Edit New Return Flight</h2>
<div class="container-fluid">
	<div class="table-responsive">
	<div style="margin-bottom: 20px;">
	
	</div>
		<form action="<?php echo e(route('flight.admin.top-returns-deals.viewupdate', $returnflightview->id)); ?>" method="POST">
			<?php echo csrf_field(); ?>
			<?php echo method_field('PUT'); ?> 
			<div class="form-group">
				<label for="city">City</label>
				<input type="text" class="form-control" id="city" name="city" value="<?php echo e($returnflightview->city); ?>" required>
			</div>
			<div class="form-group">
				<label for="price">Original Price(CAD)</label>
				<input type="number" class="form-control" id="price" name="price" value="<?php echo e($returnflightview->price); ?>" required>
			</div>
			<div class="form-group">
				<label for="price">Discounted Price(CAD)</label>
				<input type="number" class="form-control" id="price" name="discount_price" value="<?php echo e($returnflightview->discount_price); ?>" required>
			</div>
			<div class="form-group">
				<label for="price">Visible on home page</label><br>
				<input type="radio" id="display_yes" name="display" style="color:green"  value="display_yes" <?php echo e($returnflightview->display === 'display_yes' ? 'checked' : ''); ?>/>    
				<label>YES</label> 
				<input type="radio" id="display_no" name="display" style="color: red"   value="display_no"  <?php echo e($returnflightview->display === 'display_no' ? 'checked' : ''); ?>/>    
					<label>NO</label>  
			</div>
				<button type="submit" class="btn btn-primary">Update Return Flight</button>
		</form>
		
	</div>
	<div class=""><button type="button" class="btn btn-danger color-white" style="margin: -35px 166px; position: absolute;color:white;">
		<a style="color:white !important;text-decoration: none !important;" href="<?php echo e(route('flight.admin.top-returns-deals.viewpage', $returnflightview->country_id)); ?>">Back Return Flight</a>
	</button></div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
//Any script of this page you can write here
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/returnFlight/edit.blade.php ENDPATH**/ ?>