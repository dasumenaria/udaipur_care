<?php
include('header.php');
include('config.php');
?>
<style>
.aclass{
	
    text-decoration: none;
    color: #fff;
    padding: 1px 1px;
    background-color: #1BBC9B;
}
.aclass:hover {
	color: #fff !important;
}
</style>
		<!-- start service -->
		<div id="service">
			<div class="container">
            
            <?php
				$count=0;
				$sql="select `id`,`service_name`,`discription`,`icon` from master_services where flag=0";
				$fet=mysql_query($sql);
				while($result=mysql_fetch_array($fet))
				{ 
					$count++; 
                	$id=$result['id'];
					$service_name=$result['service_name'];
					$discription=$result['discription'];
					$icon=$result['icon'];
					   
				
				if($count==1 ){ echo '<div class="row">'; }?>
				
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.1s">
								<i class="<?php echo $icon; ?>"></i>
							</div>
							<div class="media-body wow fadeIn">
								<h3 class="media-heading"><?php echo $service_name; ?></h3>
								<p><?php echo $discription; ?></p>
							</div>
						</div>
                        <div align="center" class="col-md-12">
                        	<div style="width:45%">
                            <a href="service.php?id=<?php echo $id;?>" class="btn btn-block btn-social btn-bitbucket aclass ">
                                <i class="fa fa-arrow-circle-right"></i> More Services
                            </a>
                            </div>
                        </div>
					</div>
				 
               <?php
 				if($count==3){ echo '</div>';  $count=0;}	
					}
				?>
				</div>
			</div>
		</div>
		<!-- end service -->

<?php
include('footer.php');
?>
	