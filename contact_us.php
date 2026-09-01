<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Healthcare Portal</title>
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
        
        h2 {
            color: #28a745;
            margin-top: 30px;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }
        
        .contact-container {
            display: flex;
            gap: 30px;
            margin-top: 30px;
        }
        
        .contact-info {
            flex: 1;
            padding: 25px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .contact-info h3 {
            color: #2a5885;
            margin-bottom: 20px;
        }
        
        .contact-info p {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-info i {
            color: #28a745;
            margin-right: 15px;
            font-size: 18px;
            min-width: 20px;
            text-align: center;
            margin-top: 3px;
        }
        
        .contact-form {
            flex: 1;
            padding: 25px;
            background: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
            font-size: 16px;
        }
        
        .form-group textarea {
            height: 120px;
            resize: vertical;
        }
        
        .submit-btn {
            background: #2a5885;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background 0.3s;
        }
        
        .submit-btn:hover {
            background: #1e456b;
        }
        
        .map-container {
            margin-top: 40px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .map-container iframe {
            width: 100%;
            height: 400px;
            border: none;
        }
        
        .contact-hours {
            margin-top: 20px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #2a5885;
            color: white;
            border-radius: 50%;
            text-decoration: none;
            transition: transform 0.3s;
        }
        
        .social-links a:hover {
            transform: translateY(-3px);
            background: #28a745;
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
            <li><a href="about.php"><i class="fas fa-shield-alt"></i> <span>Insurance</span></a></li>
            <li><a href="#"><i class="fas fa-info-circle"></i> <span>About Us</span></a></li>
            <li class="active"><a href="contact_us.php"><i class="fas fa-envelope"></i> <span>Contact</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
        </ul>
    </div>
    
    <div class="container">
        <h1>Contact Our Healthcare Team</h1>
        <p style="text-align: center; margin-bottom: 30px;">We're here to help and answer any questions you might have. Reach out to us through any of these channels.</p>
        
        <div class="contact-container">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>123 Healthcare Avenue, Mumbai, Maharashtra 400001, India</span>
                </p>
                <p>
                    <i class="fas fa-phone-alt"></i>
                    <span>+91 98765 43210</span>
                </p>
                <p>
                    <i class="fas fa-envelope"></i>
                    <span>info@healthcareportal.com</span>
                </p>
                <p>
                    <i class="fas fa-headset"></i>
                    <span>Support: support@healthcareportal.com</span>
                </p>
                
                <div class="contact-hours">
                    <h3>Working Hours</h3>
                    <p>
                        <i class="fas fa-clock"></i>
                        <span>Monday - Friday: 8:00 AM - 8:00 PM</span>
                    </p>
                    <p>
                        <i class="fas fa-clock"></i>
                        <span>Saturday: 9:00 AM - 6:00 PM</span>
                    </p>
                    <p>
                        <i class="fas fa-clock"></i>
                        <span>Sunday: Emergency Support Only</span>
                    </p>
                </div>
                
                <div class="social-links">
                    <h3>Follow Us</h3>
                    <div>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="appointment">Appointment Help</option>
                            <option value="pharmacy">Pharmacy Questions</option>
                            <option value="insurance">Insurance Questions</option>
                            <option value="technical">Technical Support</option>
                            <option value="feedback">Feedback/Suggestions</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
        
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.263316519592!2d72.8243143149009!3d19.05598768710263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8df0df86e1f%3A0x8a3a9f1d0a54df6a!2s123%20Healthcare%20Ave%2C%20Mumbai%2C%20Maharashtra%20400001!5e0!3m2!1sen!2sin!4v1620000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
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