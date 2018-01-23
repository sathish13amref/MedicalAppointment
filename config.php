<?php
header("Cache-Control: private, must-revalidate, max-age=0");
  header("Pragma: no-cache");
	$con=mysql_connect("loalhost","root","");
	if(!$con)
	{
		die('could not connect:'.mysqli_error())
	}
	mysql_select_db('medical', $con);
?>