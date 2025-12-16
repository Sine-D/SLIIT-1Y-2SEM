<?php
// DB connection
require_once "connection.php";

// check the delete id
if(isset($_GET["delete_id"])){
    $deleteid = $_GET['delete_id'];

    $sql = "DELETE FROM user_details WHERE id = '$deleteid'";
    if($conn->query($sql) === TRUE){
        echo "<script>alert('User account deleted Successfully')</script>";
        echo "<script>window.location.href='sign up.html'</script>";
    }
    else{
        echo "Account can't Delete";
    }
}
else{
    echo "Account is not found";
}
//close connection
$conn-> close();
?>