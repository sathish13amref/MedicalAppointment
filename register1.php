<html>
	<head>
		<title>Contact Page</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet">
	</head>
	<body><br>
		<div class="container">
		
		<h2 class="text-center">Student Registration</h2><br><br>
		<hr color="blue" size="2">
			<div class="row">
				<div class="col-sm-4">
					<ul class="list-group">
						<li class="list-group-item"><a href="contact.php">Add contact</a></li>
						<li class="list-group-item"><a href="city.php">Add City</a></li>
						<li class="list-group-item"><a href="state.php">Add state</a></li>
						<li class="list-group-item"><a href="addproduct.php">Add product</a></li>
						<li class="list-group-item"><a href="addcustomer.php">Add Customer</a></li>
							<li class="list-group-item"><a href="register1.php">Add Student</a></li>
						<li class="list-group-item"><a href="statecitylist.php">State Contact list</a></li>
						<li class="list-group-item"><a href="addblog.php">Add Blog</a></li>
					</ul>
				</div>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-2"></div>
						<div class="col-sm-8">
						<form action="savestudent1.php" method="POST">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label>Name</label>
									</div>
									<div class="col-sm-8">
										<input type="text" name="fname"
										class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label>Email</label>
									</div>
									<div class="col-sm-8">
										<input type="text" name="email"
										class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label>Mobile</label>
									</div>
									<div class="col-sm-8">
										<input type="text" name="mobile"
										class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label> Select State</label>
									</div>
									<div class="col-sm-8">
									<?php
										$conn=mysqli_connect("localhost","root","","medical");
										$sql="select * from  doctorlist";
									//$sql="select city.*,state.statename from city,state where city.stateid=state.id";
										$res=mysqli_query($conn,$sql);
									?>
									<select name="date" id="stateid" onchange="change_state()" class="form-control">
										<option value="">-- Choose State--</option>
									<?php
											while($row=mysqli_fetch_object($res))
											{
												echo"<option value='$row->id'>$row->statename</option>";
																							
											}
								    ?>
									</select>
										<br>
										</div>
									</div>
								</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label> Select City</label>
									</div>
									<div class="col-sm-8" id="city">
										
										
										
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label>Gender</label>
									</div>
									<div class="col-sm-8">
										<input type="radio" name="gender" value="male">Male
										<input type="radio" name="gender" value="female">Female
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label>Hobby</label>
									</div>
									<div class="col-sm-8">
										<input type="checkbox"value="singing" name="hobby[]">Reading
										<input type="checkbox"value="writing" name="hobby[]">Writing
										<input type="checkbox"value="singing" name="hobby[]">Singing
										<input type="checkbox"value="Dancing" name="hobby[]">Dancing
										
								</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-4">
										<label>Address</label>
									</div>	
									<div class="col-sm-8">
										<textarea name="address"
										class="form-control"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-12 text-center">
										<button type="submit" class="btn btn-primary">Save</button>
										<button type="reset" class="btn btn-danger">clear</button>
									</div>
								</div>
							</div>
						</form>
						</div>
						<div class="col-sm-2"></div>
					</div>
				
				</div>
			</div>
		</div>
				<script type="text/javascript">
			function change_state()
			{
				var xmlhttp=new XMLHttpRequest();
				xmlhttp.open("GET","ajax.php?date="+document.getElementById("stateid").value,false);
				xmlhttp.send(null);
				document.getElementById("city").innerHTML=xmlhttp.responseText;
				
			}
		</script>
		
	</body>
</html>