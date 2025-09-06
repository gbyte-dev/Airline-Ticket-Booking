<?php $__env->startSection('content'); ?>
<h3>Subscribers home</h3>
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Phone</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($users->created_at)->setTimezone('Asia/Kolkata')->format('d/m/Y h:i A')); ?></td>
                            <td><?php echo e($users->email); ?></td>
                            <td><?php echo e($users->phone); ?></td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div style="float:right;"><?php echo e($data->links()); ?></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/subscribe/subscribe.blade.php ENDPATH**/ ?>