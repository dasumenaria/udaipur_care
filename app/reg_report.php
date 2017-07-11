<?php 
include('auth.php'); 
include("../config.php");
include("header.php");

include('function.php');
@$status=$_GET['s'];
$p=$_SESSION['SESSION_ID'];
$session_id=$_SESSION['SESSION_ID'];

@$SESSION_SUBSERVIDE=$_SESSION['SESSION_SUBSERVICE'];
@$SESSION_USERTYPE=$_SESSION['SESSION_USERTYPE']; 
?>
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Member Reg report</h3>
			</div>
			<!------		Button 	----->
			<div class="col-md-12" align="center">
				
					<h3>Member Reg report</h3>
					<div class="input-group">
						<select class="form-control select2me" id="suv_category">
							<option value="">Select...</option>
							<?php
								$service1=mysql_query("select name,id from `register` where `flag`='0'");
								while($ftc_data=mysql_fetch_array($service1))
								{
								$id=$ftc_data['id'];
									$name=$ftc_data['name'];
									$name=decode($name,'UDRENCODE');	
							?>
								<option value="<?php echo $id;?>"><?php echo $name;?></option>
								<?php 	
								}
							?>
						</select>
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

 
	$("#suv_category ").on("change",function(){
		var s=$("#suv_category option:selected").val();
		
		$.ajax({
			url: "member_report.php?pon="+s,
			}).done(function(response) {
				$("#data").html(""+response+"");
		});
	});	
</script>
<?php 
include("footer.php");
?>

