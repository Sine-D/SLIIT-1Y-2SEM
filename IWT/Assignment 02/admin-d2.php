<?php
//session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    //echo "Connected successfully";
}

if (isset($_GET['id'])) {
    $d_id = $_GET['id'];

    // First, delete related records from the carts table
    $sql = "DELETE FROM details WHERE d_id = $d_id";
    if (!mysqli_query($conn, $sql)) {
        echo "Error deleting related records: " . mysqli_error($conn);
        exit();
        
    }else {
        header("Location: aboutus-admin.php");
        exit();
    }
}
    $conn->close();

    ?>
    