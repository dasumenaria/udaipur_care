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


 ?>