<?php
//session_start();
include 'config.php';

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
    