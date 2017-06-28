<?php
include('auth.php'); 
include("../config.php");
include('header.php');
$p=$_SESSION['SESSION_ID'];
$session_id=$_SESSION['SESSION_ID'];
if(isset($_POST['sub_del']))
{
	$delet_model=$_POST['delet_model'];
	mysql_query("update `vendor` SET `flag`=1 where `id`='$delet_model'");
}
else
	{
		echo mysql_error();
	}
	
?>
<section class="content">
    <div class="row">
    <!-- /.col -->
        <div class="col-md-12">
        <!------		Button 	----->
            <div class="box col-md-12" style="background:white;">
            <!-- /.box-header -->
                <div class="box-header">
				  <h3 class="box-title"> User Report </h3>
				</br>
				</div>
            <!-- /.box-header -->
            <div class="box-body">
				<table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr><td align='right' colspan='7'><a class="btn blue-madison" href="vendor_excel_report.php?id=<?php echo $p; ?>">Excel</a>
					<tr>
						 <th>S/no.</th>
					  <th>Name</th>
					  <th>Company Name</th>
					  <th>Email Address</th>
					  <th>Mobile No.</th>
					  <th>M.O.U. Certificate</th>
					   <th>Action</th>
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
					
				?>

                <tr>
					<td><?php echo $i;?></td>
					<td><?php echo $full_name;?></td>
					<td><?php echo $company_name;?></td>
					<td><?php echo $email_id;?></td>
					<td> <?php echo $mobile_no;?></td>
					
					<td> </td>
					<td align="center" width="3%">
						<a class="btn default red-stripe btn-sm"  rel="tooltip" title="Delete"  data-toggle="modal" href="#delete<?php echo $id ;?>" style="background:#FF851B;"><i class="fa fa-trash" style="color:white;"></i></a>
					<div class="modal fade" id="delete<?php echo $id ;?>" tabindex="-1" aria-hidden="true" style="padding-top:35px">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<span class="modal-title" style="font-size:14px; font-weight:bold; color:red;text-align:left">Are you sure, you want to delete this Service?</span>
								</div>
								<div class="modal-footer">
									<form method="post" name="delete<?php echo $id ;?>">
										<input type="hidden" name="delet_model" value="<?php echo $id; ?>" />
										<button type="submit" name="sub_del" value="" class="btn btn-danger">Yes</button> 
										<button type="submit" name="del" value="" class="btn btn-primary">No</button> 
									</form>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
					<!-- /.modal-dialog -->
					</div>
					</td> 
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
<!-- /.box -->
<!-- /.row -->
</section>
<?php 
include("footer.php");
  ?>