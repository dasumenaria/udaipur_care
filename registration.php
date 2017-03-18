<?php 
include("header.php");
include("config.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000); 
$message="";
  
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$mobile_no=$_POST['mobile_no'];
	$dob1=$_POST['dob'];
	$dob=date('Y-m-d', strtotime($dob1));
	$age=$_POST['age'];
	$email_id=$_POST['email_id'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$other_info=$_POST['other_info'];
	$to=$_POST['email_id'];
	$from='lakshitlohar7492@gmail.com';    
    $from_name='Udaipur Care';    
    $subject='abcd';
    $body='Your Registration is Successfully';    
	  if(!empty($to))
    {
/*smtpmailer($to, $from, $from_name, $subject, $body); */
     }
   $sql="insert into `register` set  `name`='$name',`age`='$age',`email_id`='$email_id',`dob`='$dob',`mobile_no`='$mobile_no',`gender`='$gender',`address`='$address',`other_info`='$other_info'";
  $message = "Registration Add Successfully.";
  $r=mysql_query($sql);
 	$ids=mysql_insert_id();

	$photo="identity_proof".$ids.".jpg";


// move photo in  floder//
	 

	move_uploaded_file($_FILES["identity_proof"]["tmp_name"],"identity/".$photo);

	if($r)
	{
		$r=mysql_query("update register set identity_proof='$photo' where id='$ids'");
 
	 }

	else
	{
		echo mysql_error();
	}
		
}
  ?>
<?php 
function createRandomPassword() { 

	$chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ023456789@#$^*?"; 
	srand((double)microtime()*1000000); 
	srand();
	$i = 0; 
	$pass = '' ;			
	while ($i <= 10) { 
		$num = rand() % 73; 
		$tmp = substr($chars, $num, 1); 
		$pass = $pass . $tmp; 
		$i++; 
	}			
	return $pass;			
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
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
		Registration 
		</h1>
     </section>

    <!-- Main content -->
    <section class="content">
	
		<div class="box box-primary" >
           <form method="post"  id="contact-form" role="form" enctype="multipart/form-data">
         <div class="box-body" style="margin-left:40px;margin-right:40px;">
		 </br>
		 <div class="row">
		 <div class="col-md-6">
				<div class="form-group">
                  <label for="exampleInputFullName">Full Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputFullName" placeholder="Enter Your Full Name">
                </div>
		</div>
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputmobile_no">Mobile No.</label>
                  <input type="text" name="mobile_no" class="form-control" id="exampleInputmobile_no" placeholder="Enter Your Mobile No.">
                </div>
		</div>		
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputDob">Date Of Birth</label>
                  <input type="date" name="dob" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Date Of Birth">
                </div>
		</div>
		<div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputage">Age</label>
                  <input type="text" name="age" class="form-control" id="exampleInputAge" placeholder="Enter Your Age">
                </div>
		</div>
		 
		<div class="col-md-6">	
				<div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email_id" class="form-control" id="exampleInputEmail1" placeholder="Enter email Address">
                </div>
		</div>	
		 <div class="col-md-6">		
			<div class="form-group">
			</br> 
				  <label for="exampleInputDob">Gender &nbsp;</label>
					<input type="radio"  name="gender" class="minimal" checked> &nbsp; Male 
					<input type="radio"   name="gender" class="minimal"> &nbsp; Female
			</div>
		</div>
		<div class="col-md-12">		
			<div class="form-group">
			</br> 
				  <label for="exampleInputDob">Address</label>
					<textarea name="address" class="form-control" >
					</textarea>
			</div>
		</div>	
		<div class="col-md-6">
			<div class="form-group">
                  <label for="exampleInputFile">Identity proof like : Aadhar card / Pan card /Driving Licence. etc</label>
                  <input type="file" class="form-control" id="exampleInputFile" name="identity_proof">
			</div>
		</div>		
		
		 <div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputAnyMedicalTreatment">Other Details (if any):</label>
				 <input name="other_info" type="text" class="form-control" id="name" required="required" placeholder="Daily Routine problem you face">
				 </div>
		</div>
		 <div class="col-md-12">		
		 <div class="box-footer" style="float:right">
			  <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Register" >  
                
              </div>
		</div>
		  
		  
		</div>		
                
                
              </div> 
		</div>	  
              <!-- /.box-body -->
		</form>
          </div>
           
 
 
    </section>
    <!-- /.content -->
  </div>		 

<?php include("footer.php"); ?>