
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Your Appointment</title>
    <link rel="stylesheet" href="appointment_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    </head>
<body>

    <section class="sidenav-container">
        <div class="sidebar">

        <ul class="sidenav">
            <li><a href="#">Appointment</a></li>
            <li><a href="history.php">Booking History</a></li>
            <li><a href="pharmacy.php">Pharmacy</a></li>
            <li><a href="insurance.php">Insurance</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact_us.php">Contact</a></li>
            
            <li><a href="logout.php">Logout</a></li>
        </ul>
        </div>
     </section>
    

    <div class="appointment-form-container">
        <h1>Schedule Your Appointment</h1>

        <form id="appointmentForm" action="submit_appointment.php" method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="fullName"><i class="fas fa-user"></i> Full Name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="emailAddress"><i class="fas fa-envelope"></i> Email Address</label>
                    <input type="email" id="emailAddress" name="emailAddress" placeholder="Enter your email" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="phoneNumber"><i class="fas fa-phone-alt"></i> Phone Number</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" required>
                </div>
                <div class="form-group">
                    <label for="departmentService">Department/Service</label>
                    <div class="select-wrapper">
                        <select id="departmentService" name="departmentService" required>
                            <option value="">Select a service</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Oncology">Oncology</option>
                            <option value="Orthopaedics">Orthopaedics</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Gastroenterology">Gastroenterology</option>
                            <option value="General Checkup">General Checkup</option>
                        </select>
                        <i class="fas fa-chevron-down select-arrow"></i>
                    </div>
                </div>
            </div>

            <div class="form-row single-row">
                <div class="form-group">
                    <label for="preferredDate"><i class="fas fa-calendar-alt"></i> Preferred Date</label>
                    <div class="date-input-wrapper">
                        <input type="text" id="preferredDate" name="preferredDate" placeholder="dd/mm/yyyy" required class="flatpickr-input">
                        <span class="calendar-icon" id="datePickerIcon"><i class="fas fa-calendar-alt"></i></span>
                    </div>
                </div>
            </div>
            <!--<div class="form-row single-row">
                <div class="form-group">
                    <label for="preferredDate"><i class="fas fa-calendar-alt"></i> Preferred Date</label>
                    <div class="date-input-wrapper">
                        <input type="date" id="preferredDate" name="preferredDate" placeholder="dd/mm/yyyy" required>
                        </div>
                </div>
            </div>-->

            <div class="form-row single-row">
                <div class="form-group">
                    <label for="preferredTime"><i class="fas fa-clock"></i> Preferred Time</label>
                    <div class="time-input-wrapper">
                        <input type="text" id="preferredTime" name="preferredTime" placeholder="12:30 PM" required class="flatpickr-input">
                        </div>
                </div>
            </div>

            <div class="form-row single-row">
                <div class="form-group full-width">
                    <label for="additionalMessage">Additional Message (Optional)</label>
                    <textarea id="additionalMessage" name="additionalMessage" rows="5" placeholder="Please describe your concerns or any additional information..."></textarea>
                </div>
            </div>

            <button type="submit" class="submit-button">Submit Appointment Request</button>
        </form>
    </div>

    <script src="appointment_script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Flatpickr for Preferred Date
        const datePicker = flatpickr("#preferredDate", {
            dateFormat: "d/m/Y", // dd/mm/yyyy format
            allowInput: true,    // Allow manual typing
            // UNCOMMENT THIS LINE:
            appendTo: document.querySelector('.date-input-wrapper') // Attach calendar to the input's wrapper
        });

        // Attach click listener to your custom date icon
        const calendarIcon = document.getElementById('datePickerIcon');
        if (calendarIcon) {
            calendarIcon.addEventListener('click', function() {
                datePicker.open(); // Open the Flatpickr instance for date
            });
        }

        // Flatpickr for Preferred Time
        flatpickr("#preferredTime", {
            enableTime: true,   // Enable time picker
            noCalendar: true,   // Disable calendar (only show time)
            dateFormat: "h:i K", // Format for 12-hour time with AM/PM (e.g., 12:30 PM)
            time_24hr: false,   // Use 12-hour format
            minuteIncrement: 30, // Optional: Snap to 30-minute intervals
            allowInput: true,   // Allow manual typing
            placeholder: "12:30 PM" // Set placeholder
        });
    });

    // Sidebar JavaScript (using jQuery) - (keep this as is)
    $(document).ready(function() {
        $(".menu-icon").click(function(e) {
            e.preventDefault();
            $(this).toggleClass("fa-chevron-left fa-chevron-right");
            $(".sidebar").toggleClass("active1");
            $(".sidenav li a").toggleClass("anchor");
            $(".sidenav li").toggleClass("lislide");
        });

        $(".sidenav li").click(function() {
            $(".sidenav li a").removeClass("active");
            $(this).find('a').addClass("active");
        });
    });
</script>

</body>
</html>
