<?php
include('auth.php'); 
include("../config.php");
$pon=$_GET['id'];
@$SESSION_SUBSERVIDE=$_SESSION['SESSION_SUBSERVICE'];
@$SESSION_USERTYPE=$_SESSION['SESSION_USERTYPE']; 
$filename="view_member_excel";
    header ("Expires: 0");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/vnd.ms-excel");
    header ("Content-Disposition: attachment; filename=".$filename.".xls");
    header ("Content-Description: Generated Report" );
?>
<table border="1">
	<thead>
		<tr>
			<th>Sr.No</th>
			<th>UdCare No</th>
			<th>Code</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Time</th>
			<th>Date</th>
			<th>Other Information</th>
			<th>TimeStamp</th>
			<th>Complete Reason</th>
			<th>Master Status</th>
			<th>Mobile No</th>
			<th>Master Service Id</th>
			<th>Master Sub Service Id</th>
			<th>Current Date</th>
			<th>Current Time</th>
			<th>Transfer Reason</th>
			<th>Rejection Reason</th>
			<th>Vendor Assign</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if($SESSION_USERTYPE==1)
			{
				$leadNew="SELECT * from `booking` where `master_sub_service_id`='$pon'";
			}
			$i=1;
			$Newlead=mysql_query($leadNew);
			while($lead_new=mysql_fetch_array($Newlead))
			{
				$id=$lead_new['id'];	
				$udcare_no=$lead_new['udcare_no'];	
				$code=$lead_new['code'];	
				$name=$lead_new['name'];	
				$email=$lead_new['email'];	
				$address=$lead_new['address'];	
				$time=$lead_new['time'];	
				$date=$lead_new['date'];
				$other_info=$lead_new['other_info'];
				$timestamp=$lead_new['timestamp'];
				$reason_for_complete=$lead_new['reason_for_complete'];
				$master_status=$lead_new['master_status'];
				$mobile_no=$lead_new['mobile_no'];
				$master_service_id=$lead_new['master_service_id'];
						if(!empty($master_service_id))
						{ 
							$sql=mysql_query("select service_name from `master_services` where `id`='$master_service_id'");
							$ftc=mysql_fetch_array($sql);
							$service_name=$ftc['service_name'];
						}
						else{$service_name='';}
				$master_sub_service_id=$lead_new['master_sub_service_id'];
						if(!empty($master_sub_service_id)){
						$sql1=mysql_query("select sub_services_name from `master_sub_services` where `id`='$master_sub_service_id'");
						$ftc1=mysql_fetch_array($sql1);
						$sub_services_name=$ftc1['sub_services_name'];
						}
						else
						{$sub_services_name='';}
				$currnt_date=$lead_new['currnt_date'];
				$currnt_time=$lead_new['currnt_time'];
				$reason_for_transfer=$lead_new['reason_for_transfer'];
				$reason_for_rejection=$lead_new['reason_for_rejection'];
				$assign_to_vendor=$lead_new['assign_to_vendor'];
		?>
		<tr>
			<td><?php echo $i++;?> </td>
			<td><?php echo $udcare_no; ?></td>
			<td><?php echo $code; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $address; ?></td>
			<td><?php echo $time; ?></td>
			<td><?php echo $date; ?></td>
			<td><?php echo $other_info; ?></td>
			<td><?php echo $timestamp; ?></td>
			<td><?php echo $reason_for_complete; ?></td>
			<td><?php echo $master_status; ?></td>
			<td><?php echo $mobile_no; ?></td>
			<td><?php echo $service_name; ?></td>
			<td><?php echo $sub_services_name; ?></td>
			<td><?php echo $currnt_date; ?></td>
			<td><?php echo $currnt_time; ?></td>
			<td><?php echo $reason_for_transfer; ?></td>
			<td><?php echo $reason_for_rejection; ?></td>
			<td><?php echo $assign_to_vendor; ?></td>
		</tr>
	   <?php } ?>
	</tbody>
</table>


