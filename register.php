<?php
include 'connect.php';
if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=md5($password); // Encrypt the password

    // Check if user already exists
    $checkEmail = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        echo "Email Address Exists !";
    } else {
        // Insert new user
        $insertQuery = "INSERT INTO user (firstName, lastName, email, password) 
                     VALUES ('$firstName', '$lastName', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            header("location:index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
if(isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password=md5($password); // Encrypt the password

    // Check if user exists
    $sql = "SELECT * FROM user WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("location:appointment.php");
        exit();
    } else {
        echo "Not Found,Invalid Email or Password !";
    }
}
?>