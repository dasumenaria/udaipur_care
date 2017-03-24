<?php
include("config.php");
$function_name=$_GET['function_name'];
if($function_name=='mobileNo_check')
{
	$mobile_no=$_GET['mobile'];
	$ftc_date=mysql_query("select `mobile_no` from `register` where `mobile_no`= '$mobile_no'");
	echo  $count= mysql_num_rows($ftc_date); 
} 



 ?>