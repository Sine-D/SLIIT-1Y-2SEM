<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $num=$_GET['deleteid'];

    $sql="delete from `crud` where num='$num'";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfull";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }

}




?>