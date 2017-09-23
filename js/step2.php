<?php

// Conn

if (isset($_POST['Next2']))
{
	$member1 	= $_POST['member1'];
	$member2 	= $_POST['member2'];
	$member3 	= $_POST['member3'];
	$checkAgree	= $_POST['checkAgree'];
	
	// store

	echo checkAgree;
	header('Location: ../ProMan_3.html');
}

?>