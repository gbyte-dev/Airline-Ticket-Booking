<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Subscribing!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 28px;
            color: #4CAF50;
            margin-bottom: 15px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .details {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .details strong {
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .footer {
            font-size: 12px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Subscribing!</h1>
        <p>Your subscription has been confirmed successfully. We’ll keep you updated with the latest news, booking enquiries, and exclusive offers.</p>

        <div class="details">
            <?php if(isset($data['phone'])): ?>
                <p><strong>Phone:</strong> <?php echo e($data['phone']); ?></p>
            <?php endif; ?>
            <p><strong>Email:</strong> <?php echo e($data['email']); ?></p>
        </div>

        <p>If you need any assistance or have any questions, please don't hesitate to reach out to us.</p>

        <a href="flight.tripgare.com" class="btn">Return to Home</a>

        <div class="footer">
            <p>Best regards,<br>The Team</p>
            
        </div>
    </div>
</body>
</html>
<?php /**PATH /home4/tripgwdd/flight.tripgare.com/themes/BC/Booking/Views/frontend/Mail/subscriptionMail.blade.php ENDPATH**/ ?>