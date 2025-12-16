<?php
// Database connection
include 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete user data
$id = $_GET['id'];
$sql = "DELETE FROM wa WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: user_data_display.php'); // Redirect to display page
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
