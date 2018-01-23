<?php
include_once('dbConfig.php');
if(isset($_POST['services']))

{
	$services=$_POST['services'];
	
}
if(isset($_POST['Name']))
{
	$doctor=$_POST['Name'];
	
}
if(isset($_POST['date']))
{
	$date=$_POST['date'];
	
}
$status=1;

$query = $db->query("SELECT * FROM doctorlist WHERE doctor_id='$doctor'");
$rowCount = $query->num_rows;
    if($rowCount >0){
        while($row = $query->fetch_assoc()){ 

           // echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';
		   
		   $Name=$row['Name'];
		   echo "succesfull";
		  
        }
    } 
	
	$query = $db->query("INSERT INTO doctordisplay (services,Name,date,status) VALUES ('$services','$Name','$date','$status')"); 
	
    ?>