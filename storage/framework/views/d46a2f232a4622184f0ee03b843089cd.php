<?php $__env->startSection('title', 'News'); ?>
<?php $__env->startSection('content'); ?>
    <h3>Bookings </h3>
    <div class="panel">
        <div class="table-responsive">
            <table class="table ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Booking ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>Type</th>
                        
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td style="color: #08f;"><?php echo e(\Carbon\Carbon::parse($booking->created_at)->format('d/m/Y')); ?></td>
                            <td><?php echo e($booking->booking_id); ?></td>
                            <td><?php echo e($booking->first_name); ?> <?php echo e($booking->last_name); ?></td>
                            <td><?php echo e($booking->phone); ?></td>
                            <td><?php echo e($booking->country); ?></td>
                            <td>
                                <?php if($booking->departure && $booking->return): ?>
                                    Round Trip
                                <?php elseif($booking->returnDate && $booking->date): ?>
                                    Round Trip
                                <?php else: ?>
                                    One Way
                                <?php endif; ?>
                            </td>
                            
                            <td>
                                
                                <a href="<?php echo e(route('flight.admin.booking.show', $booking->booking_id)); ?>"
                                    class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            
            <div style="float:right;">
                <?php
                    $currentPage = $bookings->currentPage();
                    $lastPage = $bookings->lastPage();
                    $blockSize = 5;
                    $startPage = floor(($currentPage - 1) / $blockSize) * $blockSize + 1;
                    $endPage = min($startPage + $blockSize - 1, $lastPage);
                ?>
                <div class="card mb-1">
                    <div class="d-flex justify-content-between align-items-center">
                        <?php if($startPage > 1): ?>
                            <a href="<?php echo e($bookings->url($startPage - $blockSize)); ?>" class="btn btn-primary">Prev</a>
                        <?php else: ?>
                            <span class="btn btn-secondary disabled">Prev</span>
                        <?php endif; ?>
                        <div class="page-links">
                            <?php for($page = $startPage; $page <= $endPage; $page++): ?>
                                <a href="<?php echo e($bookings->url($page)); ?>"
                                    class="btn btn-outline-warning <?php echo e($page == $currentPage ? 'active' : ''); ?>">
                                    <?php echo e($page); ?>

                                </a>
                            <?php endfor; ?>
                        </div>
                        <?php if($endPage < $lastPage): ?>
                            <a href="<?php echo e($bookings->url($endPage + 1)); ?>" class="btn btn-primary">Next</a>
                        <?php else: ?>
                            <span class="btn btn-secondary disabled">Next</span>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- End Pagination Card Container -->


            </div>
               
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script>
    function updateStatus(status) {
        const bookingId = <?php echo e($booking->id); ?>;
        alert(bookingId);
        // Pass the booking ID to the function

        // Make an AJAX call to update the status in the database
        fetch(`<?php echo e(route('flight.admin.booking.update.status', $booking->id)); ?>`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Include CSRF token for security
                },
                body: JSON.stringify({
                    status: status
                })
            })
            .then(response => response.json())
            .then(data => {
                // Show alert message based on response
                alert(data.message);
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error updating the status.');
            });
    }
</script>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home4/tripgwdd/flight.tripgare.com/modules/Flight/Views/admin/booking/index.blade.php ENDPATH**/ ?>