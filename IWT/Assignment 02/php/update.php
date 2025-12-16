<?php
include 'connect.php';

// Correct way to get the 'updateid' from the URL
$num_new = $_GET['updateid'];

if (isset($_POST['submit'])) {
    // Get the form data
    $name = $_POST['name'];
    $num_new = $_POST['num']; // Changed to $num_new to avoid confusion with $num from URL
    $email = $_POST['email'];
    $vehicle = $_POST['vehicle']; 
    $message = $_POST['message'];

    // Update SQL query - Ensure that column names match your database table structure
    $sql = "UPDATE `crud` SET name='$name', email='$email', vehicle='$vehicle', message='$message' WHERE num='$num'";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Updated successfully";
        header('location:display.php');
    } else {
        die("Failed to update: " . mysqli_error($con));
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user.css">
    <title>Contact Form</title>
</head>
<body>
    <!-- Background Video -->
    <video autoplay muted loop id="background-video">
        <source src="Bck.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Contact Form -->
    <div class="contact-form">
        <h2> Got Engine Troubles? Ask Your Questions and Get Help! </h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="contactForm">
            <div class="form-group">
                <b><label for="name">Your Name</label></b>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <b><label for="num">Engine Number</label></b>
                <input type="num" id="num" name="num" required>
            </div>

            <div class="form-group">
                <b><label for="email">Your Email</label></b>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <b><label for="vehicle">What is Your Vehicle?</label></b>
                <input type="text" id="vehicle" name="vehicle" required>
            </div>
            <div class="form-group">
                <b><label for="message">What is Your Trouble?</label></b>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-btn" name="submit">Update</button>
        </form>
    </div>
    <!-- External Script -->
    <script src="JS/Form.js"></script>
</body>
</html>
