<?php
	$conn = mysql_connect('localhost', 'root', '121193');
	
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("sankalp", $conn);
	?>