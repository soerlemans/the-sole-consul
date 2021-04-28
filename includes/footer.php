<link rel="stylesheet" href="static/css/footer.css" type="text/css"></link>
<div class="footer">
	<br>
	<footer>
		&copy
		<?php
		$start_year = 2021;
		$current_year = date("Y");
		echo $start_year;
		if($start_year != $current_year)
			echo "-" . $current_year;
		?> Me, Inc All rights reserved <br>
		<br>
		This is a footer! </footer>
</div>
