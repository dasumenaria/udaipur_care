<?php
include('auth.php'); 
include("../config.php");
$from = $_GET['from'];
     $from_date=date('Y-m-d',strtotime($from));
     
 $to = $_GET['to'];
     $to_date=date('Y-m-d',strtotime($to));
$p=$_SESSION['SESSION_ID'];
@$SESSION_SUBSERVIDE=$_SESSION['SESSION_SUBSERVICE'];
@$SESSION_USERTYPE=$_SESSION['SESSION_USERTYPE']; 
?>
<div align="right">
<a class="btn btn-success " href="excel_view_report.php?id=<?php echo $pon; ?>"> Download Excel</a>
</div>
<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Sr.No</th>
			<th>UdCare No</th>
			<th>Code</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Mobile No</th>
			<th>Master Service Id</th>
			<th>Master Sub Service Id</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
			
			$Newlead=mysql_query("SELECT * from `booking` where date between '$from_date' and '$to_date' AND flag='0' order by id Desc");
			$i=0;
			while($lead_new=mysql_fetch_array($Newlead))
			{
				$i++;
				$id=$lead_new['id'];	
				$udcare_no=$lead_new['udcare_no'];	
				$code=$lead_new['code'];	
				$name=$lead_new['name'];	
				$email=$lead_new['email'];	
				$address=$lead_new['address'];
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
		?>
		<tr>
			<td><?php echo $i++;?> </td>
			<td><?php echo $udcare_no; ?></td>
			<td><?php echo $code; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $address; ?></td>
			<td><?php echo $mobile_no; ?></td>
			<td><?php echo $service_name; ?></td>
			<td><?php echo $sub_services_name; ?></td>
		</tr>
	   <?php } ?>
	</tbody>
</table>


