<?php 
include("config.php");
include("header.php");
include("app/auth.php");

  
if(isset($_POST['submit']))
{
 	$udcare_no=$_POST['udcare_no'];
	$code=$_POST['code'];
	$name=$_POST['name'];
	$email=$_POST['email'];
  	$mobile_no=$_POST['mobile_no'];
	$address=$_POST['address'];
	$time=$_POST['time'];
	$date=$_POST['date'];
	$other_info=$_POST['other_info'];
	 mysql_query("insert into `booking` set `udcare_no`='$udcare_no',`code`='$code',`name`='$name',`mobile_no`='$mobile_no',`email`='$email',`address`='$address',`time`='$time',`date`='$date',`other_info`='$other_info'");
 
 }
else
	{
		echo mysql_error();
	}
  ?>
<style>
.box.box-primary {
    border-top-color: #3c8dbc;
}
.box {
 
border-radius: 3px;
background: #ffffff;
border-top: 3px solid #d2d6de;
margin-bottom: 20px;
width: 100%;
box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
</style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Servicing
   </h1>
     </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
		<div class="box box-primary" style="margin-left:12px; margin-right:12px;">
            <div class="box-header with-border">
			<?php
					$s_id=$_GET['s_id']; 


 				$query=mysql_query("select * from `master_sub_services` where `services_id`='$s_id'");
		 $fetch=mysql_fetch_array($query);
				{
					 
					$sub_services_name=$fetch['sub_services_name'];
					$sub_services_discription=$fetch['sub_services_discription'];
				}		 
			?>
 
            <center><h4 class="box-title"><?php echo $sub_services_name; ?></h4></center>
			<hr>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body" style="margin-left:12px;margin-right:12px;">
				<p><?php echo $sub_services_discription; ?></p>
			</div>
           
        </div>
           
        </div>
	 
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box box-primary" style="margin-left:12px; margin-right:12px;">
            <div class="box-header with-border">
            <center><h4 class="box-title">Book Now </h4></center>
			<hr>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form role="form" method="post">
              <div class="box-body" style="margin-left:12px;margin-right:12px;">
				<div class="form-group">
                  <label for="exampleInputUdCare_no">Udaipur Care No.</label>
                  <input  type="text" name="udcare_no" class="form-control" placeholder="Enter Udaipur Care No.">
                </div>
				<div class="form-group">
                  <label for="exampleInputCode">6 Digit Code </label>
                  <input type="text" name="code" class="form-control"  placeholder="Enter 6 Digit Code">
                </div>
				<div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmailAddress">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your email Address">
                </div>
				 <div class="form-group">
                  <label for="exampleInputEmailAddress">Mobile No.</label>
                  <input type="text" name="mobile_no" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Your Mobile No">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmailAddress">Address</label>
				  <textarea name="address" class="form-control">
				 </textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPicUpTime">Pick Up Time</label>
                  <input type="time" name="time" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputPicUpTime">Pick Up Date</label>
				<input type="date"  name="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">Other Information</label>
                   <textarea name="other_info" class="form-control">
				</textarea>
                 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
				<input name="submit" type="submit" class="btn btn-primary form-control" id="submit" value="Send">
              </div>
            </form>
          </div>
           
        </div>
         
      </div>
   </div>
    </section>
    <!-- /.content -->
		 

  
<?php include("footer.php"); ?>
