<?php 
include('auth.php'); 
include("../config.php");
include("header.php");
@$status=$_GET['s'];
@$SESSION_SUBSERVIDE=$_SESSION['SESSION_SUBSERVICE'];
@$SESSION_USERTYPE=$_SESSION['SESSION_USERTYPE']; 
?>
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Booking Report</h3>
			</div>
			<!------		Button 	----->
			<div class="box col-md-12">
				<div class="box col-md-6" align="center">
					<h3>Service Category</h3>
					<div class="input-group">
						<select name="admin_book_service" class="form-control select2me" id="suv_category">
							<option id="" value="">Select...</option>
							<?php
								$service1=mysql_query("select * from `master_sub_services` where `flag`='0'");
								while($ftc_data=mysql_fetch_array($service1))
								{
									echo "<option value=".$ftc_data['id'].">".$ftc_data['sub_services_name']."</option>";
								}
							?>
						</select>
					</div>
				</div>
					<!-- /.box-header -->
				<div class="box-body" id="data">
					
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
<script src="../assest/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script>

 
	$("#suv_category").on("change",function(){
		var s=$(this).val();
		 
		$.ajax({
			url: "view_report.php?pon="+s,
			}).done(function(response) {
				$("#data").html(""+response+"");
		});
	});	
</script>
<?php 
include("footer.php");
?>

