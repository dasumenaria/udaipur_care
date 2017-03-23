<?php 
include('auth.php'); 
include("../config.php");
include("header.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
$status=$_GET['s'];
@$SESSION_SUBSERVIDE=$_SESSION['SESSION_SUBSERVICE'];
@$SESSION_USERTYPE=$_SESSION['SESSION_USERTYPE']; 
?>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                	<h3 class="box-title">Leads Status</h3>
                </div>
               <!------		Button 	----->
                <div class="col-md-12" align="right">
					<?php
                    
                    $sql='select `status`,`status_name` from `status_master` ';
                    $excute_sql=mysql_query($sql);
                    while($fetch_data=mysql_fetch_array($excute_sql))
                    {
                        $activeclass='';
                        if($status===$fetch_data['status'])
                        {
                            $activeclass='btn btn-danger margin';
                        }
                        else
                        {
                            
                            $activeclass='btn btn-primary margin';		
                        }
                        echo '	
                                <a class="'.$activeclass.'" href="lead_status.php?s='.$fetch_data['status'].'"><i class="fa fa-book"> </i> '.$fetch_data['status_name'].'</a>
                            '; 
                    } ?>
                </div>
                <div class="box col-md-12">
                     
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
						  <th>Udaipur Care No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile No</th>
 						  <th>Service Type</th>
                          <th>Pickup date</th>
                          <th>Pickup Time</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
						if($SESSION_USERTYPE==1){
							 $leadNew="SELECT * from `booking` where `master_status` = '$status'";
						}
						else
						{
							 $leadNew="SELECT * from `booking` where `master_status` = '$status' && `master_sub_service_id` = '$SESSION_SUBSERVIDE'";
						}
						$Newlead=mysql_query($leadNew);
						while($lead_new=mysql_fetch_array($Newlead)){
						$date=$lead_new['date'];
						if($date='0000-00-00' || $date='1970-01-01'){ $dateforview='00-00-0000';}	
						else { $dateforview=date('d-m-y',$date);}
						
						$sub_service=$lead_new['master_sub_service_id'];
						$sql=mysql_query("select `sub_services_name` from `master_sub_services` where `id`='$sub_service'");
						$ftc=mysql_fetch_array($sql);
						?>
                        <tr>
                          <td><?php echo $lead_new['udcare_no']; ?></td>
						  <td><?php echo $lead_new['name']; ?></td>
                          <td><?php echo $lead_new['email']; ?></td>
						  <td><?php echo $lead_new['mobile_no']; ?></td>
						  <td><?php echo $ftc['sub_services_name']; ?></td>
                          <td><?php echo $dateforview; ?></td>
                          <td><?php echo $lead_new['time']; ?></td>
                          <td>
                          	 
                                <div class="btn-group">
                                  <button type="button" class="btn btn-success">Action</button>
                                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a data-toggle="modal" data-target="#reject<?php echo $lead_new['udcare_no']; ?>">Reject</a></li>
                                    <li class="divider"></li>
                                    <li><a data-toggle="modal" data-target="#transfer<?php echo $lead_new['udcare_no']; ?>">Transfer</a></li>
                                    <li class="divider"></li>
                                    <li><a data-toggle="modal" data-target="#complete<?php echo $lead_new['udcare_no']; ?>">Complete</a></li>
                                  </ul>
                                </div>
                                <div class="modal fade" id="complete<?php echo $lead_new['udcare_no']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Do you want to complete this lead </h4>
                                        </div>
                                        
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="modal fade" id="transfer<?php echo $lead_new['udcare_no']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Do you want to transfer this lead </h4>
                                        </div>
                                        
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal fade" id="reject<?php echo $lead_new['udcare_no']; ?>" role="dialog">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">Do you want to reject this lead </h4>
                                        </div>
                                        
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
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
</div>
 
 
<?php 
include("footer.php");
?>
