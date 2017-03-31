<?php

include("config.php");
include("app/function.php");
$function_name=$_GET['function_name'];
if($function_name=='mobileNo_check')
{
	$mobile_no=$_GET['mobile'];
	$mobile_no=encode($mobile_no,'UDRENCODE');
	$ftc_date=mysql_query("select `mobile_no` from `register` where `mobile_no`= '$mobile_no'");
	echo  $count= mysql_num_rows($ftc_date); 
} 
if($function_name=='fetch_servicw_vendor_list')
{
	$service_id=$_GET['id'];
 	$ftc_date=mysql_query("select `mobile_no` from `register` where `mobile_no`= '$mobile_no'");	
}
if($function_name=='fetch_service_list')
{
	$service_id=$_GET['id'];
 	$ftc_date=mysql_query("select `id`,`sub_services_name` from `master_sub_services` where `services_id`= '$service_id' && `flag`='0'");	
		echo '<option value="">Select...</option>';
	while($ftc=mysql_fetch_array($ftc_date)){
		echo "<option value=".$ftc['id'].">".$ftc['sub_services_name']."</option>";
	}
}
if($function_name=='contact_us_submit')
{
	require_once("mail.php");
	$name=$_GET['name'];
	$email=$_GET['email'];
  	$message=$_GET['message'];
	$mobile_no=$_GET['mobile_no'];
	//--- EMAIL
	 	$to = 'dasumenaria@gmail.com'; 
 		$code=substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),0, 1) . substr(str_shuffle('aBcEeFgHiJkLmNoPqRstUvWxYz0123456789'),0, 10);
		$body= $code ;
		$msg='New enquiry is sumbitted. <br> 
			<strong>Name : </strong>'.$name.'<br>
			<strong>Email : </strong>'.$email.'<br>
			<strong>Mobile No. : </strong>'.$mobile_no.'<br>
			<strong>Mesage : </strong>'.$message.'<br>
			Thanks <br><strong> Udaipur Care.</strong>';
		$from="dasumenaria@gmail.com";
		$from_name="Udaipur Care";
		$subject="Contact us";
		smtpmailer($to, $from, $from_name, $subject,$msg, $is_gmail = true);
        mysql_query("insert into `contact_us` set `name`='$name',`message`='$message',`mobile_no`='$mobile_no',`email`='$email'");
		echo "success";
	
}


 ?>