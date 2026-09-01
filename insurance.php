<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Comparison</title>
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
        
        .insurance-types {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .insurance-type-btn {
            padding: 10px 20px;
            background: #f0f0f0;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .insurance-type-btn.active {
            background: #2a5885;
            color: white;
        }
        
        .results {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .provider-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .provider-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .provider-logo {
            height: 50px;
            margin-bottom: 15px;
            object-fit: contain;
        }
        
        .price {
            font-size: 24px;
            color: #2a5885;
            margin: 10px 0;
        }
        
        .features {
            margin: 15px 0;
            font-size: 14px;
        }
        
        .features li {
            margin-bottom: 8px;
            list-style-type: none;
            position: relative;
            padding-left: 20px;
        }
        
        .features li:before {
            content: "✓";
            color: #28a745;
            position: absolute;
            left: 0;
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
            margin-top: 15px;
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
        
        .rating {
            color: #ffc107;
            margin-bottom: 10px;
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
            <li><a href="pharmacy.php"><i class="fas fa-prescription-bottle-alt"></i> <span>Pharmacy</span></a></li>
            <li class="active"><a href="#"><i class="fas fa-shield-alt"></i> <span>Insurance</span></a></li>
            <li><a href="about.php"><i class="fas fa-info-circle"></i> <span>About Us</span></a></li>
            <li><a href="contact_us.php"><i class="fas fa-envelope"></i> <span>Contact</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>
    </div>
    
    <div class="container">
        <h1>Compare Insurance Plans</h1>
        
        <div class="results">
            <!-- PolicyBazaar Card -->
            <div class="provider-card">
                <img src="pb.webp" alt="PolicyBazaar" class="provider-logo">
                <h3>PolicyBazaar</h3>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (4.5/5)</span>
                </div>
                <div class="price">₹8,000/year</div>
                <ul class="features">
                    <li>Cashless hospitalization at 6500+ hospitals</li>
                    <li>Coverage up to ₹1 Crore</li>
                    <li>Pre & post hospitalization cover</li>
                    <li>Free health check-up</li>
                </ul>
                <a href="https://www.policybazaar.com" class="buy-btn" target="_blank">Get Quote</a>
            </div>
            
            <!-- Coverfox Card -->
            <div class="provider-card">
                <img src="cover.png" alt="Coverfox" class="provider-logo">
                <h3>Coverfox</h3>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (4.2/5)</span>
                </div>
                <div class="price">₹7,500/year</div>
                <ul class="features">
                    <li>Instant policy issuance</li>
                    <li>24/7 customer support</li>
                    <li>No medical tests required</li>
                    <li>Tax benefits under section 80D</li>
                </ul>
                <a href="https://www.coverfox.com" class="buy-btn" target="_blank">Get Quote</a>
            </div>
            
            <!-- Acko Card -->
            <div class="provider-card">
                <img src="acko.png" alt="Acko" class="provider-logo">
                <h3>Acko Insurance</h3>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <span> (4.8/5)</span>
                </div>
                <div class="price">₹9,200/year</div>
                <ul class="features">
                    <li>100% digital process</li>
                    <li>Super fast claims settlement</li>
                    <li>No hidden charges</li>
                    <li>Daily hospital cash benefit</li>
                </ul>
                <a href="https://www.acko.com" class="buy-btn" target="_blank">Get Quote</a>
            </div>
            
            <!-- Digit Insurance Card -->
            <div class="provider-card">
                <img src="Digit-Insurance.jpg" alt="Digit Insurance" class="provider-logo">
                <h3>Digit Insurance</h3>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (4.6/5)</span>
                </div>
                <div class="price">₹8,500/year</div>
                <ul class="features">
                    <li>Affordable premium options</li>
                    <li>Comprehensive coverage</li>
                    <li>Instant policy documents</li>
                    <li>24/7 claim assistance</li>
                </ul>
                <a href="https://www.godigit.com" class="buy-btn" target="_blank">Get Quote</a>
            </div>
            
            <!-- HDFC Ergo Card -->
            <div class="provider-card">
                <img src="HDFC-Ergo-logo.png" alt="HDFC Ergo" class="provider-logo">
                <h3>HDFC Ergo</h3>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <span> (4.3/5)</span>
                </div>
                <div class="price">₹10,000/year</div>
                <ul class="features">
                    <li>Wide network hospitals</li>
                    <li>Pre-existing disease cover</li>
                    <li>Maternity benefits</li>
                    <li>Restoration benefit</li>
                </ul>
                <a href="https://www.hdfcergo.com" class="buy-btn" target="_blank">Get Quote</a>
            </div>
            
            <!-- ICICI Lombard Card -->
            <div class="provider-card">
                <img src="icici.jpg" alt="ICICI Lombard" class="provider-logo">
                <h3>ICICI Lombard</h3>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span> (4.5/5)</span>
                </div>
                <div class="price">₹9,800/year</div>
                <ul class="features">
                    <li>Lifetime renewability</li>
                    <li>Day care procedures covered</li>
                    <li>Alternative treatments covered</li>
                    <li>Organ donor expenses</li>
                </ul>
                <a href="https://www.icicilombard.com" class="buy-btn" target="_blank">Get Quote</a>
            </div>
        </div>
        
        <div class="disclaimer">
            <p><strong>Note:</strong> This is an insurance comparison service. When you click "Get Quote", you will be redirected to the respective insurance provider's website. We do not process applications or payments directly. Always read the policy terms and conditions before purchasing.</p>
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
            
            // Insurance type tabs
            $(".insurance-type-btn").click(function() {
                $(".insurance-type-btn").removeClass("active");
                $(this).addClass("active");
                // In a real implementation, this would filter the insurance plans
                alert('Filtering ' + $(this).text() + ' plans...');
            });
            
            // Search button functionality
            $(".search-box button").click(function() {
                alert('In a real implementation, this would search across insurance providers');
            });
        });
    </script>
</body>
</html>