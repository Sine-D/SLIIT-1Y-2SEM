<?php
//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch phone, center, and fax info from the database (if available)
$query = "SELECT phone_number, center, fax FROM details LIMIT 1"; // Adjust your table name as needed
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    $row = ['phone_number' => 'N/A', 'center' => 'N/A', 'fax' => 'N/A'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $Message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO contact_us (name, email, v_no, message) VALUES ('$name', '$Email', '$subject', '$Message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Successful!');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Add Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/contact-us.css">
</head>
<body>
    <div class="main">
        <!-- Left form part -->
        <div class="form-con">
            <div class="container">
                <h2>Get In Touch With Us <i class="fas fa-info-circle"></i></h2>

                <form action="contact-us.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>

                    <label for="subject">Subject No</label>
                    <input type="text" id="subject" name="subject" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <!-- Right sub-parts (Phone, Chat, etc.) -->
        <div class="div-con">
            <div class="grid-container">
                <!-- Phone number with icon -->
                <div class="box">
                    <i class="fas fa-phone-alt"></i>
                    <h3>Phone number</h3>
                    <p><?php echo $row['phone_number']; ?></p>
                </div>

                <!-- Chat to Support with icon -->
                <div class="box">
                    <i class="fas fa-comments"></i>
                    <h3>Chat To Support</h3>
                    <button>Click Here</button>
                </div>

                <!-- Our main center with icon -->
                <div class="box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Our Main Center</h3>
                    <p><?php echo $row['center']; ?></p>
                </div>

                <!-- Fax with icon -->
                <div class="box">
                    <i class="fas fa-fax"></i>
                    <h3>Fax</h3>
                    <p><?php echo $row['fax']; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
