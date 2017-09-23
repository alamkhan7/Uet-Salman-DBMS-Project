<?php
	/*Connection To Database*/

	$host  ="localhost";
	$dbuser="root";
	$pass  =")(*LKJ";   // Must be changed
	$dbname="fyp_salman";
	$conn = mysqli_connect($host,$dbuser,$pass,$dbname);
	

	if(mysqli_connect_errno())
 	{
 		die("Connection Failed" . mysqli_connect_errno());
 	}
 	else
 		//echo "Conntect To Library Database Done!<br><br>";

?>