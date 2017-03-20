<?php 
include('auth.php'); 
include("../config.php");
include("header.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
$status=$_GET['s'];
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
						  <th>Booking No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile No</th>
 						  <th>Service Type</th>
                          <th>Pickup date</th>
                          <th>Pickup Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $leadNew="SELECT * from `booking` where `master_status` = '$status'";
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
