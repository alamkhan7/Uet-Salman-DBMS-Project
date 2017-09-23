<?php

include ('connection.php');



	if (isset($_POST['Next3']))
	{

		$Member1 = $_POST['member1'];
		$Member2 = $_POST['member2'];
		$Member3 = $_POST['member3'];
		
		$T1 = strrev($Member1);
		$T2 = substr($T1, 0,4);
		$T3 = strrev($T2);
	  	$G1 = floatval($T3);

	  	$T1 = strrev($Member2);
		$T2 = substr($T1, 0,4);
		$T3 = strrev($T2);
	  	$G2 = floatval($T3);

		$T1 = strrev($Member3);
		$T2 = substr($T1, 0,4);
		$T3 = strrev($T2);
	  	$G3 = floatval($T3);

		$Superviser = $_POST['supervisor'];
		$Advisor = $_POST['advisor'];
		$Project = $_POST['project'];

	    $R1 = substr($Member1, 0,3);
	    $R2 = substr($Member2, 0,3);
	    $R3 = substr($Member3, 0,3);

	  	$Avg = ($G1 + $G2 + $G3)/3;

	  	if ($Avg >= 2.2 )
	  	{
	  		if ($Avg <= 2.7)
	  		{
	  			
	  			header('Location: ../groups.html');
	  		}
	  		else
	  		{
	  			$Message = "Ineligible Group";
	  			header('Location: ../ProMan_2.php?Msg='.$Message);
	  		}
	  	}

	  	else
	  		{
	  			$Message = "Ineligible Group";
	  			header('Location: ../ProMan_2.php?Msg='.$Message);
	  		}
	



	}


?>