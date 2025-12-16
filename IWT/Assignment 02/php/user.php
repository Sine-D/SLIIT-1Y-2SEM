<?php
include 'connect.php';

if(isset($_POST['submit'])){
    // Use the correct column name as per your database structure
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $num = mysqli_real_escape_string($con, $_POST['num']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $vehicle = mysqli_real_escape_string($con, $_POST['vehicle']);  
    $message = mysqli_real_escape_string($con, $_POST['message']);

    // Adjust SQL statement based on actual table columns
    $sql = "INSERT INTO `crud` (name, num, email, vehicle, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssss", $name, $num, $email, $vehicle, $message);  // Use 'phone' variable instead of 'vehicle'

    if ($stmt->execute()) {
       // echo "Data inserted successfully";
       header('location:display.php');
    } else {
        die("Error inserting data: " . $stmt->error);
    }
    $stmt->close();
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
            <button type="submit" class="submit-btn" name="submit">Send Message</button>
        </form>
    </div>
    <!-- External Script -->
    <script src="JS/Form.js"></script>
</body>
</html>
