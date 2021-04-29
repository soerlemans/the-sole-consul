<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<link rel="stylesheet" href="static/css/default.css" type="text/css"></link>

		<!-- I like this title as consuls are advisors. Furthermore its a contradiction cause consuls 
			 come in pairs as to prevent an absolute authority !-->
		<title> The sole consul | Upload </title>
		<link rel="shortcut icon" type="image/png" href="static/images/apu_graduation.png"/>
	</head>
	<body>
		
		<?php
		$current_file = __FILE__;
		require_once 'includes/navbar.php'; 		
		?>
		
		<div class="page">
			<div class="content">

				<form method="post" action="check_post.php" enctype="multipart/form-data">
					Name <br> <input type="text" name="post_title"> <br>
					Description:<br> <input type="text" name="post_description"> <br>
					Upload post: <br> <input type="file" name="post_file"> <br>
					<br>
					<input type="submit">
				</form>

				<br>
				
				<form method="post" action="check_resource.php" enctype="multipart/form-data">
					Url <br> <input type="text" name="website_url"> <br>
					Tag <br> <input type="text" name="website_tag"> <br>
					Priority: <br> <input type="number" name="website_priority" value="500"> <br>
					Description:<br> <input type="text" name="website_description"> <br>
					<br>
					<input type="submit">
				</form>
				
			</div>
		</div>
		
	</body>
</html>
