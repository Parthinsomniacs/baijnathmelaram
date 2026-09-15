<?php

	require_once ("../inc-admin-global.php");
	if(!$_SESSION['username'])
	{
		header("Location:".$siteurl);
	}

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i <10; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
	$date = date('d-m-Y');
	//header to give the order to the browser
	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment;filename='.$exportslug.'-'.$randomString.'-'.$date.'.csv');
	$query = "SELECT * FROM ".$tablename1;
	$select_table=mysqli_query($connection, $query);


  	$output = fopen("php://output", "w");  
  	
  	$select_table=mysqli_query($connection, $query);

  	$rows = mysqli_fetch_assoc($select_table);
  	if ($rows)
	{
		fputcsv($output, array_keys($rows));
	}

	$select_table=mysqli_query($connection, $query);
  	
  	while($rows = mysqli_fetch_assoc($select_table))  
  	{  
    	fputcsv($output, $rows);  
  	}  
  	fclose($output);



	/*if($select_table){

		$rows = mysqli_fetch_assoc($select_table);
		if ($rows)
		{
			getcsv(array_keys($rows));
		}
		while($rows)
		{
			getcsv($rows);
			$rows = mysqli_fetch_assoc($select_table);
		}
		// get total number of fields present in the database
		function getcsv($no_of_field_names)
		{
			$separate = '';
			// do the action for all field names as field name
			foreach ($no_of_field_names as $field_name)
			{
				$field_name = '"' . $field_name . '"';
				if (preg_match('/\\r|\\n|,|"/', $field_name))
				{
					// $field_name = '' . str_replace('', $field_name) . '';
				}
				echo $separate . $field_name;
				//separate with the comma
				$separate = ',';
			}
			//make new row and line
			echo "\r\n";
		}
	}*/
?>