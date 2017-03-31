<?php
include('auth.php'); 
include("../config.php");
include("header.php");
include('function.php');


 
  
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
                <tr>
					<th>S/No.</th>
					<th>Name</th>
					<th>Date Of Birth</th>
                    <th>Age</th>
					<th>Email Address</th>
					<th>Mobile No.</th>
					 
                </tr>
                </thead>

					

                <tbody>
				<?php
			  $r1=mysql_query("select * from register  order by id Desc ");							
					$i=0;
					while($row1=mysql_fetch_array($r1))
					{
						$i++;
						$id=$row1['id'];
						$name=$row1['name'];
						$dob=$row1['dob'];
						$email_id=$row1['email_id'];
						$mobile_no=$row1['mobile_no'];
						$name=decode($name,'UDRENCODE');
						$email_id=decode($email_id,'UDRENCODE');
						$mobile_no=decode($mobile_no,'UDRENCODE');
						if(!empty($dob))
						{
							$dateOfBirth = date('d-m-Y',strtotime($dob));
							$today = date("Y-m-d");
							$diff = date_diff(date_create($dateOfBirth), date_create($today));
							$age_year=$diff->format('%y');  
							$month_year=$diff->format('%m'); 
							$day_year=$diff->format('%d'); 
						}
					?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $dob;?></td>
                        <td><?php if(!empty($dob)) {  echo $age_year.' Year and '.$month_year.' Month'; }?></td>
                        <td><?php echo $email_id;?></td>
                        <td> <?php echo $mobile_no;?></td>
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