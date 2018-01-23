<?php
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'medical');
	define('DB_USER','root'); 
	define('DB_PASSWORD','');
	$con= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
//	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	
	if(isset($_POST['Name']))
	{
		$Name=$_POST['Name'];
		echo $Name;
	}
	$query = "INSERT INTO followup (Name) VALUES ('$Name')";
	$data = mysqli_query ($con,$query)or die(mysqli_error($con));
	if(!$data)
	{
		echo "success";
	}
		
?>
