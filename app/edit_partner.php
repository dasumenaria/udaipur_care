<?php 
include("auth.php");
include("header.php");
include("../config.php");
 include('function.php');
//include("mail.php");
$update_id=$_GET['ati_utf_id'];
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
$message="";
  
if(isset($_POST['submit'])){
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile_no=$_POST['mobile_no'];
	$address=$_POST['address'];
	$adhar_card_no=$_POST['adhar_card_no'];
	$company_logo=$_FILES['company_logo'];
	$update_id=$_POST['update_id'];
 
   $sql="update  `master_partner` set  `full_name`='$name',`email`='$email',`mobile_no`='$mobile_no',`address`='$address',
`adhar_card_no`='$adhar_card_no',`company_logo`='$company_logo' where `id` = '$update_id'";
  $message = "Partner update successfully.";
  $r=mysql_query($sql);
	//$ids=mysql_insert_id();
	$photo1="company_logo".$update_id.".jpg";
    move_uploaded_file($_FILES["photo"]["tmp_name"],"../images/company_partner/".$photo1);
	if($r)
	{
		$r=mysql_query("update master_partner set company_logo='$photo' where id='$update_id'");
 
	 }

	else
	{
		echo mysql_error();
		}
		
}
?>
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
     <!-- Content Header (Page header) -->
    <section class="content-header">
      	<h1>
		Edit Partner
		</h1>
     </section>
<?php 
	$ftc=mysql_query("select * from `master_partner` where `id` = '$update_id'"); 
		$ftc_data=mysql_fetch_array($ftc);
		$name=$ftc_data['full_name'];
		$email=$ftc_data['email'];
		$mobile_no=$ftc_data['mobile_no'];
		$address=$ftc_data['address'];
		$company_logo=$ftc_data['company_logo'];
		$adhar_card_no=$ftc_data['adhar_card_no'];
		
?>

    <!-- Main content -->
    <section class="content">
		<div class="box box-primary" >
        <form method="post"  id="contact-form" role="form" action="master_partner_view.php" enctype="multipart/form-data">
         <div class="box-body" style="margin-left:12px;">
		 </br>
		 <div class="row">
		 <div class="form-group col-md-6">
                  <label for="exampleInputUdCare_no">Full Name</label>
                  <div class="input-group">
                      <input type="text" name="name" class="form-control" id="exampleInputFullName" value="<?php echo $name; ?>" placeholder="Enter Your Full Name">
                      <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                      </div>
                  </div>
                </div>
				<input type="hidden" value="<?php echo $update_id;?>" name="update_id">
				<div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Email address</label>
                  <div class="input-group">
                         <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email;?>" placeholder="Enter email Address">
                      <div class="input-group-addon">
                      <i class="fa  fa-envelope-o"></i>
                      </div>
                  </div>
                </div>
				<div class="form-group col-md-6">
                  <label for="exampleInputmobile_no">Mobile No.</label>
                  <div class="input-group">
                         <input type="text" name="mobile_no" class="form-control allLetter"  value="<?php echo $mobile_no;?>" placeholder="Enter Your Mobile No.">
                      <div class="input-group-addon">
                      <i class="fa  fa-mobile-phone "></i>
                      </div>
                  </div>
                </div>
			<div class="col-md-6">		
				<div class="form-group">
                   <label for="exampleInputDob">Address</label>
                    <textarea name="address" class="form-control" ><?php echo $address; ?></textarea>
				</div>
			</div>
			 <div class="col-md-6">
			<div class="form-group">
                  <label for="exampleInputFile">Company Logo</label>
                  <input type="file" id="exampleInputFile" name="company_logo" value="<?php echo $company_logo;?>">
			</div>
		</div>
			<div class="col-md-6">		
				 <div class="form-group">
				  <label for="exampleInputAnyMedicalTreatment">Adhar Card No.</label>
				  <div class="input-group">
						<input name="adhar_card_no" type="text" class="form-control" placeholder="Enter Your Aadhar Card No" maxlength="16" minlength="16" value="<?php echo $adhar_card_no;?>" required="required">
						<div class="input-group-addon">
							  <i class="fa fa-barcode"></i>
						  </div>
					  </div>
				 </div>
			</div>
		 
             
 		</div>	
         <div class="box-footer" align="center">
          	<input name="submit" type="submit" class="btn btn-primary" id="submit" value="Register" >
          </div>	
     </div> 
		</div>	  
               </div>
            </form>
      </section>
    <!-- /.content -->
 
<?php include("footer.php"); ?>
