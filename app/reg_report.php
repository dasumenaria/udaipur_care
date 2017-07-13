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
			<div class="box-header with-border" style="background-color:#3c8dbc; color:#FFF">
				<h3 class="box-title">Member report</h3>
			</div>
			<!------		Button 	----->
			
				
					
					<div class="input-group">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-6" ><h3>Search By Date</h3>
                                <div class="form-group col-md-8 ">
									<div class="input-group date-picker input-daterange" data-date-format="mm/dd/yyyy">
										<input type="text" class="form-control datepicker" placeholder="From Date" name="from" id="from">
										<span class="input-group-addon">
										to </span>
										<input type="text" class="form-control datepicker"  placeholder="To Date" name="to" id="to">
										
									</div>
									
								</div>
							<div class="col-md-2"><button class="btn btn-red" id="go">GO</button></div>
							</div>
								<div class="col-md-3 "><h3>Records</h3>
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
								</select> </div>
							</div>
						<div class="col-md-3" >
							<h3>Member</h3>
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
							</div>
						</div>
				</div>
					<!-- /.box-header -->
				<div class="box-body" id="data">
					
				</div>
				<!-- /.box-body -->
			
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
<script src="../assest/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script>
 
$(document).ready(function(){
	
 $("#go").click(function(){
	 
var from = $("#from").val();
		var to = $("#to").val();
		
		$.ajax({
			url: "date_vise_member_report.php?from="+from+"&to="+to+"",
				}).done(function(response) {
		   $("#data").html(""+response+"");
			});
		});

});

</script>
<script>
$(document).ready(function(){    
        $(".find_records").on("change",function(){
			
	    var view_u=$(".find_records option:selected").val();
		
	  	$.ajax({
			url: "ajax_view_member.php?view_u="+view_u,
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
			url: "member_report.php?pon="+s,
			}).done(function(response) {
				$("#data").html(""+response+"");
		});
	});	
</script>
<?php 
include("footer.php");
?>

