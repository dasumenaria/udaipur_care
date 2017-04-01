<?php
include("config.php");
include('app/function.php');
 $r1=mysql_query("select * from register where `send`='0'  order by id ASC limit 50 ");							
 	while($row1=mysql_fetch_array($r1))
	{
 		echo $id=$row1['id'].'<br />';
 		$name=$row1['name'];
		$email_id=$row1['email_id'];
 		$mobile_no=$row1['mobile_no'];
		$other_mobile_no=$row1['other_mobile_no'];
		
 		if(!empty($mobile_no)){
			$mobile_no=decode($mobile_no,'UDRENCODE'); 
			$working_key='A7a76ea72525fc05bbe9963267b48dd96';
			$sms_sender='UDRCRE';
			$sms=str_replace(' ', '+', '"Udaipur Care" A senior citizen helpline will be launched today at Bhartiya Lok Kala Mandal in Kavi Samelan organized by Rotary Club Udaipur Mewar. Passes available for sr. citizen at Choudhary offset, Guru Ramdas colony, Udaipur.');
			file_get_contents('http://alerts.sinfini.com/api/web2sms.php?workingkey='.$working_key.'&sender='.$sms_sender.'&to='.$mobile_no.'&message='.$sms.'');
		}
 		$sql="update `register` set `send`='1' where `id`='$id'";
 		mysql_query($sql);
		
 	
	}
?>

your service booked on date and time 