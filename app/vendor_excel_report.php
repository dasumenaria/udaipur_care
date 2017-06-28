<?php
include('auth.php');
include("../config.php");


  $id=$_GET['id'];
 $filename="view_vender_excel";
	@header("Expires: 0");
     @header("Pragma: no-cache");
    @header("Content-type: application/vnd.ms-excel");
    @header("Content-Disposition: attachment; filename=".$filename.".xls");
    @header("Content-Description: Generated Report" ); 
	
?>
<div class="row">
    <!-- /.col -->
        <div class="col-md-12">
        <!------		Button 	----->
            <div class="box col-md-12" style="background:white;">
            <!-- /.box-header -->
                <div class="box-header">
				  <h3 class="box-title"> User Report </h3>
				</div>
            <!-- /.box-header -->
            <div class="box-body">
				<table border="1">
                <thead>
					<tr>
						<th>S/no.</th>
						<th>Name</th>
						<th>Company Name</th>
						<th>Email Address</th>
						<th>Mobile No.</th>
						<th>Company Register No</th>
						<th>Company Address</th>
						<th>Company MOU Certificate</th>
						<th>Company Service</th>
						<th>Company Service Discription</th>
						<th>Company Sub Service</th>
						<th>Company Sub Service Discription</th>
						<th>Discount</th>
						<th>Company Logo </th>
						<th>Offer</th>
						<th>Service Price</th>
						
					</tr>
                </thead>
				<tbody>
				<?php
					$r1=mysql_query("select * from vendor where flag=0 ");							
					$i=0;
					while($row1=mysql_fetch_array($r1))
					{
					$i++;
					$id=$row1['id'];
					$full_name=$row1['full_name'];
					$company_name=$row1['company_name'];
					$email_id=$row1['email_id'];
					$mobile_no=$row1['mobile_no'];
					$company_reg_no=$row1['company_reg_no'];
					$company_address=$row1['company_address'];
					$company_mou_certificate=$row1['company_mou_certificate'];
					$company_service=$row1['company_service'];
					$company_service_discription=$row1['company_service_discription'];
					$company_sub_service=$row1['company_sub_service'];
					$company_sub_service_discription=$row1['company_sub_service_discription'];
					$discount=$row1['discount'];
					$company_logo=$row1['company_logo'];
					$offer=$row1['offer'];
					$service_price=$row1['service_price'];
					
				?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $full_name;?></td>
					<td><?php echo $company_name;?></td>
					<td><?php echo $email_id;?></td>
					<td> <?php echo $mobile_no;?></td>
					<td> <?php echo $company_reg_no;?></td>
					<td> <?php echo $company_address;?></td>
					<td> <?php echo $company_mou_certificate;?></td>
					<td> <?php echo $company_service;?></td>
					<td> <?php echo $company_service_discription;?></td>
					<td> <?php echo $company_sub_service;?></td>
					<td> <?php echo $company_sub_service_discription;?></td>
					<td> <?php echo $discount;?></td>
					<td> <?php echo $company_logo;?></td>
					<td> <?php echo $offer;?></td>
					<td> <?php echo $service_price;?></td>
				</tr>
                <?php } ?>
                </tbody>
            </table>
			</div>
            <!-- /.box-body -->
        </div>
    </div>
    <!-- /.box-body -->
</div>

