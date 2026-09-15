<?php
include_once("../inc-admin-global.php");

if(isset($_POST) && !empty($_POST)) {
	
	$name = (isset($_POST['name'])) ? mysqli_real_escape_string($connection, $_POST['name']) : '';
	$email = (isset($_POST['email'])) ? mysqli_real_escape_string($connection, $_POST['email']) : '';
	$phone = (isset($_POST['phone'])) ? mysqli_real_escape_string($connection, $_POST['phone']) : '';

	$data = array();
	$updatedvalues = array();

	foreach( $_POST as $stuff => $val ) {
	    /* if( is_array( $stuff ) ) {
	         foreach( $stuff as $thing) {
	             echo $thing;
	         }
	     } else {
	         echo $stuff;
	         echo $val;
	     } */
	    $data[$stuff] = $val;

	    $stuff = htmlentities($stuff);
	    // if(!get_magic_quotes_gpc()) {
		//     $stuff = addslashes($stuff);
		// } 
	    $sql = "UPDATE settings SET settings_value = '".$val."' where settings_key = '".str_replace("'", "\'", $stuff)."'";
	    $connection->query($sql);
		array_push($updatedvalues, $sql);
	}

	echo json_encode(array("statusCode"=>200, "sql"=>$updatedvalues, "data"=>$data));

	/*if($connection->query($sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201, "sql"=>$sql));
	}*/

	generatelogs("leads", $_POST, $localpath);

	generatelogs("leads", $data, $localpath);
}