<?php 
include("auth.php");
include("../config.php");
include("header.php");
if(isset($_POST['submit'])){
	 
	 	$udcare_no=$_POST['udcare_no'];
	$code=$_POST['code'];
	$name=$_POST['name'];
	$email=$_POST['email'];
  	$mobile_no=$_POST['mobile_no'];
	$address=$_POST['address'];
	$time=$_POST['time'];
	$date=$_POST['date'];
	$curnt_date=date('Y-m-d');
	$times=date('h:i:s A');
	$date_chne=date('Y-m-d', strtotime($date));
	$other_info=$_POST['other_info'];
echo "insert into `booking` set `udcare_no`='$udcare_no',`master_sub_service_id`='$sub_serivice_id',`code`='$code',`name`='$name',`mobile_no`='$mobile_no',`email`='$email',`address`='$address',`time`='$time',`date`='$date_chne',`other_info`='$other_info',`currnt_time`='$times',`currnt_date`='$curnt_date'";	
 mysql_query("insert into `booking` set `udcare_no`='$udcare_no',`master_sub_service_id`='$sub_serivice_id',`code`='$code',`name`='$name',`mobile_no`='$mobile_no',`email`='$email',`address`='$address',`time`='$time',`date`='$date_chne',`other_info`='$other_info',`currnt_time`='$times',`currnt_date`='$curnt_date'");
	 
	 }
else
	{
		echo mysql_error();
		}
		
  ?>
  <!-- Main content -->
    <section class="content">
      <div class="row">
		<div class="box box-primary" style="background-color:white;margin-left:12px; margin-right:12px;">
            <div class="box-header with-border">
            <center><h3 class="box-title">Book Now </h3></center>
			 </div>
			 </br>
            <!-- /.box-header -->
            <!-- form start -->
             <form role="form" method="post">
              <div class="box-body" style="margin-left:12px;margin-right:12px;">
				<div class="form-group col-md-6">
                  <label for="exampleInputUdCare_no">Udaipur Care No.</label>
                  <div class="input-group">
                      <input  type="text" name="udcare_no" class="form-control" value="" placeholder="Enter Udaipur Care No." required>
                      <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
                </div>
				<div class="form-group col-md-6">
                  <label for="exampleInputCode">6 Digit Code </label>
                  <div class="input-group">
                      <input type="text" name="code" class="form-control" value="" placeholder="Enter 6 Digit Code" required>
                      <div class="input-group-addon">
                          <i class="fa fa-book"></i>
                      </div>
                  </div>
                </div>
				<div class="form-group col-md-6">
                  <label for="exampleInputName">Name</label>
                  <div class="input-group">
                  	  <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                  	  <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmailAddress">Email address</label>
                  <div class="input-group">
                  	  <input type="email" name="email" class="form-control" placeholder="Enter Your email Address" >
                  	  <div class="input-group-addon">
                          <i class="fa fa-envelope"></i>
                      </div>
                  </div>
                </div>
				 <div class="form-group col-md-6">
                  <label for="exampleInputEmailAddress">Mobile No.</label>
                  <div class="input-group">
                      <input type="text" name="mobile_no" class="form-control allLetter" maxlength="10" minlength="10"  placeholder="Enter Your Your Mobile No" required>
                      <div class="input-group-addon">
                          <i class="fa fa-mobile"></i>
                      </div>
                  </div>
                </div>
				<div class="form-group col-md-6">
                  <label for="exampleInputEmailAddress">Address</label>
				  <textarea name="address" class="form-control" style="resize:none;" required></textarea>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPicUpTime">Pick Up Date</label>
                  <div class="input-group">
                      <input type="text"  name="date" class="form-control datepicker" required id="">
                      <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                      </div>
                  </div>
                </div>
                <div class="form-group col-md-6 ">
                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                          <label>Pick Up Time </label>
                            <div class="input-group">
                                <input type="text" name="time" class="form-control timepicker">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                         </div>
                   </div>
                </div>
				 
				<div class="form-group col-md-6">
                  <label for="exampleInputPicUpTime">Select Service</label>
                  <div class="input-group">
                       <select name="" class="form-control" style="width:520px;">
					   <?php
			  $r1=mysql_query("select * from master_services  where flag=0 order by id Desc ");							
					$i=0;
					while($row1=mysql_fetch_array($r1))
					{
						$i++;
					$id=$row1['id'];
					$service_name=$row1['service_name'];
					 
					 
					
					
					?>
					 <option value="<?php echo $id;?>"><?php echo $service_name;?></option>
					<?php } ?>
					 </select>
						
                  </div>
                </div>
				<div class="form-group col-md-6">
                  <label for="exampleInputPicUpTime">Select Sub Service</label>
                  <div class="input-group">
                     <select name="" class="form-control select2" style="width:520px;">
					 <option value="">Select Service</option>
					 </select>
                        
                  </div>
                </div>
                 <div class="form-group col-md-12">
                  <label for="exampleInputFile">Other Information</label>
                   <textarea name="other_info" class="form-control"></textarea>
              </div>
              <!-- /.box-body -->
              <div class="col-md-12" align="center">
                  <div style="width:15%">
                    <input name="submit" type="submit" class="btn btn-primary form-control" id="submit" value="Book Now">
                  </div>
              </div>
			  <div class="col-md-12" align="center">
                  <div >
                   &nbsp;
                  </div>
              </div>
			  
			  <!------->
			   
            
			 
            </form>
          </div>
        </div>
	  </div>
	  </section>
    <!-- /.content --> 
<div style="display:none;margin-top:20px" id="new_app_login" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false">
<div  class="modal-backdrop fade in" style="z-index:0 !important"></div>
    <div class="modal-dialog" style="width:400px">
        <div class="modal-content">
           
            <div class="modal-body" style="min-height:300px">
            	<div class="brand" align="center">
                  <img src="images/logos.png"   width="180px;">  
                </div><br />

            <form method="post">
                  <div class="form-group has-feedback">
                     <input type="text" name="username" class="form-control" placeholder="Mobile No" required="required">
                     <span class="fa fa-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group">
                    <?php if(!empty($message)){ ?>
                    <code><?php echo $message; ?></code>
                    <?php }?>
                  </div><br />

                  <div class="row">
                    <div class="col-xs-8">
                        <a href="#">Forgot Password</a>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                      <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                  </div>
                  <div class="form-group">
                  <span>Don't have an account? <a href="registration.php" class="text-center"> Register now</a></span>
                  <input type="hidden" name="sub_serivice_id" value="<?php echo $sub_serivice_id; ?>" />
                  </div>
            </form>
                </div>
            </div>
        </div>
    </div>
	<!--------pop up------->
<div style="display:none;margin-top:20px" id="success_messge" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false">
    <div  class="modal-backdrop fade in" style="z-index:0 !important"></div>
        <div class="modal-dialog" style="width:400px">
            <div class="modal-content" align="center">
               
                <div class="modal-body" style="min-height:250px">
                    
                    <div  style="width:100%; padding-top:20px; font-size:25px" id="congrates"><?php echo $image_path; ?></div>
                    <div class="modal-body" id="success_mag" style="padding:20px"><strong><?php echo $message; ?></strong> </div>
                    <div  style="padding-top: 0px !important; padding-bottom:10px">
                    
                         <a style="background-color:#195683; color:#FFF; margin-right:0px !important" href="index.php" class="btn blue">Okay </a>
                     </div>
                    </div>
            </div>
        </div>
    </div>
<?php include("footer.php"); ?>
<script>
<?php if(empty($SESSION_ID)){?>
 		$('#new_app_login').show();
		<?php }

if(!empty ($message))
{?>
	$('#success_messge').show();
<?php }
		?>
 
$('.allLetter').keyup(function(){
		var inputtxt=  $(this).val();
		var numbers =  /^[0-9]*\.?[0-9]*$/;
		if(inputtxt.match(numbers))  
		{} 
		else  
		{  
			$(this).val('');
			return false;  
		}
	});
	 
</script>
 

