<?php
include('auth.php'); 
include("../config.php");
include("header.php");
include('function.php');
$p=$_SESSION['SESSION_ID'];
$session_id=$_SESSION['SESSION_ID'];

if(isset($_POST['deleted'])){
	$reason_for_delete=$_POST['reason_for_delete'];
	$update_id=$_POST['update_id'];
	mysql_query("update `master_partner` set `reason_for_delete`='$reason_for_delete',`flag`='1' where `id`='$update_id' ");
}  
 ?>
 
 <section class="content">
      <div class="row">
        <div class="col-md-12">
            <div class="box col-md-12" style="background:white;">
            <div class="box-header">
              <h3 class="box-title"> Partner Report</h3>
			</br>
            </div>
			
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
				<tr><td align='right' colspan='8'><a class="btn btn-success" href="partner_excel_report.php?id=<?php echo $p; ?>"><b>Download Excel</b>&nbsp; &nbsp;<i class="fa fa-cloud-download "></i></a>
                <tr>
					
					<th>S/No.</th>
					<th>Name</th>
					<th>Mobile No.</th>
					<th>Address</th>
                    <th>Email</th>
                    <th>Adhar Card No</th>
 					<th>Company Logo</th>
					<th>Action</th> 
                </tr>
                </thead>
                <tbody>
				<?php
			  $r1=mysql_query("select * from `master_partner` where `flag`='0'");							
					$i=0;
					while($row1=mysql_fetch_array($r1))
					{
						$i++;
						$id=$row1['id'];
						$name=$row1['full_name'];
						$mobile_no=$row1['mobile_no'];
						$address=$row1['address'];
						$email=$row1['email'];
						$adhar_card_no=$row1['adhar_card_no'];
						$company_logo=$row1['company_logo'];
						?>
						
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $name;?></td>
                        <td> <?php echo $mobile_no;?></td>
                        <td> <?php echo $address;?></td>
                        <td> <?php echo $email;?></td>
                        <td> <?php echo $adhar_card_no;?></td>
						 <td><img src="../images/company_partner/<?php echo $company_logo;?>" width="100px" height="100px"/> </td>
                        <td>
                            <a href="edit_partner.php?ati_utf_id=<?php echo $row1['id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            
                            <a data-toggle="modal" data-target="#delete<?php echo $row1['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </a>
                             <div class="modal fade" id="delete<?php echo $row1['id']; ?>" role="dialog">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  <form method="post">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Do you want to delete this member </h4>
                                    </div>
                                    <div class="modal-body"  style="min-height:100px">
                                        <div class="form-group col-md-12">
                                         <label class="">Reason for delete</label>
                                         <input type="hidden" name="update_id" value="<?php echo $row1['id']; ?>" />
                                         <textarea name="reason_for_delete" class="form-control" cols="70" style="resize:none;" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" name="deleted" class="btn btn-danger">Delete</button>
                                    </div>
                                  </form>
                                  </div>
                                </div>
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
                 
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 </div>
 <?php 
include("footer.php");
  ?>