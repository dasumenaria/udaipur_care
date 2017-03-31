<?php
include('auth.php'); 
include("../config.php");
include("header.php");
  
  
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
					 <th>S/no.</th>
                  <th>Name</th>
                  <th>Company Name</th>
				  <th>Email Address</th>
                  <th>Mobile No.</th>
                </tr>
                </thead>

					

                <tbody>
				<?php
			  $r1=mysql_query("select * from vendor  order by id Desc ");							
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
                  <td><?php echo $company_name;?>
                     
                  </td>
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
      
      <!-- /.row -->
    </section>
  
 <?php 
include("footer.php");
  ?>