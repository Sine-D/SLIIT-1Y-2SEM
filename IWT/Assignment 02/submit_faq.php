<?php
// Database connection
include 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert data into the database
$sql = "INSERT INTO wa (Username, email, number, massage) VALUES ('$username', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: user_data_display.php'); // Navigate to data display page
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
