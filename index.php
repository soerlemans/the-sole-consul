<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="static/css/default.css" type="text/css"></link>
		<link rel="stylesheet" href="static/css/index.css" type="text/css"></link>

		<!-- I like this title as consuls are advisors. Furthermore its a contradiction cause consuls 
			 come in pairs as to prevent an absolute anuthority !-->
		<title>The sole consul | Home</title>
		<link rel="shortcut icon" type="image/png" href="static/images/apu_graduation.png"/>
	</head>
	<body>
		<?php require_once('includes/credentials.php') ?>
		<?php require_once('includes/navbar.php') ?>
		
		<?php
		$current_file = __FILE__;
		require_once('includes/menu.php')
		?>

		<div class="page">
			<div class="content">
				
				<h1> Welcome to the sole consul <img src="static/images/apu_graduation.png" style="width: 1em; height: 1em;"> </h1>
				
				<!-- Create a header for the website with some info -->
				<div class="two-column-container">
					<div class="two-column">
						<h2 id="introduction"> What is this website?</h2>
						<p> This website is made in Web 1.0 style
							Meaning i have an excuse for not having to do anything, when my website is ugly.
							I mostly do stupid stuff on here and have fun with HTML/CSS and even PHP. <small> shudder (PHP sucks so hard)</small>
						</p>
					</div>
					
					<div class="two-column">
						<h2 id="buttons"> Buttons </h2>
						<p> Websites used to have something called buttons (basically a GIF, of a certain size).
							Here you go lots of buttons
						</p>
						<img src="static/gifs/button_powered_by_debian.gif">
						<img src="static/gifs/button_emacs_now.gif">
						<img src="static/images/button_linux_now.jpg">
					</div>
				</div>
				
				<h2 id="posts"> Posts </h2>
				<table class="post-table">
					<tr>
						<th> Title </th>
						<th> Genre </th>
						<th> Date </th>
					</tr>

					<?php

					$connection = new mysqli($host, $user, $password, $database);
					if($connection === false)
						die("ERROR: Could not connect. " . mysql_connect_error() . "<br>");
					
					$query = "SELECT title, path, date, genre FROM post;";
					
					$result = $connection->query($query);

					// Create a alternating color pattern
					$flip = false;
					
					while($row = $result->fetch_assoc())
					{
						if($flip)
							echo '<tr style="background-color: #404040;">';
						else
							echo '<tr>';

						// Place the content for the rows
						echo '<td> <a href="' . $row["path"] . '" class="post-link">' . $row["title"] . '</a> </td>';
						echo '<td>' . $row["genre"] . '</td>';
						echo '<td>' . $row["date"]  . '</td>';
						
						echo '</tr>';

						$flip = !$flip;
					}

					$connection->close();
					?>
				</table>

				<?php include_once('includes/content.php') ?>

				<?php require_once('includes/footer.php') ?>
			</div>
		</div>
		
	</body>
</html>
