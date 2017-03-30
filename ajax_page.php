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


 ?>