<?php 
include("auth.php");
include("header.php");
include("../config.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000); 
$message="";
$image_path="";
 
if(isset($_POST['submit']))
{ 
	$full_name=$_POST['full_name'];
	$mobile_no=$_POST['mobile_no'];
    $email=$_POST['email'];
	$address=$_POST['address'];
	$logo=$_POST['logo'];
	$aadhar_card_no=$_POST['aadhar_card_no'];
		echo "insert into `partner` set  `full_name`='$full_name',`email`='$email',`mobile_no`='$mobile_no',`logo`='$logo',`address`='$address',`aadhar_card_no`='$aadhar_card_no'"; exit;
		$sql="insert into `partner` set  `full_name`='$full_name',`email`='$email',`mobile_no`='$mobile_no',`logo`='$logo',`address`='$address',`aadhar_card_no`='$aadhar_card_no'";
		 
		$r=mysql_query($sql);
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
		<form method="post"  id="contact-form" role="form" enctype="multipart/form-data">
			<div class="box-body" style="margin-left:40px;margin-right:40px;">
			</br>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Full Name</label>
							<div class="input-group">
								<input type="text" name="full_name" class="form-control" placeholder="Enter Your Full Name" required>
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
								<input type="text" name="mobile_no" class="form-control" maxlength="10" minlength="10" placeholder="Enter Your Mobile No." required>
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
								<input type="email" class="form-control" name="email" placeholder="Enter email Address" >
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
								<input name="aadhar_card_no" class="form-control" type="text" placeholder="Enter Your Aadhar Card No" maxlength="12" minlength="12" >
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
								<input type="file" class="form-control" name="logo">
								<div class="input-group-addon">
									<i class="fa fa-upload"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">		
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" class="form-control"></textarea>
						</div>
					</div>
					<div class="col-md-12" align="center">		
						<div class="box-footer">
							<input name="submit" type="submit" class="btn btn-primary" id="submit" value="Register" >  
						</div>
					</div>
				</div>		
			</div> 
		</form>
	</div>
</section>
<?php include("footer.php"); ?>
