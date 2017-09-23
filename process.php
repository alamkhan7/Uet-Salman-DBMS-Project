<?php
	
	include 'read_xml_file.php' ;
	include 'add_record.php' ;

	$msg = "" ;


	if(isset($_POST['upload_student']))
	{
		//echo var_dump($_FILES['sfile']);
		$student_file = $_FILES['sfile']['name'] ;

		if (!empty($student_file) && $student_file==='student.xls')
		{
			if(!isset($_GET['msg']))
			{
				$record_array = read_xml_file($student_file) ;
				if (!$record_array==false)
					$msg = add_student($record_array,count($record_array)) ;
					header('Location: ./admin.php?std-msg='.$msg) ;
			}
			else
			{
				$msg =  $_GET['msg'];
				header('Location: ./admin.php?std-msg='.$msg) ;
			}

		}
		else
		{
			$msg =  "Error: Student File Not Found/Wrong File Selected!" ;
			header('Location: ./admin.php?std-msg='.$msg) ;
		}
	}
	else if(isset($_POST['upload_project']))
	{
		$project_file = $_FILES['pfile']['name'];

		if (!empty($project_file) && $project_file==='project.xls' )
		{
			if(!isset($_GET['msg']))
			{
				$record_array = read_xml_file($project_file) ;
				if (!$record_array==false)
					$msg = add_project($record_array,count($record_array)) ;
					header('Location: ./admin.php?pro-msg='.$msg) ;
			}
			else
			{
				$msg = $_GET['msg'];
				header('Location: ./admin.php?pro-msg='.$msg) ;
			}

		}
		else
		{
			$msg = "Error: Project File Not Found/Wrong File Selected!" ;
			header('Location: ./admin.php?pro-msg='.$msg) ;
		}

	}
	else if(isset($_POST['delete_project']))
	{
		$msg  = "Wait For Deletion";
		header('Location: ./admin.php?dlt-msg='.$msg) ;

	}
	else
	{
		header('Location: ./admin.php') ;
	}

	if(isset($_POST['submit']))
	{
		
		$member1 = $_POST['member1'] ;
		$member2 = $_POST['member2'] ;
		$member3 = $_POST['member3'] ;
		$supervisor = $_POST['supervisor'] ;
		$advisor = $_POST['advisor'] ;
		$project_id = $_POST['project'] ;

		$flag1 = 0 ;
		$flag2 = 0 ;
		$flag3 = 0 ;

		if (empty($member1))
			$flag1 = 1 ;
		if (empty($member2))
			$flag2 = 1 ;
		if (empty($member3))
			$flag3 = 1 ;

		if ($flag1 && $flag2 && $flag3 )
		{
			$msg = "Select atlest one student!" ;
			header('Location: ProMan_2.php?msg='.$msg) ;
		}

		if ($member1==$member2 || $member1==$member3 || $member2==$member3)
		{
			$msg = "Error: Same Student Selected In List!" ; 
			header('Location: ProMan_2.php?msg='.$msg) ;
		}

		if (empty($supervisor))
		{
			$msg = "Select SuperVisor!";
			header('Location: ProMan_2.php?msg='.$msg) ;
		}
		if (empty($advisor))
		{
			$msg = "Select Advisor!";
			header('Location: ProMan_2.php?msg='.$msg) ;
		}
		if (empty($project_id))
		{
			$msg = "Select Project!";
			header('Location: ProMan_2.php?msg='.$msg) ;
		}

		/*If all data is enetered correctyle*/

		add_project_group($member1,$member2,$member3,$project_id) ;

	}

?>