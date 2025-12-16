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
}else{
    //echo "Connected successfully";
}

if (isset($_GET['id'])) {
    $report_id = $_GET['id'];

    // First, delete related records from the carts table
    $sql = "DELETE FROM contact_us WHERE report_id = $report_id";
    if (!mysqli_query($conn, $sql)) {
        echo "Error deleting related records: " . mysqli_error($conn);
        exit();
        
    }else {
        header("Location: conus-admin.php");
        exit();
    }
}
    $conn->close();

    ?>
    