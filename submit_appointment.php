<?php
include 'history_con.php';


// Get form data
$fullName = $_POST['fullName'];
$email = $_POST['emailAddress'];
$phone = $_POST['phoneNumber'];
$department = $_POST['departmentService'];
$preferredDate = $_POST['preferredDate'];
$preferredTime = $_POST['preferredTime'];
$message = isset($_POST['additionalMessage']) ? $_POST['additionalMessage'] : '';

// Convert date format from d/m/Y to Y-m-d for MySQL
$dateParts = explode('/', $preferredDate);
$mysqlDate = $dateParts[2] . '-' . $dateParts[1] . '-' . $dateParts[0];

// Convert time format to 24-hour for MySQL
$mysqlTime = date("H:i:s", strtotime($preferredTime));

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO appointments (full_name, email, phone, department_service, preferred_date, preferred_time, additional_message) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $fullName, $email, $phone, $department, $mysqlDate, $mysqlTime, $message);

// Execute and respond
if ($stmt->execute()) {
    // Success - redirect with success message
    header("Location: appointment_success.php?email=" . urlencode($email));
    exit();
} else {
    // Error
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>