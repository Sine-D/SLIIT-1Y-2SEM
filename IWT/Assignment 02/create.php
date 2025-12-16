<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $num = $_POST['num'];
    $email = $_POST['email'];
    $vehicle = $_POST['vehicle'];
    $message = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO contacts (name, num, email, vehicle, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $num, $email, $vehicle, $message);

    if ($stmt->execute()) {
        echo "New record created successfully";
        header('location:display.php');
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
