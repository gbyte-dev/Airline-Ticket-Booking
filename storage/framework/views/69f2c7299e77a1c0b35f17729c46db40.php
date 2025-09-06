<?php $__env->startPush('css'); ?>
<style>
#image{
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

#image:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
<?php $__env->stopPush(); ?>



<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="table-responsive">
            <div style="margin-bottom: 20px;">
                <!-- Add Country Button -->
                <button type="button" class="btn btn-success" onclick="window.location='<?php echo e(route('flight.admin.top-returns-deals.index')); ?>'">
					Go to Top Return Deals
				</button>
            </div>
					<center><h1>Edit Page</h1></center>
					
<!---		<form id="addCountryForm"  method="POST" action="<?php echo e(route('flight.admin.top-returns-deals.update', $topReturnDeals->id)); ?>" enctype="multipart/form-data">     -->


<form id="addCountryForm" method="POST" action="<?php echo e(route('flight.admin.top-returns-deals.update', $topReturnDeals->id)); ?>" enctype="multipart/form-data" style="margin: 20px;"> 
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="country_name" class="form-label">Country Name</label>
                <input type="text" class="form-control" id="country_name" name="country_name" value="<?php echo e($topReturnDeals->country_name); ?>" required>
            </div>
            <div class="col-md-6">
                <label for="from_price" class="form-label">From Price(CAD)</label>
                <input type="number" class="form-control" id="from_price" name="from_price" value="<?php echo e($topReturnDeals->from_price); ?>" required>
            </div>
            <div class="col-md-6">
                <label for="country_image" class="form-label">Country Image</label>
                <input type="file" class="form-control" id="country_image" name="country_image">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <?php if($topReturnDeals->country_image): ?>
                    <img id="image" src="<?php echo e(asset('uploads/country_images/' . $topReturnDeals->country_image)); ?>" alt="<?php echo e($topReturnDeals->country_name); ?>" class="img-fluid" style="max-width: 200px; height: auto;">
                <?php else: ?>
                    <p>No image available</p>
                <?php endif; ?> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Update Country</button>
            </div>
        </div>
    </div>
</form>

		</div>
	</div>
 
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
     //Any script of this page you can write here
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/topReturnDeals/show.blade.php ENDPATH**/ ?>