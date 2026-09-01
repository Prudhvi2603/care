<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Healthcare Portal</title>
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
        .sidebar.active1 .sidenav li a span {
             display: none;
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
        .sidebar.active1 .sidenav li a {
            display: flex;
            justify-content: center;
        }   

        .sidebar.active1 .sidenav li i {
            padding-right: 0;
            font-size: 20px;
        }

        .sidebar.active1 ~ .container {
            margin-left: 40px;
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
        
        .container {
            flex: 1;
            max-width: 1000px;
            margin: 25px 20px 25px 0;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        h1 {
            color: #2a5885;
            text-align: center;
            margin-bottom: 30px;
        }
        
        h2 {
            color: #28a745;
            margin-top: 30px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }
        
        .about-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .about-header img {
            max-width: 200px;
            margin-bottom: 20px;
        }
        
        .mission-vision {
            display: flex;
            gap: 30px;
            margin: 40px 0;
        }
        
        .mission, .vision {
            flex: 1;
            padding: 25px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .mission h3, .vision h3 {
            color: #2a5885;
            text-align: center;
            margin-bottom: 15px;
        }
        
        .team {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .team-member {
            text-align: center;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        
        .team-member:hover {
            transform: translateY(-5px);
        }
        
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 5px solid #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .stats {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin: 50px 0;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .stat-item {
            padding: 20px;
            min-width: 150px;
        }
        
        .stat-number {
            font-size: 36px;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 5px;
        }
        
        .contact-info {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
            margin-top: 40px;
        }
        
        .contact-info h3 {
            color: #2a5885;
            margin-bottom: 20px;
        }
        
        .contact-info p {
            margin-bottom: 10px;
        }
        
        .contact-info i {
            color: #28a745;
            margin-right: 10px;
            width: 20px;
            text-align: center;
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
            <li><a href="#"><i class="fas fa-shield-alt"></i> <span>Insurance</span></a></li>
            <li class="active"><a href="#"><i class="fas fa-info-circle"></i> <span>About Us</span></a></li>
            <li><a href="contact_us.php"><i class="fas fa-envelope"></i> <span>Contact</span></a></li>
            
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>
    </div>
    
    <div class="container">
        <div class="about-header">
            <h1>About Our Healthcare Platform</h1>
            <p>Connecting patients with quality healthcare services since 2015</p>
        </div>
        
        <section>
            <h2>Our Story</h2>
            <p>Founded in 2015, our healthcare platform began with a simple mission: to make quality healthcare accessible and affordable for everyone. What started as a small team of healthcare professionals and technologists has grown into a comprehensive platform serving millions of patients across the country.</p>
            
            <p>We recognized the challenges patients face in navigating complex healthcare systems - from booking appointments to finding affordable medications and understanding insurance options. Our platform was designed to simplify these processes through technology while maintaining the human touch that's essential in healthcare.</p>
        </section>
        
        <div class="mission-vision">
            <div class="mission">
                <h3>Our Mission</h3>
                <p>To empower individuals to take control of their health by providing transparent, accessible, and affordable healthcare solutions through innovative technology and partnerships with trusted providers.</p>
            </div>
            
            <div class="vision">
                <h3>Our Vision</h3>
                <p>To create a healthcare ecosystem where quality medical care is accessible to everyone, regardless of location or economic status, through seamless digital integration of services.</p>
            </div>
        </div>
        
        <section>
            <h2>Our Values</h2>
            <ul style="list-style-type: none; padding-left: 0;">
                <li><i class="fas fa-check-circle" style="color: #28a745;"></i> <strong>Patient-Centered Care:</strong> Every decision we make puts patients' needs first.</li>
                <li><i class="fas fa-check-circle" style="color: #28a745;"></i> <strong>Transparency:</strong> Clear pricing and honest information about all services.</li>
                <li><i class="fas fa-check-circle" style="color: #28a745;"></i> <strong>Innovation:</strong> Continuously improving our platform to serve you better.</li>
                <li><i class="fas fa-check-circle" style="color: #28a745;"></i> <strong>Integrity:</strong> Ethical practices in all our partnerships and services.</li>
                <li><i class="fas fa-check-circle" style="color: #28a745;"></i> <strong>Accessibility:</strong> Breaking down barriers to quality healthcare.</li>
            </ul>
        </section>
        
        <div class="stats">
            <div class="stat-item">
                <div class="stat-number">5M+</div>
                <div>Patients Served</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">10K+</div>
                <div>Healthcare Providers</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div>Cities Covered</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div>Support Available</div>
            </div>
        </div>
        
        <section>
            <h2>Our Team</h2>
            <p>Our diverse team includes healthcare professionals, technology experts, and customer service specialists all working together to improve your healthcare experience.</p>
            
            <div class="team">
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Dr. Sarah Johnson">
                    <h3>Dr. Sarah Johnson</h3>
                    <p>Chief Medical Officer</p>
                    <p>MD, 15 years experience in internal medicine</p>
                </div>
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Raj Patel">
                    <h3>Raj Patel</h3>
                    <p>CEO & Founder</p>
                    <p>Healthcare technology entrepreneur</p>
                </div>
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Priya Sharma">
                    <h3>Priya Sharma</h3>
                    <p>Head of Pharmacy Services</p>
                    <p>Pharmacist with 10 years experience</p>
                </div>
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Amit Kumar">
                    <h3>Amit Kumar</h3>
                    <p>CTO</p>
                    <p>Technology architect specializing in healthcare systems</p>
                </div>
            </div>
        </section>
        
        <div class="contact-info">
            <h3>Contact Us</h3>
            <p><i class="fas fa-map-marker-alt"></i> 123 Healthcare Avenue, Mumbai, Maharashtra 400001</p>
            <p><i class="fas fa-phone"></i> +91 98765 43210</p>
            <p><i class="fas fa-envelope"></i> info@healthcareportal.com</p>
            <p><i class="fas fa-clock"></i> Customer Support: 24/7</p>
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
    });
</script>
</body>
</html>