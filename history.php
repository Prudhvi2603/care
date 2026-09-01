<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking History</title>
    <link rel="stylesheet" href="appointment_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .sidebar {
            height: 72vh; 
            width: 250px; 
            background-color: #28a745; 
            color: white;
            padding-top: 20px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.2);
            transition: width 0.3s ease, transform 0.3s ease;
            flex-shrink: 0; 
            position: relative; 
            box-sizing: border-box; 
            margin-left: 20px;
            margin-right: 20px; 
            border-radius: 30px;
            margin-top: 25px;
        }

        .menu-icon {
            background: white;
            border-radius: 21px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 26px !important;
            color: #6d6ae8;
            font-size: 12px !important;
            position: absolute;
            right: -18px;
            top: 60px;
            border: 5px solid #f8fafb;
            box-shadow: 0px 2px 15px 2px #959595;
            transform: rotateZ(-180deg);
            transition: 1s ease-in-out;
            cursor: pointer;
        }

        .sidenav {
            margin: 20px;
            padding: 0;
        }
        
        .sidenav li {
            list-style: none;
            padding: 12px 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            font-size: 14px;
            transition: background-color 0.3s;
            white-space: nowrap;
            overflow: hidden;
        }
        
        .sidenav li:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .sidenav li i {
            padding-right: 7px;
            color: white;
        }
        
        .sidenav li a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            display: block;
        }
        
        .active {
            background-color: rgba(255, 255, 255, 0.2);
            position: relative;
        }
        
        .sidenav li span {
            float: right;
        }
        
        .active::after {
            content: '';
            position: absolute;
            width: 0.25rem;
            height: 2.5rem;
            background: white;
            left: -24px;
            top: 2px;
            border-radius: 0px 5px 5px 0px;
        }
        
        .active1 {
            width: 80px;
            transition: 1s ease-in-out; 
        }
        
        .lislide {
            padding: 8px 11px !important;
            font-size: 20px !important;
        }
        
        .lm {
            text-align: center;
            font-size: 30px;
            transition: .5s;
        }
        
        .anchor {
            display: none;
        }
        
        .headspan {
            display: none;
        }
        
        /* New styles for minimized state */
        .sidebar.active1 .sidenav li a span {
            display: none;
        }
        
        .sidebar.active1 .sidenav li a {
            display: flex;
            justify-content: center;
        }
        
        .sidebar.active1 .sidenav li i {
            padding-right: 0;
            font-size: 20px;
        }
        
        .appointment-form-container {
            flex: 1;
            max-width: 1000px;
            margin: 25px 20px 25px 0;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            transition: margin-left 0.3s ease;
        }
        
        .sidebar.active1 ~ .appointment-form-container {
            margin-left: 40px;
        }
        
        /* Booking history specific styles */
        .email-form {
            margin-bottom: 30px;
        }
        
        .email-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
        }
        
        .email-form input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 15px;
        }
        
        .submit-button {
            padding: 12px 20px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        
        .booking-history table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .booking-history th, 
        .booking-history td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .booking-history th {
            background-color: #f2f2f2;
        }
        
        .status-pending {
            color: #ff9800;
            font-weight: 500;
        }
        
        .status-confirmed {
            color: #4caf50;
            font-weight: 500;
        }
        
        .status-cancelled {
            color: #f44336;
            font-weight: 500;
        }
        
        .no-bookings {
            text-align: center;
            padding: 40px;
            color: #666;
        }
        
        .no-bookings i {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="menu-icon">
            <i class="fas fa-chevron-left"></i>
        </div>
        <ul class="sidenav">
            <li><a href="appointment.php"><i class="fas fa-calendar-check"></i> <span>Appointment</span></a></li>
            <li class="active"><a href="history.php"><i class="fas fa-history"></i> <span>Booking History</span></a></li>
            <li><a href="pharmacy.php"><i class="fas fa-prescription-bottle-alt"></i> <span>Pharmacy</span></a></li>
            <li><a href="insurance.php"><i class="fas fa-shield-alt"></i> <span>Insurance</span></a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i> <span>About Us</span></a></li>
            <li><a href="contact_us.php"><i class="fas fa-envelope"></i> <span>Contact</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>
    </div>

    <div class="appointment-form-container">
        <h1>Booking History</h1>
        
        <div class="email-form">
            <form method="post" action="history.php">
                <div class="form-row single-row">
                    <div class="form-group full-width">
                        <label for="email"><i class="fas fa-envelope"></i> Enter your email to view bookings</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required value="<?php echo htmlspecialchars($email); ?>">
                    </div>
                </div>
                <button type="submit" class="submit-button">View Bookings</button>
            </form>
        </div>
        
        <?php if (!empty($email)): ?>
            <div class="booking-history">
                <?php if (!empty($appointments)): ?>
                    <h2>Your Appointments</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Booked On</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($appointments as $appointment): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($appointment['department_service']); ?></td>
                                    <td><?php echo date('d/m/Y', strtotime($appointment['preferred_date'])); ?></td>
                                    <td><?php echo date('h:i A', strtotime($appointment['preferred_time'])); ?></td>
                                    <td>
                                        <span class="status-<?php echo strtolower($appointment['status']); ?>">
                                            <?php echo htmlspecialchars($appointment['status']); ?>
                                        </span>
                                    </td>
                                    <td><?php echo date('d/m/Y h:i A', strtotime($appointment['booking_time'])); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <div class="no-bookings">
                        <i class="fas fa-calendar-times fa-3x" style="color: #ccc; margin-bottom: 15px;"></i>
                        <h3>No bookings found for <?php echo htmlspecialchars($email); ?></h3>
                        <p>If you've recently made a booking, please check your email for confirmation.</p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".menu-icon").click(function(e) {
                e.preventDefault();
                $(this).find('i').toggleClass("fa-chevron-left fa-chevron-right");
                $(".sidebar").toggleClass("active1");
            });

            $(".sidenav li").click(function() {
                $(".sidenav li").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>
</body>
</html>