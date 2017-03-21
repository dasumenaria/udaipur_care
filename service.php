<?php 
include("config.php");
include("header.php");
$service_id=$_GET['id'];
 
?>
<style>
 
.box > .icon { text-align: center; position: relative; }
.box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 66px; height: 66px; border: 8px solid #007787; line-height: 66px; border-radius: 50%; background:#837e7e; vertical-align: middle; background: #007787; }
.box > .icon:hover > .image { background: #007787; }
.box > .icon > .image > i { font-size: 36px !important; color: #fff !important;  }
.box > .icon:hover > .image > i { color: white !important; }
.box > .icon > .info { margin-top: -24px; background:rgba(249, 249, 249, 0); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; }
.box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
.box > .icon > .info > h4.title { font-family: "Roboto",sans-serif !important; font-size: 17px; color: #0A4B7D;; font-weight: 700; }
.box > .icon > .info > p { font-family: "Roboto",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
.box > .icon:hover > .info > h4.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #0A4B7D;  }
.box > .icon > .info > .more a { font-family: "Roboto",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; color: #fff; padding: 6px 8px; background-color: #007787; }
.box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #007787; }

.box .space { height: 30px; }
a {
	outline: none;
	text-decoration: none;
 	color: #23527c;
	text-decoration: none;	
}
</style>

<div class="content-wrapper" style="padding-top:70px; min-height:580px">
    <!-- Content Header (Page header) -->
       <center>
      	<h2 class="wow bounce" style="color:#707568"> <strong> 
        <?php 
	  	$querys=mysql_query("select `service_name` from `master_services` where `id`='$service_id'");
		$ftc=mysql_fetch_array($querys);
		echo $ftc['service_name'].' Services';
		
		?>
       </strong></h2>
       </center>
 <br/><br/>
    <!-- Main content -->
    <section class="content" >         
 		 <?php
 				$query=mysql_query("select * from `master_sub_services` where `services_id`='$service_id' and flag=0 ");
				while($fetch=mysql_fetch_array($query))
				{
					$id=$fetch['id'];
					$service_id=$fetch['services_id'];
					$sub_services_name=$fetch['sub_services_name'];
					$icon=$fetch['icon'];
					 $service_images=$fetch['service_images'];
					$sub_services_discription=$fetch['sub_services_discription'];
				?>
                 <div class="col-sm-4" style="width:25%;">
                    <div class="box">							
                        <div class="icon">
                             <div class="info" style="background-color:white;">
							  <div style=""><img src="images/service_images/<?php echo $service_images;?>" width="90%" height="180px"></div>
                                <h4 class="title"><?php echo $sub_services_name; ?> </h4>
 
                                <div class="more">
                                    <a href="service_booking.php?s_id=<?php echo $id;?>" title="Title Link" style="font-size:10pt;font-weight:bold;">
                                    Book Now <i class="fa fa-arrow-circle-o-right "></i>
                                    </a>
                                </div>
								</br>
                            </div>
                        </div>
         
                    </div> 
                 </div> 
         
         <?php  } ?>
		</div>
		</section>
<?php include("footer.php");?>