<?php 
	include("config.php");
	include("header.php");  
?>
<div id="service">
	<div class="container">
		<div class="box-body" style="background:white; margin-left:12px;">
			 <!--1--->
			<?php
		
				$r=mysql_query("select `id`,`company_logo` from `vendor` where `flag`='0'");
				
				$i=0;
				while($row=mysql_fetch_array($r))
				{
					$i++;
					$id=$row['id'];
					$company_logo=$row['company_logo'];
					
			?>
			<div class="col-md-3">
				<div class="form-group">
					<center><img src="images/vendor/<?php echo $company_logo; ?>" width="200px" height="200px"></center>
				</div>
			</div>
			<?php } ?>
		</div>
	<!--6--->
	</div>
</div>
<?php 
include("footer.php");
?>