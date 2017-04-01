<?php
include("config.php");
include('app/function.php');
 $r1=mysql_query("select * from register where `send`='0'  order by id ASC ");							
 	while($row1=mysql_fetch_array($r1))
	{
 		$id=$row1['id'];
 		$name=$row1['name'];
		$email_id=$row1['email_id'];
 		$mobile_no=$row1['mobile_no'];
		$other_mobile_no=$row1['other_mobile_no'];
		/*$mobile_no='9680747166';
		echo $mobile_no=encode($mobile_no,'UDRENCODE'); exit;
		/*
		$explode_mob=explode(',' ,$mobile_no);
		if(sizeof($explode_mob)>1){
			$mobile_no=$explode_mob[0];
			$other_mobile_no=$explode_mob[1];
		}
		else
		{
			$mobile_no=$row1['mobile_no'];
			$other_mobile_no=$row1['other_mobile_no'];
		}
		
		$gender=$row1['gender'];
		$address=$row1['address'];
		$other_info=$row1['other_info'];
		//--- DECODE
		$name=encode($name,'UDRENCODE');
		$other_mobile_no=encode($other_mobile_no,'UDRENCODE');
		$email_id=encode($email_id,'UDRENCODE');
		$mobile_no=encode($mobile_no,'UDRENCODE');
		$gender=encode($gender,'UDRENCODE');
		$address=encode($address,'UDRENCODE');
		$other_info=encode($other_info,'UDRENCODE');
		
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
		 
		$sql="update `register` set  `name`='$name',`email_id`='$email_id',`mobile_no`='$mobile_no',`other_mobile_no`='$other_mobile_no',`gender`='$gender',`address`='$address',`other_info`='$other_info',  `udcare_no`='$udcare', `unique_code`='$string' where `id`='$id'";
		 
		mysql_query($sql);
		 
		$date=date('Y-m-d');
		$time=date('h:i:s A');
		$mobile_no=decode($mobile_no,'UDRENCODE');
		$md4_password=md5($string);
 		mysql_query("insert into `login` set `username`='$mobile_no' , `password`='$md4_password' , `register_id`='$id' , `date`='$date', `time`='$time' ");
		  */
 		
		$mobile_no=decode($mobile_no,'UDRENCODE'); 
		$working_key='A7a76ea72525fc05bbe9963267b48dd96';
		$sms_sender='UDRCRE';
		$sms=str_replace(' ', '+', '"Udaipur Care" A senior citizen helpline will be launched today at Bhartiya Lok Kala Mandal in kavi samelan, organized by Rotary Club Udaipur Mewar, passes available for SR. citizen at Choudhary offset, Guru Ram Das colony, udaipur.');
 		file_get_contents('http://alerts.sinfini.com/api/web2sms.php?workingkey='.$working_key.'&sender='.$sms_sender.'&to='.$mobile_no.'&message='.$sms.'');
		
		$sql="update `register` set `send`='1' where `id`='$id'";
		 
		mysql_query($sql);
 	
	}
?>