<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="static/css/default.css" type="text/css"></link>
		<link rel="stylesheet" href="static/css/index.css" type="text/css"></link>

		<!-- I like this title as consuls are advisors. Furthermore its a contradiction cause consuls 
			 come in pairs as to prevent an absolute anuthority !-->
		<title>The sole consul | Home</title>
	</head>
	<body>
		<?php include('includes/credentials.php') ?>
		<?php include('includes/navbar.php') ?>
		<?php include('includes/menu.php') ?>

		<div class="page">
			<div class="content">
				<h1> Welcome to the sole consul </h1>
				
				<!-- Create a header for the website with some info -->
				<div class="header">
					<div class="header-item">
						<h2> What is this website?</h2>
						<p> This website is made in Web 1.0 style
							Meaning i have an excuse for not doing having to do, anything when my website is ugly.
							I mostly do stupid stuff on here and have fun with HTML/CSS.
						</p>
					</div>
					
					<div class="header-item">
						<h2> Buttons </h2>
						<p> Websites used to have something called buttons (basically a GIF, of a certain size).
							Here you go lots of buttons
						</p>
						<img src="static/images/gif_button_emacs_now.gif">
						<img src="static/images/button_linux_now.jpg">
					</div>
				</div>	
				
				<table class="post-table">
					<tr>
						<th> Title </th>
						<th> Date </th>
						<th> Genre </th>
					</tr>

					<?php

					$connection = new mysqli($host, $user, $password, $database);
					
					$query = "SELECT title, date, genre FROM post;";
					
					$result = $connection->query($query);

					while($row = $result->fetch_assoc())
					{
						echo '<tr>';
						echo '<td>' . $row["title"] . '</td>';
						echo '<td>' . $row["date"] . '</td>';
						echo '<td>' . $row["genre"] . '</td>';
						echo '</tr>';
					}

					$connection->close();
					?>
				</table>

				<?php include('includes/footer.php') ?>
			</div>
		</div>
		
	</body>
</html>
