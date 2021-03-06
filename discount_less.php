<?php
include('header.php');
include('config.php');
?>

<style>
 
 
.content {
    padding: 30px 0;
}

/***
Pricing table
***/
.pricing {
  position: relative;
  margin-bottom: 15px;
  border: 2px solid #33bacc;
}

.pricing-active {
  border: 2px solid #36d7ac;
  margin-top: -10px;
  box-shadow: 7px 7px rgba(54, 215, 172, 0.2);
}

.pricing:hover {
  border: 2px solid #007787;
}

.pricing:hover h4 {
  color: #36d7ac;
} 

.pricing-head {
  text-align: center;
}

.pricing-head h3,
.pricing-head h4 {
  margin: 0;
  line-height: normal;
}

.pricing-head h3 span,
.pricing-head h4 span {
  display: block;
  margin-top: 5px;
  font-size: 14px;
  font-style: italic;
}

.pricing-head h3 {
  font-weight: 300;
  color: #fafafa; 
  font-size: 27px;
  
 /* border-bottom: solid 2px #e7e0e0;*/
  
}

.pricing-head h4 {
  color: #000;
  padding: 5px 0;
  font-size: 32px;
  font-weight: 300;
  background: #f3f3f3;
  border-bottom: solid 2px #eee ;
}

.pricing-head-active h4 {
  color: #36d7ac;
}

.pricing-head h4 i {
  top: -6px;
  font-size: 18px;
  font-style: normal;
  position: relative;
}

.pricing-head h4 span {
  top: -10px;
  font-size: 14px;
  font-style: normal;
  position: relative;
}

/*Pricing Content*/
.pricing-content li {
  color: #888;
  font-size: 12px;
  padding: 7px 15px;
  border-bottom: solid 1px #f5f9e7;
}  

/*Pricing Footer*/
.pricing-footer {
  color: #777;
  font-size: 11px;
 
  text-align: center;
  padding: 0 20px 19px;
}

/*Priceing Active*/
.price-active,
.pricing:hover {
  z-index: 9;
}

.price-active h4 {
  color: #36d7ac;
}

.no-space-pricing .pricing:hover {
  transition: box-shadow 0.2s ease-in-out;
}

.no-space-pricing .price-active .pricing-head h4,
.no-space-pricing .pricing:hover .pricing-head h4 {
  color: #36d7ac;
  padding: 15px 0;
  font-size: 80px;
  transition: color 0.5s ease-in-out;
}

.yellow-crusta.btn {
  color: #FFFFFF;
  background-color:  #007787; 
}
.yellow-crusta.btn:hover,
.yellow-crusta.btn:focus,
.yellow-crusta.btn:active,
.yellow-crusta.btn.active {
    color: #FFFFFF;
    background-color: #2191a1;
}
  
   
</style> 
  
 
<section class="content-header">
       <center>
      	<h2 class="wow bounce" style=" padding-top:60px; color:#707568"> <strong> 
		DISCOUNT
       </strong></h2>
       </center>
	   </section>
 
   	<div id="service" style="padding: 22px 61px;">
		 
		 
 <div class="container content">
	<?php
				$count=0;
				$query=mysql_query("select * from `service_management` where categroy_type=1");
				while($fetch=mysql_fetch_array($query))
				{
					$count++;	
					$id=$fetch['id'];
					$vendor_id=$fetch['vendor_id']; 
					$r=mysql_query("select * from `vendor` where id='".$vendor_id."'");
					$fet=mysql_fetch_array($r);
					$id=$fet['id']; 
			 	if($count==1 ){ echo '<div class="row">'; }
				?>
				 

		<!-- Pricing -->
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3><img src="<?php echo $company_logo;?>" width="100%" height="150px"></h3>
					<h4> <?php echo $discount;?><i>%</i><span><?php echo $offer;?></span>
					</h4>
				</div>
				 <div class="pricing-footer">
					<p>&nbsp;</p>
					<a href="discount_booking.php?d_id=<?php echo $id;?>" class="btn yellow-crusta">
					Book Now
					</a>
				</div>
			</div>
		</div>
		 <?php  
		 if($count==4){ echo '</div></br></br>';  $count=0;}	
		 } ?>
	</div>


	
	<!--//End Pricing -->
	</div>
</div>
</div>
     
		 
		<!-- end service -->

<?php
include('footer.php');
?>
	