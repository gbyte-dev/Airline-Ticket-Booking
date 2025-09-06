<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="table-responsive">
            <div style="margin-bottom: 20px;">
                <!-- Add Country Button -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCountryModal">
                    Add Country
                </button>
                <h3 class="pt-2">Top return flights</h3>
            </div>

            <table class="table table-bordered table-striped" id="topreturndealtable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Country Name</th>
                        <th>From Price(CAD)</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $topReturnDeals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topReturnDeal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($topReturnDeal->id); ?></td>
                            <td><?php echo e($topReturnDeal->country_name); ?></td>
                            <td><?php echo e($topReturnDeal->from_price); ?></td>
							<td>
								<?php if($topReturnDeal->country_image): ?>
									<a href="<?php echo e(asset('uploads/country_images/' . $topReturnDeal->country_image)); ?>" target="_blank">
										<img src="<?php echo e(asset('uploads/country_images/' . $topReturnDeal->country_image)); ?>" alt="<?php echo e($topReturnDeal->country_name); ?>" class="img-fluid" style="max-width: 200px; height: auto;">
									</a>
								<?php else: ?>
									No image
								<?php endif; ?>
							</td>
                            <td><?php echo e(\Carbon\Carbon::parse($topReturnDeal->created_at)->format('d/m/Y')); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($topReturnDeal->updated_at)->format('d/m/Y')); ?></td>
                            <td>
                                <a href="<?php echo e(route('flight.admin.top-returns-deals.show', $topReturnDeal->id)); ?>"
                                    class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>  
								<a href="<?php echo e(route('flight.admin.top-returns-deals.viewpage', $topReturnDeal->id)); ?>"
                                    class="btn btn-info btn-sm"><i class="fa fa-info"></i></a> 
									
								<form action="<?php echo e(route('flight.admin.top-returns-deals.destroy', $topReturnDeal->id)); ?>" method="POST" style="display:inline;">
										<?php echo csrf_field(); ?>
										<?php echo method_field('DELETE'); ?>
										<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
											<i class="fa fa-trash"></i> Delete
										</button>
								</form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
     <div style="float:right;">
                <?php
                    $currentPage = $topReturnDeals->currentPage();
                    $lastPage = $topReturnDeals->lastPage();
                    $blockSize = 5;
                    $startPage = floor(($currentPage - 1) / $blockSize) * $blockSize + 1;
                    $endPage = min($startPage + $blockSize - 1, $lastPage);
                ?>
                <div class="card mb-1">
                    <div class="d-flex justify-content-between align-items-center">
                        <?php if($startPage > 1): ?>
                            <a href="<?php echo e($topReturnDeals->url($startPage - $blockSize)); ?>" class="btn btn-primary">Prev</a>
                        <?php else: ?>
                            <span class="btn btn-secondary disabled">Prev</span>
                        <?php endif; ?>
                        <div class="page-links">
                            <?php for($page = $startPage; $page <= $endPage; $page++): ?>
                                <a href="<?php echo e($topReturnDeals->url($page)); ?>"
                                    class="btn btn-outline-warning <?php echo e($page == $currentPage ? 'active' : ''); ?>">
                                    <?php echo e($page); ?>

                                </a>
                            <?php endfor; ?>
                        </div>
                        <?php if($endPage < $lastPage): ?>
                            <a href="<?php echo e($quote->url($endPage + 1)); ?>" class="btn btn-primary">Next</a>
                        <?php else: ?>
                            <span class="btn btn-secondary disabled">Next</span>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- End Pagination Card Container -->


            </div>
        </div>
    </div>

    <!-- Add Country Modal -->
    <div class="modal fade" id="addCountryModal" tabindex="-1" role="dialog" aria-labelledby="addCountryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCountryModalLabel">Add New Country</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addCountryForm"  method="POST" action="<?php echo e(route('flight.admin.top-returns-deals.store')); ?>" enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="country_name">Country Name</label>
							<input type="hidden" name="url" id="url" value="<?php echo e(route('flight.admin.top-returns-deals.store')); ?>">
                            <input type="text" class="form-control" id="country_name" name="country_name" required>
                        </div>
                        <div class="form-group">
                            <label for="from_price">From Price(CAD)</label>
							<input type="hidden" name="url" id="url" value="<?php echo e(route('flight.admin.top-returns-deals.store')); ?>">
                            <input type="number" class="form-control" id="from_price" name="from_price" required>
                        </div>
						 <div class="form-group">
							<label for="country_image">Country Image</label>
							<input type="file" class="form-control" id="country_image" name="country_image" required>
						</div>
                        <button type="submit" class="btn btn-primary">Add Country</button>
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
//    <script>
//     $(document).ready(function() {
//            $('#topreturndealtable').DataTable();
//        });
//    </script>
<?php $__env->stopPush(); ?>



<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/topReturnDeals/index.blade.php ENDPATH**/ ?>