<!DOCTYPE html>
<html>
<head>
    <title>Quote Request</title>
</head>
<body>
    <h1>New Quote Request</h1>
    <p><strong>Booking Type:</strong> <?php echo e($data['booking_type']); ?></p>
    <p><strong>From:</strong> <?php echo e($data['from']); ?></p>
    <p><strong>To:</strong> <?php echo e($data['to']); ?></p>
    <p><strong>Depart Date:</strong> <?php echo e($data['start_date']); ?></p>
    <?php if(isset($data['enddate'])): ?>
        <p><strong>Return Date:</strong> <?php echo e($data['enddate']); ?></p>
    <?php endif; ?>
    <p><strong>Source Page:</strong> <?php echo e($data['source_page']); ?></p>
    <p><strong>Phone:</strong> <?php echo e($data['phone']); ?></p>
    <p><strong>Email:</strong> <?php echo e($data['email']); ?></p>
    <p><strong>Name:</strong> <?php echo e($data['name']); ?></p>
    <p><strong>Class:</strong> <?php echo e($data['travel_class']); ?></p>
    <p><strong>Passenger:</strong> <?php echo e($data['passengers']); ?></p>
</body>
</html>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/News/Views/frontend/cheap-flights/success.blade.php ENDPATH**/ ?>