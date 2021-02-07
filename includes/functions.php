<?php
// General functions:
// Database functionality:
function create_db()
{
	
}

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
	{
		$t_query .= "'" .$t_value . "', ";
	}else{
		die($t_msg . "<br>");
	}

	return $t_query;
}

// Upload a post
function upload_post($t_name)
{
	$target_dir = "static/posts/";
	$target_file = $target_dir . basename($_FILES[$t_name]["name"]);
	
	if(move_uploaded_file($t_file[$t_name], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES[$t_name]["name"])) . " has been uploaded. <br>";
	}else{
		echo "Sorry, there was an error uploading your file. <br>";
	}
}

?>
