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
		<?php include('includes/navbar.php') ?>
		
		<div class="page">
			<div class="content">

				<form method="post" action="check_upload.php" enctype="multipart/form-data">
					Name <br> <input type="text" name="ftitle" value="" > <br>
					Description:<br> <input type="text" name="fdescription"> <br>
					Upload post: <br> <input type="file" name="ffile"> <br>
					<br>
					<input type="submit">
				</form>
			</div>
		</div>
		
	</body>
</html>
