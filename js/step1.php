<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "fyp_management_system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['Next1']))
{
	$univ 		= $_POST['univ'];
	$dept 		= $_POST['dept'];
	$batch 		= $_POST['batch'];
	$members 	= $_POST['members'];

	// store
	header('Location: ../ProMan_2.html');
}

?>