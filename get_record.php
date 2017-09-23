<?php
	
	function show_student_list()
	{
		include 'connection.php' ;

		$msg = "" ;

		$query = "CALL list_of_student()";

		if ( $query_result = mysqli_query($conn,$query) )
		{
			if ($query_num = mysqli_num_rows($query_result) > 0 )
			{
				return $query_result ;
			}
			else
			{
				echo "Sorry No Record Found!";
			}
			
		}
		else
		{
			echo "Error: To Getting Student Resource!";
		}

	}

	function show_project_list()
	{
		include 'connection.php' ;

		$msg = "" ;

		$query = "CALL list_of_project()";

		if ( $query_result = mysqli_query($conn,$query) )
		{
			if ($query_num = mysqli_num_rows($query_result) > 0 )
			{
				return $query_result ;
			}
			else
			{
				echo "Sorry No Record Found!";
			}
			
		}
		else
		{
			echo "Error: To Getting Student Resource!";
		}

	}

?>