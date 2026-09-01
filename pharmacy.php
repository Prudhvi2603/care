<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Price Comparison</title>
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
            background: #6d6ae8;
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
        
        .container {
            flex: 1;
            max-width: 1000px;
            margin: 25px 20px 25px 0;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            transition: margin-left 0.3s ease;
        }
        
        .sidebar.active1 ~ .container {
            margin-left: 40px;
        }
        
        h1 {
            color: #2a5885;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .search-box {
            display: flex;
            margin-bottom: 30px;
        }
        
        .search-box input {
            flex: 1;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
        }
        
        .search-box button {
            padding: 12px 20px;
            background: #2a5885;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            font-size: 16px;
        }
        
        .results {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .pharmacy-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .pharmacy-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .pharmacy-logo {
            height: 50px;
            margin-bottom: 15px;
        }
        
        .price {
            font-size: 24px;
            color: #2a5885;
            margin: 10px 0;
        }
        
        .buy-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background: #2a5885;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
        }
        
        .buy-btn:hover {
            background: #1e456b;
        }
        
        .disclaimer {
            margin-top: 30px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
            font-size: 14px;
            color: #666;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="menu-icon">
            <i class="fas fa-chevron-left"></i>
        </div>
        <ul class="sidenav">
            <li><a href="appointment.php"><i class="fas fa-calendar-check"></i> <span>Appointment</span></a></li>
            <li><a href="history.php"><i class="fas fa-history"></i> <span>Booking History</span></a></li>
            <li class="active"><a href="#"><i class="fas fa-prescription-bottle-alt"></i> <span>Pharmacy</span></a></li>
            <li><a href="insurance.php"><i class="fas fa-shield-alt"></i> <span>Insurance</span></a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i> <span>About Us</span></a></li>
            <li><a href="contact_us.php"><i class="fas fa-envelope"></i> <span>Contact</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>
    </div>
    
    <div class="container">
        <h1>Compare Pharmacy Prices</h1>
        
        <div class="results">
            <!-- Apollo Pharmacy Card -->
            <div class="pharmacy-card">
                <img src="https://www.apollopharmacy.in/favicon.ico" alt="Apollo Pharmacy" class="pharmacy-logo">
                <h3>Apollo Pharmacy</h3>
                <div class="price">₹120.00</div>
                <p>Delivery: 2-3 days</p>
                <a href="https://www.apollopharmacy.in" class="buy-btn" target="_blank">Buy Now</a>
            </div>
            
            <!-- Medplus Pharmacy Card -->
            <div class="pharmacy-card">
                <img src="https://www.medplusmart.com/favicon.ico" alt="Medplus Pharmacy" class="pharmacy-logo">
                <h3>Medplus Mart</h3>
                <div class="price">₹115.00</div>
                <p>Delivery: 1-2 days</p>
                <a href="https://www.medplusmart.com" class="buy-btn" target="_blank">Buy Now</a>
            </div>
            
            <!-- Netmeds Card -->
            <div class="pharmacy-card">
                <img src="netmed.avif" alt="Netmeds" class="pharmacy-logo">
                <h3>Netmeds</h3>
                <div class="price">₹125.00</div>
                <p>Delivery: Same day</p>
                <a href="https://www.netmeds.com" class="buy-btn" target="_blank">Buy Now</a>
            </div>
            
            <!-- 1mg Card -->
            <div class="pharmacy-card">
                <img src="https://www.1mg.com/favicon.ico" alt="1mg" class="pharmacy-logo">
                <h3>1mg</h3>
                <div class="price">₹118.00</div>
                <p>Delivery: Next day</p>
                <a href="https://www.1mg.com" class="buy-btn" target="_blank">Buy Now</a>
            </div>
            
            <!-- PharmEasy Card -->
            <div class="pharmacy-card">
                <img src="https://pharmeasy.in/favicon.ico" alt="PharmEasy" class="pharmacy-logo">
                <h3>PharmEasy</h3>
                <div class="price">₹122.00</div>
                <p>Delivery: 1-3 days</p>
                <a href="https://pharmeasy.in" class="buy-btn" target="_blank">Buy Now</a>
            </div>
        </div>
        
        <div class="disclaimer">
            <p><strong>Note:</strong> This is a price comparison service. When you click "Buy Now", you will be redirected to the respective pharmacy's website. We do not process orders or payments directly.</p>
        </div>
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
            
            // Search button functionality
            $(".search-box button").click(function() {
                alert('In a real implementation, this would search across pharmacy APIs for prices');
            });
        });
    </script>
</body>
</html>