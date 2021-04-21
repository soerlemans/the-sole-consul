<?php

// THIS FUCKING BREAKS THE COOODEE WHY THE FUCK?!!?
//include_once('credentials.php')

// General functions:
// Database functionality:
/*function connect_db()
{
	$connection = new mysqli($host, $user, $password, $database);
	
	if($connection === false)
		die("ERROR: Could not connect. " . mysql_connect_error() . "<br>");

	return $connection;
}*/

function query_db()
{
	
}

function close_db()
{
	
}

// Appends a string to an sql query
function query_append_str($t_value, $t_msg)
{
	$t_query = "";
	if(isset($t_value))
		$t_query .= "'" .$t_value . "', ";
	else
		die($t_msg . "<br>");
	
	return $t_query;
}

// Upload a post
function upload_post($t_name)
{
	// This function doesnt work so find out why
	$target_dir = "../data";
	$target_file = $target_dir . basename($_FILES[$t_name]["name"]);

	if(move_uploaded_file($_FILES[$t_name]["tmp_name"], $target_file)) 
		echo "The file ". htmlspecialchars( basename( $_FILES[$t_name]["name"])) . " has been uploaded. <br>";
	else
		echo "Sorry, there was an error uploading your file: " . htmlspecialchars( basename( $_FILES[$t_name]["name"])) . " <br>";
}
?>
