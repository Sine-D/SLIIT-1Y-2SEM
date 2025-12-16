<?php
//session_start();
include 'config.php';

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
        header("Location: conus-admin.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Contact Us</title>
    <!-- Add Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Styles/contact-us.css">
	<link rel="stylesheet" href="Styles/Style2.css">
	
	<style>
        h1 {
             margin-bottom: 20px;
             font-size: 50px;
             color: black;
	         font-family:Stencil Std, fantasy;
        }
    </style>
	
</head>
<body>

<!-- Header Section -->
    <header class="header">
        <!-- Logo Section -->
        <div class="lg">
           <a href="Home.html" ><img src="images/Logo (1).jpg" alt="Logo"></a>
        </div>

        <!-- Navigation Links -->
        <nav>
            <ul class="menu">
                <li><a href="Home.html">Home</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li>
                    <a href="#">Our Services</a>
                    <ul class="dropdown">
                        <li><a href="iwt.html">Wheel Alignment</a></li>
                        <li><a href="Engine_Service.html">Engine Service</a></li>
                        <li><a href="Interior Service.html">Interior Services</a></li>
                    </ul>
                </li>
                <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
        </nav>
        <!-- Search Box -->
        <div class="search-box">
            <input type="text" placeholder="Search..">
        </div>
        <div class="User"><a href="userprofile.html"><img src="images/UP.png" alt="up"></a></div>
    </header>



    <!-- Main Content -->
    <main>
        <!-- Your main content goes here -->
    </main>
	
	
	
    <div class="about-container">
	<div class="color">
        <h1><center>CONTACT US</center></h1><hr color="red" size="2px">
	<center>
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
                    <p>011 2358745</p>
                </div>

                <!-- Chat to Support with icon -->
                <div class="box">
                    <i class="fas fa-comments"></i>
                    <h3>Chat To Support</h3>
                </div>

                <!-- Our main center with icon -->
                <div class="box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Our Main Center</h3>
                    <p>Colombo 7,Srilanka</p>
                </div>

                <!-- Fax with icon -->
                <div class="box">
                    <i class="fas fa-fax"></i>
                    <h3>Fax</h3>
                    <p>+123 456 7890</p>
                </div>
            </div>
        </div>
		</div>
	</center>
    </div>
	
	
	
	<!-- Footer Section -->
   <footer>
    <div class="footer-container">
        <div class="contact-info">
            <h3>Have a Problem?</h3>
            <p>
                <a href="tel:+94747725466"><i class="fas fa-phone"></i> 0747725466</a><br>
                <a href="mailto:motorsolutions@gmail.com"><i class="fas fa-envelope"></i>
                    motorsolutions@gmail.com</a>
            </p>
        </div>
        <div class="social-media">
            <ul>
                <li>
                    <div class="fb"><img src="images/fb.jpg" alt="#"></div>
                </li>
                
                <li>
                    <div class="insta"><img src="images/insta.png" alt="#"></div>
                </li>

                <li>
                    <div class="twi"><img src="images/twi.jpg" alt="#"></div>
                <li>

                    <div class="lin"><img src="images/lin.jpg" alt="#"></div>
                </li>
            </ul>
        </div>
        <div class="navigation">
            <div class="Link"><p><center>Links</center></p></div><br>
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="iwt2.html">Privacy and Policy</a></li>
            </ul>
        </div>
        <div class="copyright">
            <p><center>&copy; 2024 Luxury Motor Solutions. All rights reserved.</center></p>
            <ul>
                <li><a href="iwt2.html">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>
