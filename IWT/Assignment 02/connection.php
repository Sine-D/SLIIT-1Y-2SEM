<?php
$servernme = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form_db";

// create connection

$conn = new mysqli ($servernme,$username,$password,$dbname);

// check the connection

if ($conn -> connect_error){
    die("connection Failed:".$conn->connect_error);
}
else{
    echo "connection succeeded";
}
?>