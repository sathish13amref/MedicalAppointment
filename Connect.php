<?php
header("Cache-Control: private, must-revalidate, max-age=0");
  header("Pragma: no-cache");
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'medical');
	define('DB_USER','root'); 
	define('DB_PASSWORD','');
	$con= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error());
//	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	
		$Name = $_POST['Name']; 
		$age = $_POST['age'];
		$sex= $_POST['sex'];
		$email=$_POST['email'];
		$Phone = $_POST['Phone'];
	    $query = "INSERT INTO new_existing_patient (Name,age,sex,email,Phone) VALUES ('$Name','$age','$sex','$email','$Phone')"; 
		$data = mysqli_query ($con,$query)or die(mysqli_error());
	/*	if($data)
		{
			echo "YOUR REGISTRATION IS COMPLETED..."; 
		}
*/
include "index.html";
?>
