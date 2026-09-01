<?php
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booked Successfully</title>
    <link rel="stylesheet" href="appointment_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <section class="sidenav-container">
        <div class="sidebar">
            <ul class="sidenav">
                <li><a href="#">Appointment</a></li>
                <li><a href="history.php">Booking History</a></li>
                <li><a href="#">Pharmacy</a></li>
                <li><a href="#">Insurance</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </section>

    <div class="appointment-form-container">
        <div class="success-message">
            <i class="fas fa-check-circle success-icon"></i>
            <h1>Appointment Booked Successfully!</h1>
            <p>Thank you for booking your appointment with us. We've sent a confirmation to your email address.</p>
            <p>You can view your booking details by visiting the <a href="history.php?email=<?php echo urlencode($email); ?>">Booking History</a> page.</p>
            <a href="index.html" class="back-button">Back to Home</a>
        </div>
    </div>
</body>
</html>