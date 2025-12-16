<?php
////db Connection
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST ["name"];
    $email = $_POST ["email"];
    $password = $_POST ["password"];

    $checkquery = "SELECT * FROM user_details WHERE Usergmail = '$email'";
    $result = $conn->query($checkquery);

    if ($result->num_rows > 0){
        //if gmail already taken
        echo "<script>alert('This Gmail is already taken . please use other one.')</script>";
        echo "<script>window.location.href='sign up.html'</script>";
    }
    else{

    //insert data to db
    $sql = "INSERT INTO user_details (Username, Usergmail, Userpassword) 
    VALUES ('$name', '$email', '$password')";


    //check data inserting
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Added Successfully')</script>";
        echo "<script>window.location.href='display2.php'</script>";
    }
    else{
        echo "Error : " . $sql . "<br>" . $conn->error;
    }
}
}
//close the connection
$conn->close();
?>