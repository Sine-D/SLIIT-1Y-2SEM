<?php
//DB Connection
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST ["name"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];
    $id = $_POST ["id"];

    //update data in db
    $sql = "UPDATE user_details SET Username='$name',
    Usergmail='$email',Userpassword='$password' WHERE id ='$id'";

    //update check
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('User details Updated Successfully')</script>";
        echo "<script>window.location.href='display2.php'</script>";
        exit();
    }
    else{
        echo "Details Update failed" . $conn->error;
    }
}
//close connection
$conn-> close();
?>