<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="static/css/default.css" type="text/css"></link>

		<!-- I like this title as consuls are advisors. Furthermore its a contradiction cause consuls 
			 come in pairs as to prevent an absolute authority !-->
		<title>The sole consul | Home</title>
	</head>
	<body>
		<?php include('includes/navbar.php') ?>
		
		<div class="page">
			<div class="content">

				<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					Name <br> <input type="text" name="ftitle" value="" > <br>
					Description:<br> <input type="text" name="fdescription"> <br>
					File itself <br> <input type="file" name="ffile"> <br>
					<br>
					<input type="submit">
				</form>

				<?php
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					include('includes/functions.php');
					
					echo '<div class="error">';
					
					$link = mysqli_connect("localhost", "root", "arrows1290");
					if($link === false){
						die("ERROR: Could not connect. " . mysqli_connect_error());
					}

					$query = "INSERT INTO post (author_id, title, path, date, genre, description) VALUES (";

					$query .= "1, ";
					
					// Title:
					$ftitle = $_POST['ftitle'];
					if(isset($ftitle))
					{
						$query .= query_append_str($ftitle);
					}else{
						die("Title is required");
					}

					// File:
					$ffile = $_POST['ffile'];
					if(isset($ffile))
					{
						$query .= query_append_str("posts/" . $ffile);
					}else{
						die("You must give a file");
					}

					$query .= "CURDATE(), ";
					$query .= "'tech', ";

					// Description:
					$fdescription = $_POST['fdescription'];
					if(isset($fdescription))
					{
						$query .= "'" . $fdescription . "'";
					}else{
						die("Description is required");
					}
					
					$query .= ")";
					echo $query;

					if(mysql_query($link, $query)) {
						echo "<br>New record created successfully";
					} else {
						echo "<br>Error: " . "<br>" . $link->error;
					}
				
					// Close connection
					mysql_close($link);
					
					echo '</div>';
				}
				?>
			</div>
		</div>
		
	</body>
</html>
