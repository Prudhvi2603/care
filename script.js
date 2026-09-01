document.getElementById('appointmentForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const name = document.getElementById('name').value.trim();
  const doctor = document.getElementById('doctor').value;
  const date = document.getElementById('date').value;
  const time = document.getElementById('time').value;

  if (name && doctor && date && time) {
    alert(`Appointment booked for ${name} with ${doctor} on ${date} at ${time}`);
    this.reset(); // Reset the form
  } else {
    alert('Please fill in all required fields.');
  }
});
