<?php 
include("auth.php");
include("header.php");
include("../config.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000); 
$message="";
$image_path="";
 
if(isset($_POST['submit']))
{ 
		$service_name=$_POST['service_name'];
		$discription=$_POST['discription'];
		$icon=$_POST['icon'];
 
		 $sql="insert into `master_services` set  `service_name`='$service_name',`discription`='$discription',`icon`='$icon'";
		 $r=mysql_query($sql);
	}	
		 
	else
	{
		 
	}
 		
 
?>
<!-- bootstrap datepicker -->
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
   
     

    <!-- Main content -->
    <section class="content">
		<div class="box box-primary" >
		   <div class="box-body" style="margin-left:40px;margin-right:40px;">
		  
		 <div class="row">
		 </br>
		 <div class="col-md-5" style="border:1px solid #3C8DBC;">
		 <form method="post"  id="contact-form" role="form" enctype="multipart/form-data">
			<h4>&nbsp; Add Service</h4>
			<hr> 
		  <div class="col-md-12">
		   
				<div class="form-group">
                  <label for="exampleInputFullName">Service Name</label>
                  <div class="input-group">
                  	<input type="text" name="service_name" class="form-control" id="exampleInputFullName" placeholder="Enter Service Name" required>
                    <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
                </div>
		</div>
		<div class="col-md-12">
		    
				<div class="form-group">
                  <label for="exampleInputFullName">Icon Class</label>
                  <div class="input-group">
                  	<input type="text" name="icon" class="form-control" id="exampleInputFullName" placeholder="Enter Icon class Name" required>
                    <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                  </div>
                </div>
		</div>
		 <div class="col-md-12">		
			<div class="form-group">
				 <label for="exampleInputDob">Description</label>
				 <textarea name="discription" class="form-control"></textarea>
			</div>
		</div>	
		  <div class="col-md-12" align="center">		
             <div class="box-footer">
                  <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Register" >  
 
             </div>
		</div>  
		</form>
		 </div>
		 <div class="col-md-2" >
		 <h4>&nbsp;  </h4>
		 
 
		</div>
		 
		<div class="col-md-5" style="border:1px solid #3C8DBC;">
		 <h4>&nbsp; View Service</h4>
		<hr>
 
		</div>
	</div>	
</br>	
</div> 

</div>
</section>
    <!-- /.content -->
   
<div style="display:none;margin-top:20px" id="new_app_login" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="false">
    <div  class="modal-backdrop fade in" style="z-index:0 !important"></div>
        <div class="modal-dialog" style="width:400px">
            <div class="modal-content" align="center">
               
                <div class="modal-body" style="min-height:250px">
                    
                    <div  style="width:100%; padding-top:20px; font-size:25px" id="congrates"><?php echo $image_path; ?></div>
                    <div class="modal-body" id="success_mag" style="padding:20px"><strong><?php echo $message; ?></strong> </div>
                    <div  style="padding-top: 0px !important; padding-bottom:10px">
                    
                         <a style="background-color:#195683; color:#FFF; margin-right:0px !important" href="admin_member_registration.php" class="btn blue"> Okay </a>
                     
                    </div>
                     
                    
                </div>
            </div>
        </div>
    </div>
		 

<?php include("footer.php"); ?>
<script>
<?php if(!empty($message)){?>
	$('#new_app_login').show();
<?php } ?>

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
	$('.checkMobile').on('keyup', function(){
		var mobile = $(this).val();
		if(mobile.length > 0 ){
			$.ajax({
				url: "../ajax_page.php?function_name=mobileNo_check&mobile="+mobile,
				type: "POST",
				success: function(data)
				{  
					 if(data>0){
						 $('.checkMobile').val('');
						 alert('Mobile no already registered');
					 }
				}
			});
		}
	});
</script>