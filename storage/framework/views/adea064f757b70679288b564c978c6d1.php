<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
    <h3>Leads Customer </h3>
    <div class="panel">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th>Passenger Name
                          </th>
                        <th>Phone</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Flight Date</th>
                        <th>Flight Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            
                            
                            
                            <td style="color: #08f;"><?php echo e($booking->first_name); ?>

                               <?php echo e($booking->last_name); ?></td>
                            <td><?php echo e($booking->phone); ?></td>
                            <td><?php echo e($booking->from); ?></td>
                            <td><?php echo e($booking->to); ?></td>
                            <td><?php echo e($booking->on_date); ?></td>
                            <td><?php echo e(($booking->flight_type=='return')?'round trip':'one-way'); ?></td>
                            
                            <td>
                                <a href="<?php echo e(route('flight.admin.booking.showleads', $booking->id)); ?>"
                                    class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            
            <div style="float:right;">
                <?php
                    $currentPage = $leads->currentPage();
                    $lastPage = $leads->lastPage();
                    $blockSize = 5;
                    $startPage = floor(($currentPage - 1) / $blockSize) * $blockSize + 1;
                    $endPage = min($startPage + $blockSize - 1, $lastPage);
                ?>
                <div class="card mb-1">
                    <div class="d-flex justify-content-between align-items-center">
                        <?php if($startPage > 1): ?>
                            <a href="<?php echo e($leads->url($startPage - $blockSize)); ?>" class="btn btn-primary">Prev</a>
                        <?php else: ?>
                            <span class="btn btn-secondary disabled">Prev</span>
                        <?php endif; ?>
                        <div class="page-links">
                            <?php for($page = $startPage; $page <= $endPage; $page++): ?>
                                <a href="<?php echo e($leads->url($page)); ?>"
                                    class="btn btn-outline-warning <?php echo e($page == $currentPage ? 'active' : ''); ?>">
                                    <?php echo e($page); ?>

                                </a>
                            <?php endfor; ?>
                        </div>
                        <?php if($endPage < $lastPage): ?>
                            <a href="<?php echo e($leads->url($endPage + 1)); ?>" class="btn btn-primary">Next</a>
                        <?php else: ?>
                            <span class="btn btn-secondary disabled">Next</span>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- End Pagination Card Container -->


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/booking/leads.blade.php ENDPATH**/ ?>