<?php $__env->startSection('tag'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<h2>Add New Return Flight</h2>
    <div class="container-fluid">
        <div class="table-responsive">
            <div style="margin-bottom: 20px;">
                <!-- Add Country Button -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addReturnFlightModal">
                   New Return Flight
                </button>
				
				<a href="<?php echo e(route('flight.admin.top-returns-deals.index')); ?>" class="btn btn-success">
                   Back
                </a>
				
				
				
            </div> 

            <table class="table table-bordered table-striped" id="topreturnflighttable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>City</th>
                        <th>Original Price(CAD)</th>
                        <th>Discounted Price(CAD)</th>
                        <th>Country Name</th>
                        <th>Display</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!isset($returnFlights) && $returnFlights->isEmpty()): ?>
						<tr>
							<td colspan="7" class="text-center">No return flights available.</td>
						</tr>
					<?php else: ?>
						<?php $__currentLoopData = $returnFlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $returnFlight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($returnFlight->id); ?></td>
								<td><?php echo e($returnFlight->city); ?></td>
								<td><?php echo e($returnFlight->price); ?></td>
                                <td><?php echo e($returnFlight->discount_price); ?></td>
								<td><?php echo e(getcontrys($returnFlight->country_id)->country_name); ?></td>
                                <td style="color: <?php echo e($returnFlight->display === 'display_yes' ? 'green' : 'red'); ?>">
                                    <?php echo e($returnFlight->display === 'display_yes' ? 'Visible' : 'Not Visible'); ?>

                                </td>
                                
								<td><?php echo e($returnFlight->created_at); ?></td>
								<td><?php echo e($returnFlight->updated_at); ?></td>								
								<td>
									<a href="<?php echo e(route('flight.admin.top-returns-deals.viewedit', $returnFlight->id)); ?>" class="btn btn-warning">
										<i class="fa fa-edit"></i> Edit
									</a>
									<form action="<?php echo e(route('flight.admin.top-returns-deals.viewdestroy', $returnFlight->id)); ?>" method="POST" style="display:inline;">
										<?php echo csrf_field(); ?>
										<?php echo method_field('DELETE'); ?>
										<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
											<i class="fa fa-trash"></i> Delete
										</button>
									</form>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
                </tbody>
            </table>

            
        </div>
    </div>

    <!-- Add Country Modal -->
    <div class="modal fade" id="addReturnFlightModal" tabindex="-1" role="dialog" aria-labelledby="addCountryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCountryModalLabel">New Return Flight</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

    
		<form action="<?php echo e(route('flight.admin.top-returns-deals.viewstore')); ?>" method="POST">
				<?php echo csrf_field(); ?>
				<div class="form-group">
					<label for="city">City</label>
					<input type="text" class="form-control" id="city" name="city" required>
				</div>
				<div class="form-group">
					<label for="price"> Original Price(CAD)</label>
					<input type="number" class="form-control" id="price" name="price" required>
				</div>
                <div class="form-group">
					<label for="price">Discounted Price(CAD)</label>
					<input type="number" class="form-control" id="discount_price" name="discount_price" required>
				</div>
				<input type="hidden" class="form-control" id="country_id" name="country_id" value="<?php echo e($country_id); ?>" required>
				
                <div class="form-group">
                    <label for="price">Visible on home page</label><br>
                    <input type="radio" id="display_yes" name="display" value="display_yes"/>    
                    <label>YES</label> 
                    <input type="radio" id="display_no" name="display" value="display_no"/>    
                        <label>NO</label>  
				</div>
				<button type="submit" class="btn btn-primary">Add Return Flight</button>
			</form>

				
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('js'); ?>
	<script src="<?php echo e(asset('dist/admin/js/jquery.min.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('dist/admin/css/jquery.dataTables.css')); ?>">
    <script type="text/javascript" charset="utf8" src="<?php echo e(asset('dist/admin/js/jquery.dataTables.js')); ?>"></script> 
    <script>
     $(document).ready(function() {
            $('#topreturnflighttable').DataTable();
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/returnFlight/index.blade.php ENDPATH**/ ?>