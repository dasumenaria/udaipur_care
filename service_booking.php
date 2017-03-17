<?php 
	include("database.php");
	include("header.php");
	
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
@$session_id=$_SESSION['id']; 
  
 if(isset($_POST['submit']))
{
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
  	$message=$_POST['message'];
	$mobile_no=$_POST['mobile_no'];
  	$timestamp=date("Y-m-d");
   	mysql_query("insert into `contact_us` set `name`='$full_name',`message`='$message',`mobile_no`='$mobile_no',`email`='$email',`timestamp`='$timestamp'");
	
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
position: relative;
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
 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Service</h3>
            </div>
              
				
          </div>
           
        </div>
	 
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Service Booking </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
              <div class="box-body" style="margin-left:12px;">
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
                  <input type="email" name="email"class="form-control" id="exampleInputEmail1" placeholder="Enter Your email Address">
                </div>
				<div class="form-group">
                  <label for="exampleInputEmailAddress">Address</label>
				  <textarea name="address" class="form-control">
				 </textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPicUpTime">Pic Up Time</label>
                  <input type="time" name="time" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputPicUpTime">Pic Up Date</label>
				<input type="date" name="name" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
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
 
    </section>
    <!-- /.content -->
  </div>		 

  
<?php include("footer.php"); ?>
