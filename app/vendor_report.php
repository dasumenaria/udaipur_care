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
				<h3 class="box-title">Vendor Report</h3>
			</div>
			<!------		Button 	----->
			<div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
			<div class="row">
			<div class="col-md-12">
			<div class="col-md-6 col-sm-12"><h3>Records</h3>
							<div class="dataTables_length" id="sample_1_length">
							<select name="sample_1_length" aria-controls="sample_1" style="width:161px "class="form-control select2me find_records" id="find_records">
                                <option value="10">Select</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="150">150</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="500">500</option>
                                <option value="1000">1000</option>
                                <option value="2000">2000</option>
                                <option value="3000">3000</option>
							</select> </div></div>
			<div class="col-md-6" >
				
					<h3>Vendor Report</h3>
					<div class="input-group">
						<select class="form-control select2me" id="suv_category">
							<option value="">Select...</option>
							<?php
								$service1=mysql_query("select full_name,id from `vendor` where `flag`='0'");
								while($ftc_data=mysql_fetch_array($service1))
								{
								$id=$ftc_data['id'];
									$name=$ftc_data['full_name'];	
							?>
								<option value="<?php echo $id;?>"><?php echo $name;?></option>
								<?php 	
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
			</div>
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
<script src="../assest/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script>
$(document).ready(function(){    
        $(".find_records").on("change",function(){
			
	    var view_u=$(".find_records option:selected").val();
		
	  	$.ajax({
			url: "ajax_view_vendor.php?view_u="+view_u,
			}).done(function(response) {
		   $("#data").html(""+response+"");
			});
});
});
</script>
<script>

 
	$("#suv_category ").on("change",function(){
		var s=$("#suv_category option:selected").val();
		
		$.ajax({
			url: "view_vendor_report.php?pon="+s,
			}).done(function(response) {
				$("#data").html(""+response+"");
		});
	});	
</script>
<?php 
include("footer.php");
?>

