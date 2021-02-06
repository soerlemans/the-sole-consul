<?php
// General functions:
// Appends a string to an sql query
function query_append_str($t_value)
{
	$t_query .= "'" .$t_value . "', ";

	return $t_query;
}

?>
