<?php
$servername = "localhost"; // Server name
$username = "root"; 
$password = ""; // database password
$dbname = "contact_form_db"; //databse name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
