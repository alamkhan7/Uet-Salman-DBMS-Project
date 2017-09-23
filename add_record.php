<?php

include 'connection.php' ;

function check_empty_field($record,$lenght)
{
	
	$i=1 ;
	while ($i <= $lenght) 
	{
		if ( empty($record[$i][1]) || empty($record[$i][2]) || empty($record[$i][3]) )
		{	
			$i = $i + 1 ;
			return "Error: Field Missing In Row {$i}";
		}

	 $i++;
	}

	return "No Missing" ;
}

function add_student($std_array,$lenght_array)
{
	include 'connection.php' ;

	$check = check_empty_field($std_array,$lenght_array) ;

	if( $check === "No Missing" )
	{
		$flag = 0 ;
		$i=1 ;
		while ($i <= $lenght_array) 
		{
			$std_name = $std_array[$i][1] ;
			$std_id = $std_array[$i][2] ;
			$batch = $std_array[$i][3] ;

			$Q = "call Add_STD('$std_id', '$batch', '$std_name')";
			$Response = mysqli_query($conn,$Q) ;

			// Check whether the Query Operation Completed or not
			if ( !$Response )
			{
			 	$flag = 1 ;
			 	break ;
			}

		 $i++;
		}

		if ($flag)
		{
			return $message = "Soory! Failed To Add New Record<br>" ; 	
		}	
		else
		{
			return $message = "Students Added Successfully!<br>";
		}
	}
	else
	{
		return $check; 
	}
}

function add_project($project_array,$lenght_array)
{
	include 'connection.php' ;

	$check = check_empty_field($project_array,$lenght_array) ;

	if( $check === "No Missing" )
	{
		$flag = 0 ;
		$i=1 ;
		while ($i <= $lenght_array) 
		{
			$pro_title = $project_array[$i][1] ;
			$pro_supervisor = $project_array[$i][2] ;
			$pro_advisor = $project_array[$i][3] ;

			$Q = "call Add_PRJ('$pro_advisor','$pro_supervisor','$pro_title')";
			$Response = mysqli_query($conn,$Q) ;

			// Check whether the Query Operation Completed or not
			if ( !$Response )
			{
			 	$flag = 1 ;
			 	break ;
			}

		 $i++;
		}

		if ($flag)
		{
			return $message = "Soory! Failed To Add New Record<br>" ; 	
		}	
		else
		{
			return $message = "Project Added Successfully!<br>";
		}
	}
	else
	{
		return $check; 
	}
}

function add_project_group($member1,$member2,$member3,$project_id)
{
	include 'connection.php' ;
	
	$msg = "" ;
	$Q = "CALL make_group('$member1','$member2','$member3','$project_id')";
	$Response = mysqli_query($conn,$Q) ;

	// Check whether the Query Operation Completed or not
			if ( !$Response )
			{
			  $msg = "Error: To Make New Group" ;
			  header('Location: ProMan_2.php?msg='.$msg) ;
			}
			else
			{
				$msg = "Group Successfully Created." ;
				header('Location: ProMan_2.php?msg='.$msg) ;
			}
}

?>

while($std = mysqli_fetch_assoc($q1_result))
							{

								

								echo "<tr>" ;
								$Batch = $std['batch_no'] ;
								$std_name = $std['std_name'] ;

								echo "<td> {$std_name} </td>" ;
								echo "<td> {$Batch} </td>" ;
								echo "<td> {$project} </td>";
								echo "<td> {$Supervisor} </td>";
								echo "<td> {$Advisor} </td>";


								echo "</tr>";

							}