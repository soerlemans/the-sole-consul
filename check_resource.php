<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="static/css/default.css" type="text/css"></link>

		<!-- I like this title as consuls are advisors. Furthermore its a contradiction cause consuls 
			 come in pairs as to prevent an absolute authority !-->
		<title> The sole consul | Verifying website addition </title>
		<link rel="shortcut icon" type="image/png" href="static/images/apu_graduation.png"/>
	</head>
	<body>

		<?php
		$current_file = __FILE__;
		require_once 'includes/credentials.php';
		require_once 'includes/navbar.php';
		?>

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
					$post_title = $_POST["website_url"];
					$query .= query_append_str($post_title, "URL is required");

					// Description:
					$post_description = $_POST["website_description"];
					if(isset($post_description))
						$query .= "'" . $post_description . "'";
					else
						die("Description is required <br>");

					$query .= ");";

					echo $query . "<br>";

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
