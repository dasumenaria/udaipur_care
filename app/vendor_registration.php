 <?php 
include("header.php");
include("../config.php");
//include("mail.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
  $message="";
  
if(isset($_POST['submit'])){
	 
	$full_name=$_POST['full_name'];
	$mobile_no=$_POST['mobile_no'];
	$email_id=$_POST['email_id'];
	$company_name=$_POST['company_name'];
	$company_reg_no=$_POST['company_reg_no'];
	$company_address=$_POST['company_address'];
	$company_service=$_POST['company_service'];
	$company_service_discription=$_POST['company_service_discription'];
	$company_sub_service=$_POST['company_sub_service'];
	$company_sub_service_discription=$_POST['company_sub_service_discription'];
	$discount=$_POST['discount'];
	$offer=$_POST['offer'];
	$service_price=$_POST['service_price'];
	   
	  
  
 
   $sql="insert into `vendor` set `full_name`='$full_name', `mobile_no`='$mobile_no',`email_id`='$email_id',`company_name`='$company_name',`company_reg_no`='$company_reg_no',`company_address`='$company_address',`company_service`='$company_service',`company_service_discription`='$company_service_discription',`company_sub_service`='$company_sub_service',`company_sub_service_discription`='$company_sub_service_discription',`discount`='$discount',`offer`='$offer',`service_price`='$service_price'";
 
  $r=mysql_query($sql);
 
 	$ids=mysql_insert_id();

	$photo="company_logo".$ids.".jpg";
	$photo1="company_mou_certificate".$ids.".jpg";


// move photo in  floder//
	 

	move_uploaded_file($_FILES["company_logo"]["tmp_name"],"vendor/".$photo);
	move_uploaded_file($_FILES["company_mou_certificate"]["tmp_name"],"vendor/".$photo);

	if($r)
	{
		$r=mysql_query("update vendor set `company_logo`='$photo',`company_mou_certificate`='$photo1' where id='$ids'");
 
	 }

	else
	{
		echo mysql_error();
		}
		
}
	
	
	

?>
 
 <div class="content-wrapper">

 <section class="content">
      <div class="row">
        <div class="col-md-2" >
          <?php include('menu.php');?> 

          
          <!-- /. box -->
           
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-10">
         <div class="box box-primary">
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
			   
				 
		<center>
		<h3>Vendor Registration Form</h3>
		<hr>
		 </center>
		
           <form method="post"  id="contact-form" role="form" enctype="multipart/form-data">
         <div class="box-body" style="margin-left:40px;margin-right:40px;">
		 </br>
		 <div class="row">
		 
		 <div class="col-md-6">
				<div class="form-group">
                  <label for="exampleInputFullName">Full Name</label>
                  <div class="input-group">
                  	<input type="text" name="full_name" class="form-control" id="exampleInputFullName" placeholder="Enter Your Full Name" required>
                    <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
                </div>
		</div>
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputmobile_no">Mobile No.</label>
                  <div class="input-group">
                  	<input type="text" name="mobile_no" class="form-control allLetter checkMobile"  maxlength="10" minlength="10" placeholder="Enter Your Mobile No." required>
                    <div class="input-group-addon">
                          <i class="fa fa-mobile"></i>
                      </div>
                  </div>
                </div>
		</div>		
		<div class="col-md-6">	
				<div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <div class="input-group">
                  	<input type="email" name="email_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email Address" >
                    <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
                </div>
		</div>
		 
		<div class="col-md-6">	
				<div class="form-group">
                  <label for="exampleInputEmail1">Company Name</label>
                  <div class="input-group">
                  	<input type="text" name="company_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Name" >
                    <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
                </div>
		</div>
		<div class="col-md-6">	
				<div class="form-group">
                  <label for="exampleInputEmail1">Company Registration No.</label>
                  <div class="input-group">
                  	<input type="text" name="company_reg_no" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Registration No." >
                    <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
                </div>
		</div>
		 		
		  
		 	
		<div class="col-md-6">
			<div class="form-group">
                  <label for="exampleInputFile">Company Logo</label>
                  <div class="input-group">
                  	<input type="file" class="form-control" id="exampleInputFile" name="company_logo">
                    <div class="input-group-addon">
                          <i class="fa fa-upload"></i>
                      </div>
                  </div>
 		     </div>
		</div>		
		<div class="col-md-6">		
             <div class="form-group">
              <label for="exampleInputAnyMedicalTreatment">Company Service</label>
              <div class="input-group">
              		<input name="company_service" type="text" class="form-control" id="name" placeholder=" Enter Company Service">
                    <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
             </div>
		</div>
		<div class="col-md-6">		
             <div class="form-group">
              <label for="exampleInputAnyMedicalTreatment">Sub Service</label>
              <div class="input-group">
              		<input name="company_sub_service" type="text" class="form-control" id="name" placeholder="Enter Company Sub Service">
                    <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
             </div>
		</div>
		<div class="col-md-6">		
			<div class="form-group">
				 <label for="exampleInputDob">Service Description</label>
				 <textarea name="company_service_discription" class="form-control"></textarea>
			</div>
		</div>
		 
		<div class="col-md-6">		
			<div class="form-group">
				 <label for="exampleInputDob">Sub Service Description</label>
				 <textarea name="company_sub_service_discription" class="form-control"></textarea>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
                  <label for="exampleInputFile">Company MOU Certificate</label>
                  <div class="input-group">
                  	<input type="file" class="form-control" id="exampleInputFile" name="company_mou_certificate">
                    <div class="input-group-addon">
                          <i class="fa fa-upload"></i>
                      </div>
                  </div>
 		     </div>
		</div>	
		<div class="col-md-6">		
			<div class="form-group">
				 <label for="exampleInputDob">Company Address</label>
				 <textarea name="company_address" class="form-control"></textarea>
			</div>
		</div>			
		
		 <div class="col-md-6">		
             <div class="form-group">
              <label for="exampleInputAnyMedicalTreatment">Service Price</label>
              <div class="input-group">
              		<input name="service_price" type="text" class="form-control" id="name" placeholder="Enter Service Price">
                    <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
             </div>
		</div>
		<div class="col-md-6">		
             <div class="form-group">
              <label for="exampleInputAnyMedicalTreatment">Discount On Service</label>
              <div class="input-group">
              		<input name="discount" type="text" class="form-control" id="name" placeholder="Enter How many Discount On Service">
                    <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
             </div>
		</div>
		<div class="col-md-6">		
             <div class="form-group">
              <label for="exampleInputAnyMedicalTreatment">Offer</label>
              <div class="input-group">
              		<input name="offer" type="text" class="form-control" id="name" placeholder="Enter Offer">
                    <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
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
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 </div>
 <?php 
include("footer.php");
  ?>