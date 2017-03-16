<?php 
 include("database.php");
include("header.php");
 date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
@$session_id=$_SESSION['id']; 

 $id=$_GET['id'];
 
 
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
    color: #72afd2;
	    color: #23527c;
    text-decoration: underline;	
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <center><h1>
	  MEDICAL SERVICES
       </h1></center>
       
    </section>

    <!-- Main content -->
    <section class="content" >
       	 <div class="row" >
 		 <?php
 				$query=mysql_query("select * from `master_sub_services` where `services_id`='$id'");
				while($fetch=mysql_fetch_array($query))
				{
					$id=$fetch['id'];
					$service_id=$fetch['services_id'];
					$sub_services_name=$fetch['sub_services_name'];
					$icon=$fetch['icon'];
					$sub_services_discription=$fetch['sub_services_discription'];
			?>
 <div class="col-sm-3">
			<div class="box" >							
				<div class="icon">
					<div class="image" style=""><i class="<?php echo $icon; ?>"></i></div>
					<div class="info" style="background-color:white;">
						<h4 class="title"><?php echo $sub_services_name; ?> </h4>
  					<p >
 <?php echo $sub_services_discription; ?>
						</p>
						<div class="more">
							<a href="service_booking.php?s_id=<?php echo $id;?>" title="Title Link" style="font-size:10pt;font-weight:bold;">
							For Booking <i class="fa fa-arrow-circle-o-right "></i>
							</a>
							 </div>
					</div>
				</div>
 
			</div> 
		</div> 
        
         <?php  } ?>
        
 
	</div>
		</div>




<?php include("footer.php");?>