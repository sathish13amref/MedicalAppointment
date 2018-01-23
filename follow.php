<?php
//Include the database configuration file
include 'dbConfig.php';

//Fetch all the country data
$query = $db->query("SELECT * FROM doctorlist");

//Count total number of rows
$rowCount = $query->num_rows;
?>



<html>
<head><meta name = "viewport" content = "width = device-width, initial-scale = 1, 
         maximum-scale = 1, minimum-scale = 1, user-scalable = no, minimal-ui" />
      <meta name = "apple-mobile-web-app-capable" content = "yes" />
      <meta name = "apple-mobile-web-app-status-bar-style" content = "black" />
	  <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.min.css" />
      <link rel = "stylesheet" 
         href = "https://cdnjs.cloudflare.com/ajax/libs/framework7/1.4.2/css/framework7.ios.colors.min.css" />
</head>

<style>
#p01 {
    color: blue;
	margin-left:40px;
}
select {

  display: block;
  padding: 10px 70px 10px 13px !important; 
  max-width: 100%; height: auto !important; 
  border: 1px solid #e3e3e3; border-radius: 3px; 
  background: url("https://image.ibb.co/iMeAJv/selectbox_arrow.png") right center no-repeat;
  background-color: #fff; color: #444444;
  font-size: 12px;
  line-height: 16px !important;
  appearance: none;
  /* this is must */ -webkit-appearance: none; 
  -moz-appearance: none; } 

Read more at: https://www.proy.info/style-select-dropdown-using-css/
}

</style>

<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var doctorID = $(this).val();
		var Name= $(this).val();
        if(doctorID){
            $.ajax({
                type:'POST',
                url:'ajaxDa.php',
                data:'doctor_id='+doctorID,
			
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select doctor first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
         
        }
    });

});
</script>



<body>
<div class = "views">
         <div class = "view view-main">
            <div class = "pages">
                <div data-page = "home" class = "page navbar-fixed">
					<div class = "navbar">
						<div class = "navbar-inner">
                        <div class = "left"> </div>
                        <div class = "center">Follow Up</div>
                        <div class = "right"> </div>
                     </div>
					</div>
				<form id = "my-form" class = "list-block" method="post" action="followup.php" >
					<div class = "page-content">
						<ul>	
							<li>
								<div class = "item-content">
									<div class = "item-inner">
										<div class = "item-title label">Select doctors:
										</div>
										<div class = "item-input">
											<select id="country" name="Name"  >
												<option value="">Doctors</option>
												<?php
													if($rowCount > 0){
													while($row = $query->fetch_assoc()){ 
													echo '<option value="'.$row['doctor_id'].'">'.$row['Name'].'</option>';
												}
												}
												else
												{
													echo '<option value="">Country not available</option>';
												}
												?>
												
											</select>
										</div>
									</div>
								</div>
							</li>
							<li>
                <div class = "item-content">
					<div class = "item-inner">
                        <div class = "item-title label"></div>
                        <div class = "item-input">
                            <select id="state" name="name">
   
							</select>
                         </div>
                    </div>
                </div>
            </li> 
							

						<input type="submit" class = "button button-fill button-round color-red form-to-json" value="Submit">
					</div>
				</form>
			</div>
        </div>
    </div>
</div>
</body>
</html>