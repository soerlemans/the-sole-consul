<link rel="stylesheet" href="static/css/menu.css">
<div class="menu">
	<ul>
		<?php
		// It is required that the file that includes this has the currentfile var set to __FILE__
		if (!isset($current_file))
			echo "Unknown file included me";
		
		$regexp = "/<h2.*>.*<\/h2>/";
		if(preg_match_all($regexp, file_get_contents($current_file), $matches))
			foreach($matches[0] as $match)
		{
			echo "<li> <a href='#";

			// For this to work an id must be set
			preg_match_all('/id="[a-z]*"/', $match, $ids);
			
			$stripped_front = preg_replace('/id="/', "", $ids[0][0]);
			$stripped = preg_replace('/"/', "", $stripped_front);
			echo $stripped;
			
			echo "'>";
			
			echo preg_replace("/<\/?h2[^>]*>/", "", $match);

			echo "</a> </li>";
		}
		?>
	</ul>
</div>


