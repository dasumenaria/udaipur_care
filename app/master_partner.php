<?php 
include("auth.php");
include("header.php");
include("../config.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000); 
if(isset($_POST['submit']))
{ 
	$full_name=$_POST['name'];
	$mobile_no=$_POST['mobileno'];
    $email=$_POST['email'];
	$address=$_POST['address'];
	$adhar_card_no=$_POST['adhar_card_no'];
	 

	$sql=("insert into `master_partner` set  `full_name`='$full_name',`email`='$email',`mobile_no`='$mobile_no',`address`='$address',`adhar_card_no`='$adhar_card_no'");
	$r=mysql_query($sql);
		$ids=mysql_insert_id();
		$photo="company_logo".$ids.".png";
		move_uploaded_file($_FILES["company_logo"]["tmp_name"],"../images/company_partner/".$photo);
		
		$r=mysql_query("update `master_partner` set company_logo='$photo' where id='$ids'");	
	
}

?>
<!-- bootstrap datepicker -->
<style>
.box.box-primary {
    border-top-color: #3c8dbc;
}
.box {
position: relative;
border-radius: 3px;
background: #ffffff;
border-top: 3px solid #d2d6de;
margin-bottom: 20px;
width: 100%;
box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
</style>
<!-- Main content -->
<section class="content">
	<div class="box box-primary" >
		<h3>&nbsp; Partner Form</h3>
		<form method="POST" role="form" enctype="multipart/form-data">
			<div class="box-body" style="margin-left:40px;margin-right:40px;">
			</br>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Full Name</label>
							<div class="input-group">
								<input type="text" name="name" onkeyup="Validatename(this.value);" id="name" class="form-control" placeholder="Enter Your Full Name" required>
								<div class="input-group-addon">
									<i class="fa fa-user"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">		
						<div class="form-group">
							<label >Mobile No.</label>
							<div class="input-group">
								<input type="text" name="mobileno" class="form-control" onchange="phonenumber(this.value);" id="mobileno" maxlength="10" minlength="10" placeholder="Enter Your Mobile No." required>
								<div class="input-group-addon">
									<i class="fa fa-mobile"></i>
								</div>
							</div>
						</div>
					</div>		
					<div class="col-md-6">	
						<div class="form-group">
							<label >Email address</label>
							<div class="input-group">
								<input type="email" class="form-control" onblur="ValidateEmail(this.value);" id="email" name="email" placeholder="Enter email Address" required >
								<div class="input-group-addon">
									  <i class="fa fa-envelope"></i>
								</div>
							</div>
						</div>
					</div>	
					<div class="col-md-6">		
						<div class="form-group">
							<label>Aadhar Card No.</label>
							<div class="input-group">
								<input name="adhar_card_no" class="form-control" type="text" placeholder="Enter Your Adhar Card No" maxlength="12" minlength="12" required>
								<div class="input-group-addon">
									<i class="fa fa-barcode"></i>
								</div>
							</div>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="form-group">
							<label>logo</label>
							<div class="input-group">
								<input type="file" class="form-control" name="company_logo" required>
								<div class="input-group-addon">
									<i class="fa fa-upload"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">		
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" class="form-control" required></textarea>
						</div>
					</div>
					<div class="col-md-12" align="center">		
						<div class="box-footer">
							<input name="submit" type="submit" id="submit_contact" class="btn btn-primary" value="Register" >  
						</div>
					</div>
				</div>		
			</div> 
		</form>
	</div>
</section>
<script src="js/jquery.js"></script>
<script>
$( document ).ready(function() {
	alert();
$('#submit_contact').on('click', function(){
		alert();
	var name=$('#name').val();
	var email=$('#email').val();
	var mobile_no=$('#mobileno').val();
	var message=$('#message').val();
 	if(name.length>1){
		if(email.length>1){
			if(mobile_no.length>=9){
				if(message.length>1){
					
					$('#msg').html(' <img src="images/loading.gif" height="28px" />  Please wait...');
					
					$.ajax({
					
						url: "../ajax_page.php?function_name=partner_submit&name="+name+"&email="+email+"&mobile_no="+mobile_no,
						type: "POST",
						success: function(data)
						{  
							$('#name').val('');
							$('#email').val('');
							$('#mobile_no').val('');
							$('#msg').html('Partner Added Successfully');
							
						}
					});
				}
				
			}
			else
			{
				$('#msg').html('Please provide valid mobile no');
			}
		}
		else
		{
			$('#msg').html('Please provide email');
		}
	}
	else
	{
		$('#msg').html('Please provide name');
	}
	
});	
});

function Validatename(name)  
{   
	var name1 = /^[a-zA-Z\s-, ]+$/;  
	if(name.match(name1))  
	{  
	return true;  
	}  
	else  
	{  
	$('#msg').html('Name must have alphabet characters only');
	$('#name').val('');
	return false;  
	}  
}  


function ValidateEmail(email)  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(email.match(mailformat))  
	{  
	return true;  
	}  
	else  
	{
	$('#msg').html('You have entered an invalid email address!');
	 $('#email').val('');
	return false;  
	}  
}  


function phonenumber(mobileno)  
{  
	var nofromat = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
	if(mobileno.match(nofromat))  
	{  
	return true;  
	}  
	else  
	{ 
		$('#msg').html('You have entered an invalid mobile no! at least 10 digit');
	 $('#mobileno').val('');
	return false;  
	}  
}
function adharnumber(adhar_card_no)  
{  
	var nofromat = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
	if(adhar_card_no.match(nofromat))  
	{  
	return true;  
	}  
	else  
	{ 
		$('#msg').html('You have entered an invalid mobile no! at least 10 digit');
	 $('#adhar_card_no').val('');
	return false;  
	}  
}


</script>
<?php include("footer.php"); ?>
