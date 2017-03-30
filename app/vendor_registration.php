<?php
include('auth.php'); 
include("../config.php");
include("header.php");
  
 
//--	LEAD OPEN
$leadNew="SELECT `id` from `booking` where `master_status` = '0'";
$Newlead=mysql_query($leadNew);
$lead_new=mysql_num_rows($Newlead);
//--	LEAD OPEN
$leadtransfer="SELECT `id` from `booking` where  `master_status` = '1'";
$teanlead=mysql_query($leadtransfer);
$lead_transfer=mysql_num_rows($teanlead);
//--	LEAD OPEN
$leadreject="SELECT `id` from `booking` where  `master_status` = '2'";
$Openreject=mysql_query($leadreject);
$lead_reject=mysql_num_rows($Openreject);
//--	LEAD OPEN
$leadconmpleted="SELECT `id` from `booking` where  `master_status` = '3'";
$donelead=mysql_query($leadconmpleted);
$lead_complete=mysql_num_rows($donelead);
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
                  	<input type="text" name="name" class="form-control" id="exampleInputFullName" placeholder="Enter Your Full Name" required>
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
                  	<input type="email" name="email_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email Address" >
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
                  	<input type="email" name="email_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email Address" >
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
                  	<input type="file" class="form-control" id="exampleInputFile" name="identity_proof">
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
              		<input name="other_info" type="text" class="form-control" id="name" placeholder="Daily Routine problem you face">
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
              		<input name="other_info" type="text" class="form-control" id="name" placeholder="Daily Routine problem you face">
                    <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
             </div>
		</div>
		<div class="col-md-6">		
			<div class="form-group">
				 <label for="exampleInputDob">Service Description</label>
				 <textarea name="address" class="form-control"></textarea>
			</div>
		</div>
		 
		<div class="col-md-6">		
			<div class="form-group">
				 <label for="exampleInputDob">Sub Service Description</label>
				 <textarea name="address" class="form-control"></textarea>
			</div>
		</div>
		<div class="col-md-6">		
			<div class="form-group">
				 <label for="exampleInputDob">Company Address</label>
				 <textarea name="address" class="form-control"></textarea>
			</div>
		</div>			
		
		 <div class="col-md-6">		
             <div class="form-group">
              <label for="exampleInputAnyMedicalTreatment">Service Price</label>
              <div class="input-group">
              		<input name="other_info" type="text" class="form-control" id="name" placeholder="Daily Routine problem you face">
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
              		<input name="other_info" type="text" class="form-control" id="name" placeholder="Daily Routine problem you face">
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
              		<input name="other_info" type="text" class="form-control" id="name" placeholder="Daily Routine problem you face">
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