document.getElementById('appointmentForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form data
    const fullName = document.getElementById('fullName').value;
    const emailAddress = document.getElementById('emailAddress').value;
    const phoneNumber = document.getElementById('phoneNumber').value;
    const departmentService = document.getElementById('departmentService').value;
    const preferredDate = document.getElementById('preferredDate').value;
    const preferredTime = document.getElementById('preferredTime').value; // Get the time value
    const additionalMessage = document.getElementById('additionalMessage').value;

    // Basic validation (you can add more complex validation here)
    if (!fullName || !emailAddress || !phoneNumber || !departmentService || !preferredDate || !preferredTime) {
        alert('Please fill in all required fields.');
        return;
    }

    // For demonstration, log the data to the console
    console.log('--- Appointment Request ---');
    console.log('Full Name:', fullName);
    console.log('Email Address:', emailAddress);
    console.log('Phone Number:', phoneNumber);
    console.log('Department/Service:', departmentService);
    console.log('Preferred Date:', preferredDate);
    console.log('Preferred Time:', preferredTime); // Log the time
    console.log('Additional Message:', additionalMessage || 'N/A');

    alert('Appointment request simulated. Check console for data.');
    document.getElementById('appointmentForm').reset(); // Reset form after successful "submission"
});