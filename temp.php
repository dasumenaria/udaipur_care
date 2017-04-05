<?php
include("config.php");
include('app/function.php');
 $r1=mysql_query("select * from reg_n");							
 	while($row1=mysql_fetch_array($r1))
	{
 		
		$name=$row1['name'];
		$address=$row1['address'];
		$mobile_no=$row1['mobile_no'];
		$landline_no=$row1['landline_no'];
		
		$name=encode($name,'UDRENCODE');
		$mobile_no=encode($mobile_no,'UDRENCODE');
		$address=encode($address,'UDRENCODE');
		
		$date=date('Y-m-d');
		$time=date('h:i:s A');
		
		$chars = "0123456789";//ABCDEFGHIJKLMNOPQRSTUVWXYZ
		$string = '';
		for ($i = 0; $i < 6; $i++) {
			$string .= $chars[rand(0, strlen($chars) - 1)];
		}  
		$charss = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$udcare = '';
		for ($i = 0; $i < 8; $i++) {
			$udcare .= $charss[rand(0, strlen($charss) - 1)];
		}   
		
		$sql="insert into `register` set  `name`='$name',`mobile_no`='$mobile_no',`address`='$address', `date`='$date', `udcare_no`='$udcare', `unique_code`='$string', `time`='$time'";
		mysql_query($sql);
		$ids=mysql_insert_id();
		$md4_password=md5($string);
		$mobile_no=decode($mobile_no,'UDRENCODE');
		$email_id=decode($email_id,'UDRENCODE');
		mysql_query("insert into `login` set `username`='$mobile_no' , `password`='$md4_password' , `register_id`='$ids' , `date`='$date', `time`='$time' ");
		
 }
?>
