 <?php 
 include("auth.php");
include("header.php");
include("../config.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
  $message="";

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$description=$_POST['description'];
	$current_date=date('Y-m-d ');
	$sql="insert into `testimonial` set `name`='$name',`description`='$description',`curent_date`='$current_date'";
	
	$r=mysql_query($sql);
	$ids=mysql_insert_id();

	$photo="testimonial".$ids.".jpg";
	// move photo in  floder//
	move_uploaded_file($_FILES["image"]["tmp_name"],"../images/testimonial/".$photo);
	if($r)
	{
		$r=mysql_query("update `testimonial` set `image`='$photo' where id='$ids'");
 
	 }
	}
?>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-footer no-padding">
					<div class="mailbox-controls">
						<h3>Today Testimonial  </h3><hr>
						<form method="post"  id="contact-form" role="form" enctype="multipart/form-data">
							<div class="box-body" style="margin-left:40px;margin-right:40px;">
								<div class="row">
									<div class="col-md-6">		
										<div class="form-group">
											<label>Name</label>
											<div class="input-group">
												<input name="name" type="text" class="form-control" placeholder="Enter Name">
												<div class="input-group-addon">
													<i class="fa fa-book"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label >Company Logo</label>
											<div class="input-group">
												<input type="file" class="form-control"  name="image">
												<div class="input-group-addon">
													<i class="fa fa-upload"></i>
												</div>
											</div>
										</div>
									</div>		
									<div class="col-md-6">		
										<div class="form-group">
											<label>Description</label>
											<div >
												<textarea name="description" type="text" class="form-control" placeholder="Enter Description"></textarea>
											</div>
										</div>
									</div>
									<div class="col-md-12" align="center">		
										<div class="box-footer">
											<input name="submit" type="submit" class="btn btn-primary" id="submit" value="Register" >
										</div>
									</div>
								</div>		
							</div> 
						</form>
					</div>
				</div>
			</div>
          <!-- /. box -->
		</div>
        <!-- /.col -->
	</div>
      <!-- /.row -->
</section>
<?php 
include("footer.php");
?>
 