<link href="assets/css/bootstrap.css" rel="stylesheet">
<?php
$conn=mysqli_connect("localhost","root","","medical");
$date=$_GET["date"];
//echo $state;

if($date!="")
{
	$res=mysqli_query($conn,"select * from doctor where date=$date");
	
	echo '<select class="form-control" name="city">';
		while($row=mysqli_fetch_object($res))
		{
			//echo "<option>"; echo $row["cityname"]; echo "</option>";
			echo"<option value='$row->id'>$row->date</option>";
		}
	echo "<select>";
	
}
?>
<!------------------------ 
<script type="text/javascript">
			function change_state()
			{
				var xmlhttp=new XMLHttpRequest();
				xmlhttp.open("GET","ajax.php?state="+document.getElementById("stateid").value,false);
				xmlhttp.send(null);
				document.getElementById("city").innerHTML=xmlhttp.responseText;
				
			}
		</script>
		<form action="savestudent1.php" method="post">
			<input type="hidden" name="city" value="<? echo $row->id ?>">
		</form>
		--> 


	
