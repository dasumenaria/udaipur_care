
<?php
include('auth.php'); 
include("../config.php");
include('function.php');
$pon=$_GET['pon'];
@$SESSION_SUBSERVIDE=$_SESSION['SESSION_SUBSERVICE'];
@$SESSION_USERTYPE=$_SESSION['SESSION_USERTYPE']; 

if(isset($_POST['deleted'])){
	$reason_for_delete=$_POST['reason_for_delete'];
	$update_id=$_POST['update_id'];
	mysql_query("update `register` set `reason_for_delete`='$reason_for_delete',`flag`='1' where `id`='$update_id' ");
}  

 ?>
 <div align='right' ><a class="btn btn-success" href="aadhar_card_report_excel.php?id=<?php echo $pon; ?>"><b>Download Excel</b>&nbsp; &nbsp;<i class="fa fa-cloud-download "></i></a></div><br>
	<table id="example1" class="table table-bordered table-striped">
                <thead>
				<tr>
					
					<th>S/No.</th>
					<th>Name</th>
					<th>DOB</th>
                    <th>Age</th>
                    <th>Aadhar Card No</th>
 					<th>Mobile No.</th>
					<th>Identity proof</th>
					<th>Action</th> 
                </tr>
                </thead>
                <tbody >
				<?php
				
					if($SESSION_USERTYPE==1)
			{
				$leadNew="SELECT * from `register` where `id`='$pon'";
			}
			$i=1;
			$Newlead=mysql_query($leadNew);
			while($row1=mysql_fetch_array($Newlead))
					{
						$i++;						
						$name=$row1['name'];
						$dob=$row1['dob'];
						$identity_proof=$row1['identity_proof'];
						$email_id=$row1['email_id'];
						$mobile_no=$row1['mobile_no'];
						$aadhar_card_no=$row1['aadhar_card_no'];
						
						$name=decode($name,'UDRENCODE');
						$email_id=decode($email_id,'UDRENCODE');
						
						
					 
						
						if(!empty($dob))
						{
							$dateOfBirth = date('d-m-Y',strtotime($dob));
							$today = date("Y-m-d");
							$diff = date_diff(date_create($dateOfBirth), date_create($today));
							$age_year=$diff->format('%y'); 
						}	
							
						?>
						
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $dob;?></td>
                        <td><?php if(!empty($dob)) {  echo $age_year; }?></td>
                         <td> <?php echo $mobile_no;?></td>
                         <td> <?php echo $aadhar_card_no;?></td>
						  <td><img src="../identity_proof/<?php echo $identity_proof;?>" width="100px" height="100px"/> </td>
                        <td>
                            <a href="edit_member.php?ati_utf_id=<?php echo $row1['id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> </a>
                            
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
				<?php }  ?>
                </tbody>
</table>
            