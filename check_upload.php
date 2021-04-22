<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="static/css/default.css" type="text/css"></link>

		<!-- I like this title as consuls are advisors. Furthermore its a contradiction cause consuls 
			 come in pairs as to prevent an absolute authority !-->
		<title> The sole consul | Verifying upload </title>
		<link rel="shortcut icon" type="image/png" href="static/images/apu_graduation.png"/>
	</head>
	<body>
		<?php require_once("includes/credentials.php") ?>
		<?php require_once("includes/navbar.php") ?>
		<?php require_once("includes/menu.php") ?>

		<div class="page">
			<div class="content">

				<?php
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					require_once("includes/functions.php");
					
					echo '<div class="error">';
					
					$connection = new mysqli($host, $user, $password, $database);
					if($connection === false)
						die("ERROR: Could not connect. " . mysql_connect_error() . "<br>");

					$query = "INSERT INTO post (author_id, title, path, date, genre, description) VALUES (";

					$query .= "1, ";
					
					// Title:
					$ftitle = $_POST["ftitle"];
					$query .= query_append_str($ftitle, "Title is required");

					// File:
					$ffile = $_FILES["ffile"]["name"];
					echo "file: " . $ffile;
					$query .= query_append_str("data/" . $ffile, "You must give a file");

					$query .= "CURDATE(), ";
					$query .= "'tech', ";
					
					// Description:
					$fdescription = $_POST['fdescription'];
					if(isset($fdescription))
						$query .= "'" . $fdescription . "'";
					else
						die("Description is required <br>");

					$query .= ");";

					echo $query . "<br>";

					// Physically upload the post, to the drive:
					upload_file("ffile");
					
					if($connection->query($query))
						echo "The query was succesfull";
					else
						echo "Error: " . "<br>" . $connection->error;
					
					echo "<br>";
					
					// Close connection
					$connection->close();
					
					echo "</div>";
				}
				?>
				
				<a href="upload.php">Back to upload page</a>
			</div>
		</div>
		
	</body>
</html>
