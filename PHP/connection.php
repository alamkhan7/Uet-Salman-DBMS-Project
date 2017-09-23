<?php

$host = "localhost";
$user = "root";
$pass = "";
$Databse = "fyp_management_system";
$conn = mysqli_connect($host, $user, $pass, $Databse);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>