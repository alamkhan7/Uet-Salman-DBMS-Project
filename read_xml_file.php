<?php
	
	/* Reading Excel File */

	include 'excel_reader.php';       // include the class


	function read_xml_file($file_Location)
	{
		$record_array = [] ;
		if (!empty($file_Location))
		{
			$xml_file = new PhpExcelReader;      // creates object instance of the class
			@$xml_file -> read($file_Location) ;	 // reads and stores the excel file data
		}
		else 
		{
			$msg = "Error: File Not Found!" ;
			header('Location: ./process.php?msg='.$msg) ;	
		}

		$record_array = get_xml_data($xml_file->sheets) ;	// read data from file
		
		if (!empty($record_array))
			return $record_array ;
		else
		{
			$msg = "Error: No Record Found In File" ;
			header('Location: ./process.php?msg='.$msg) ;
		}
	}

	function get_xml_data($sheet) 
	{
		$record_array = [] ;
		//echo $sheet[0]['numRows'];
		$x = 1;
		
		//$record_array['R'.$x.''] = $sheet[0]['cells'][1][$x] ;
		
		while($x <= $sheet[0]['numRows']-1)
		{

			$j=1 ;
			while ($j <= $sheet[0]['numCols']) 
			{
				@$record_array[$x][$j] = $sheet[0]['cells'][$x+1][$j] ;

				$j++;	
			}

			$x++;
		}
		
		// echo "<pre>";
		// echo var_dump($record_array);
		// echo "</pre>";
		// echo count($record_array);

		return $record_array ;
	}

?>