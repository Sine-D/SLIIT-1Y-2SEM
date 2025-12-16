<?php
// Database connection
include 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update data
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "UPDATE wa SET Username='$username', email='$email', number='$phone', massage='$message' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: user_data_display.php'); // Redirect to display page
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
