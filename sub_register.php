<?php 
	include("header.php");
	include("database.php");
	include("mail.php");
 date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
@$session_id=$_SESSION['id']; 
  $message="";
  
if(isset($_POST['submit'])){
	 
	$name=$_POST['name'];
	$age=$_POST['age'];
	$landline_no=$_POST['landline_no'];
	$email_id=$_POST['email_id'];
	$dob1=$_POST['dob'];
	$dob=date('Y-m-d', strtotime($dob1));
	$mobile_no=$_POST['mobile_no'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$landmark=$_POST['landmark'];
	$pincode_no=$_POST['pincode_no'];
	$emergency_contact_name=$_POST['emergency_contact_name'];
	$emergency_contact_no=$_POST['emergency_contact_no'];
	$hobbies=$_POST['hobbies'];
	$any_medical_treatment=$_POST['any_medical_treatment'];
	$area_of_specialization=$_POST['area_of_specialization'];
	$children=$_POST['children'];
	$remark=$_POST['remark'];
	//$preferance_of_service1=$_POST['preferance_of_service'];
	//$preferance_of_service=implode(',',$preferance_of_service1);
	$spouse_name=$_POST['spouse_name'];
	$spouse_dob1=$_POST['spouse_dob'];
	$spouse_dob=date('Y-m-d', strtotime($spouse_dob1));
	$date_of_anniversary1=$_POST['date_of_anniversary'];
	$date_of_anniversary=date('Y-m-d', strtotime($date_of_anniversary1));
	//$routine_problem=$_POST['routine_problem'];
	$other_info=$_POST['other_info'];
	//$exact_timestamp=date('Y-m-d H:i:s');
    //$curnt_date=date("Y-m-d");
     $to=$_POST['email_id'];
    $from='lakshitlohar7492@gmail.com';    
    $from_name='Udaipur Care';    
    $subject='abcd';
    $body='Your Registration is Successfully';    
	  if(!empty($to))
    {
/*smtpmailer($to, $from, $from_name, $subject, $body); */
     }
 
   $sql="insert into `register` set  `name`='$name',`age`='$age',`landline_no`='$landline_no',`email_id`='$email_id',`dob`='$dob',`mobile_no`='$mobile_no',`gender`='$gender',`address`='$address',
`landmark`='$landmark',`pincode_no`='$pincode_no',`emergency_contact_name`='$emergency_contact_name',`emergency_contact_no`='$emergency_contact_no',`hobbies`='$hobbies',`any_medical_treatment`='$any_medical_treatment',
`area_of_specialization`='$area_of_specialization',`children`='$children',`remark`='$remark',`spouse_name`='$spouse_name',`spouse_dob`='$spouse_dob',
`date_of_anniversary`='$date_of_anniversary',`other_info`='$other_info',`admin_id`='$session_id'";
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
           <form method="post"  id="contact-form" role="form">
         <div class="box-body" style="margin-left:12px;">
		 </br>
		 <div class="row">
		 <div class="col-md-12">
				<div class="form-group">
                  <label for="exampleInputFullName">Full Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputFullName" placeholder="Enter Your Full Name">
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
                  <label for="exampleInputLandlineNo">Landline No.</label>
                  <input type="landline_no"name="landline_no" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Landline No">
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
                  <label for="exampleInputDob">Date Of Birth</label>
                  <input type="date" name="dob" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Date Of Birth">
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
			</br> 
				  <label for="exampleInputDob">Gender &nbsp;</label>
					<input type="radio" name="gender" class="minimal" checked> &nbsp; Male 
					<input type="radio" name="gender" class="minimal"> &nbsp; Female
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
                  <label for="exampleInputmobile_no">LandMark</label>
                  <input type="text" name="landmark" class="form-control" id="exampleInputmobile_no" placeholder="Enter Your Mobile No.">
                </div>
		</div>
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputPinCodeNo">Pin code No.</label>
                  <input type="text" name="pincode_no" class="form-control" id="exampleInputpincode_no" placeholder="Enter Your Pin Code No">
                </div>
		</div>
		
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputemergency_contact_no">Emergency Contact No</label>
                  <input type="text" name="emergency_contact_no" class="form-control" id="exampleInputemergencycontactno" placeholder="Enter Your Emergency Contact No">
                </div>
		</div>
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputemergency_contact_name">Emergency Contact Name</label>
                  <input type="text" name="emergency_contact_name" class="form-control" id="exampleInputemergency_contact_name" placeholder="Enter Your Emergency Contact Name">
                </div>
		</div>
		
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputHobbies">Hobbies</label>
                  <input name="hobbies" type="text" class="form-control" placeholder="Hobbies">
                </div>
		</div>
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputAnyMedicalTreatment">Any Medical Treatment</label>
				  <input name="any_medical_treatment" type="text" class="form-control" id="name" required="required" placeholder="Any Medical Treatment">
              
                </div>
		</div>
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputAnyMedicalTreatment">Area of Specialization</label>
				<input name="area_of_specialization" type="text" class="form-control" id="name" required="required" placeholder="Area of Specialization">
              
                </div>
		</div>
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputAnyMedicalTreatment">How many children do you have ?</label>
				<input name="children" type="text" class="form-control" id="name" required="required" placeholder="How many children do you have ?">
				 </div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
                  <label for="exampleInputFile">Identity proof like : Aadhar card / Pan card /Driving Licence. etc</label>
                  <input type="file" id="exampleInputFile" name="">
			</div>
		</div>		
		 
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputAnyMedicalTreatment">Spouse Name</label>
				 <input name="spouse_name" type="text" class="form-control" id="name" required="required" placeholder="Spouse Name">
                </div>
		</div>
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputAnyMedicalTreatment">Spouse Date of Birth</label>
				 <input class="form-control input-small date-picker"   value="" placeholder="Date of Birth" type="text" data-date-format="dd-mm-yyyy" type="text" name="spouse_dob"> 
                </div>
		</div>
		<div class="col-md-6">		
                <div class="form-group">
                  <label for="exampleInputAnyMedicalTreatment">Date of Anniversary</label>
				 <input class="form-control input-small date-picker"   value="" placeholder="Date of Anniversary" type="text" 
                                            data-date-format="dd-mm-yyyy" type="text" name="date_of_anniversary">
                </div>
		</div>
		
		<div class="col-md-12">		
                <div class="form-group">
                  <label for="exampleInputAnyMedicalTreatment">Other Details (if any):</label>
				 <input name="other_info" type="text" class="form-control" id="name" required="required" placeholder="Daily Routine problem you face">
				 </div>
		</div>
		<div class="col-md-12">		
                <div class="form-group">
                  <label for="exampleInputAnyMedicalTreatment">Other Details (if any):</label>
				  <textarea name="remark" rows="2" class="form-control" id="" placeholder="Any other information would you like to share with us
"></textarea>
                </div>
		</div>
		
		  
		  
		</div>		
                
                
              </div> 
		</div>	  
              <!-- /.box-body -->

              <div class="box-footer">
			  <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Register" >
                
              </div>
            </form>
          </div>
           
 
 
    </section>
    <!-- /.content -->
  </div>		 

<?php include("footer.php"); ?>