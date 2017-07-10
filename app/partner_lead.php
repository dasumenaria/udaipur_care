<?php 
include('auth.php'); 
include("../config.php");
include("header.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
@$status=$_GET['s'];
if(empty($status))
{
	$status=0;
}
@$SESSION_SUBSERVICE=$_SESSION['SESSION_SUBSERVICE'];
@$SESSION_USERTYPE=$_SESSION['SESSION_USERTYPE']; 
 
  if(isset($_POST['sub_del']))
{
	$delet_model=$_POST['delet_model'];
	mysql_query("update `temp_patner` SET `flag`=1 where `id`='$delet_model'");
}
?>

     <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                	<h3 class="box-title">Leads Partner</h3>
                </div>
               <!------		Button 	----->
                <div class="col-md-12" align="right">
					 &nbsp;
                </div>
                <div class="box col-md-12">
                     
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Name</th>
                          <th>Company Name</th>
                          <th>Mobile No</th>
                          <th>Company Reg No</th>
                          <th>Company Service</th>
                          <th>Discount</th>
 						  <th>Offer</th>
 						  <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
						$i=1;
 						
						$leadNew="SELECT * from `temp_patner` where flag=0";
						 
						$Newlead=mysql_query($leadNew);
						while($lead_new=mysql_fetch_array($Newlead)){
						$id=$lead_new['id'];
						$name=$lead_new['full_name'];
						$company_name=$lead_new['company_name'];
						$mobile_no=$lead_new['mobile_no'];
						$company_reg_no=$lead_new['company_reg_no'];
						$company_service=$lead_new['company_serivces'];
						$discount=$lead_new['discount'];
						$offer=$lead_new['offer']; 
						?>
                        <tr>
							<td><?php echo $i++; ?></td>
                          <td><?php echo $name;?></td>
						  <td><?php echo $company_name; ?></td>
 						  <td><?php echo $mobile_no;?></td>
						  <td><?php echo $company_reg_no;?></td>
                          <td><?php echo $company_service ?></td>
                          <td><?php echo $discount; ?></td>
                          <td><?php echo $offer; ?></td>
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
                          <?php }?>
                        </tbody>
                      </table>
                      
                      
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->
          </div>
                
                </div>
            </div>
        </div>
    </div>
  
 
<?php 
include("footer.php");
?>
<script>
	$(".assign_data").on('click',function(){
		var service = $(this).attr('service');	
		$.ajax({
			url: "../ajax_page.php?function_name=fetch_servicw_vendor_list&id="+service,
			type: "POST",
			success: function(data)
			{   
				  $('.replace_data').html(data);
				  $('.date-picker').datepicker();
				  $('.timepicker').timepicker();
			}
		});
	});
</script>
