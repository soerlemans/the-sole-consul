<link rel="stylesheet" href="static/css/navbar.css">
<div class="navbar">
	<?php
	// It is required that the file that includes this has the currentfile var set to __FILE__
	if (!isset($current_file))
		die("Unknown file included me");
	
	$files = array("index.php", "resources.php", "contact.php", "about.php");

	foreach($files as $file)
	{
		echo '<a href="' . $file . '"';
		if($file == basename($current_file))
			echo 'class="active"';
		echo ">";

		$name = ucwords(basename($file, '.php'));
		if($name == "Index")
			echo "Home";
		else
			echo $name;
		
		echo "</a>";
	}

	?>
</div>
