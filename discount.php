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
  
  
  
 .wrapper {
  margin: 50px auto;
  width: 280px;
  height: 370px;
  background: white;
  border-radius: 10px;
  -webkit-box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
  -moz-box-shadow:    0px 0px 8px rgba(0,0,0,0.3);
  box-shadow:         0px 0px 8px rgba(0,0,0,0.3);
  position: relative;
  z-index: 90;
}

.ribbon-wrapper-red {
  width: 85px;
  height: 88px;
  overflow: hidden;
  position: absolute;
  top: -3px;
  right: -3px;
}
.ribbon-wrapper-green {
  width: 85px;
  height: 88px;
  overflow: hidden;
  position: absolute;
  top: -3px;
  left: -3px;
}

.ribbon-red {
    font: bold 15px Sans-Serif;
    color: #fff;
    text-align: center;
    text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    position: relative;
    padding: 7px 0;
    left: -5px;
    top: 15px;
    width: 120px;
    background-color: #ea181e;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ea181e), to(#b90005));
    background-image: -webkit-linear-gradient(top, #ea181e, #b90005);
    background-image: -moz-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -ms-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -o-linear-gradient(top, #BFDC7A, #8EBF45);
    color: #fff;
    -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
}

.ribbon-green {
    font: bold 15px Sans-Serif;
    color: #fff;
    text-align: center;
    text-shadow: rgba(255,255,255,0.5) 0px 1px 0px;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    position: relative;
    padding: 7px 0;
    left: -29px;
    top: 15px;
    width: 120px;
    background-color: #8dc735;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#8dc735), to(#649a12));
    background-image: -webkit-linear-gradient(top, #8dc735, #649a12);
    background-image: -moz-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -ms-linear-gradient(top, #BFDC7A, #8EBF45);
    background-image: -o-linear-gradient(top, #BFDC7A, #8EBF45);
    color: #fff;
    -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
    box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
}

.ribbon-red:before,
.ribbon-red:after{
  content: "";
  border-top: 3px solid #b90005;   
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  position:absolute;
  bottom: -3px;
}

.ribbon-green:after,
.ribbon-green:after{
  content: "";
  border-top: 3px solid #6e8900;   
  border-left: 3px solid transparent;
  border-right: 3px solid transparent;
  position:absolute;
  bottom: -3px;
}

.ribbon-red:before{
  left: 0;
}
.ribbon-green:before{
  right: 0;
}

.ribbon-red:after{
  right: 0;
}
.ribbon-green:after{
  left: 0;
} 
 
  }
</style>
<style>
.box {
    position: relative;
    display: inline-block;
    top: 20px;
    margin-right: 20px;
}
.index {
    background: none repeat scroll 0 0 #0063ff;
    border: 2px solid #ffffff;
    border-radius: 25px;
    color: #fff;
    font-size: 28px;
    font-weight: bold;
    padding: 5px 15px;
    position: absolute;
    right: -10px;
    top: -10px;
    
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
	<div class="row">
		<!-- Pricing -->
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3><img src="images/partner/discount/7.jpg" width="100%" height="150px"></h3>
					<h4> 10<i>%</i>
					<span>
					On Billing</span>
					</h4>
				</div>
				 <div class="pricing-footer">
					<p>&nbsp;</p>
					<a href="javascript:;" class="btn yellow-crusta">
					Book Now
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3><img src="images/partner/discount/6.jpg" width="100%" height="150px"></h3>
					<h4>25<i>%</i>
					<span>
					On Billing</span>
					</h4>
				</div>
				 <div class="pricing-footer">
					<p>&nbsp;</p>
					<a href="javascript:;" class="btn yellow-crusta">
					Book Now
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3><img src="images/partner/discount/9.jpg" width="100%" height="150px"></h3>
					<h4> 70<i>%</i>
					<span>
					100 Rs.Per Ticket</span>
					</h4>
				</div>
				 <div class="pricing-footer">
					<p>&nbsp;</p>
					<a href="javascript:;" class="btn yellow-crusta">
					Book Now
					</a>
				</div>
			</div>
		</div>
		 <div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3><img src="images/partner/discount/8.jpg" width="100%" height="150px"></h3>
					<h4>40<i>%</i>
					<span>
					On Billing</span>
					</h4>
				</div>
				 <div class="pricing-footer">
					<p>&nbsp;</p>
					<a href="javascript:;" class="btn yellow-crusta">
					Book Now
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3><img src="images/partner/discount/1.jpg" width="100%" height="150px"></h3>
					<h4> 50<i>%</i>
					<span>
					Per Ticket </span>
					</h4>
				</div>
				 <div class="pricing-footer">
					<p>&nbsp;</p>
					<a href="service_booking.php" class="btn yellow-crusta">
					Book Now
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3><img src="images/partner/discount/2.jpg" width="100%" height="150px"></h3>
					<h4> 10<i>%</i>
					<span>
					On Billing </span>
					</h4>
				</div>
				 <div class="pricing-footer">
					<p>&nbsp;</p>
					<a href="javascript:;" class="btn yellow-crusta">
					Book Now
					</a>
				</div>
			</div>
		</div>
		 
		<div class="col-md-3">
		 	<div class="pricing hover-effect" style="background-color:#f3f3f3">
			<div class="pricing-footer">
					</br>  
					<a href="discount_booking.php?id=<?php echo $id;?>" class="btn yellow-crusta" style="margin-right:65%; background-color:#007787;">
					Book Now</a>
					
			 </div>
		  
			<div class="pricing-head" style="border-bottom:none;">
					<h3 ><img src="images/partner/discount/3.png" width="60%" height="150px"></h3>
					</br>
					<span style=" color:#E24F55;">
						<span style="font-weight: bold; font-size:16pt;"> 20%</span> DISCOUNT  ON BILLING
					</span>
					 <h4><i>Hiran X-Ray Clinic</i></h4>
			</div>
				 
			</div>
		</div>
		
		<div class="col-md-3">
		 	
			<div class="box">
    <img src="http://placehold.it/150x150" alt="image" />
    <span class="index">1</span>
</div>
		</div>
		<div class="col-md-3">
		 	<div class="wrapper">
		<div class="ribbon-wrapper-red">
		<div class="ribbon-red">FIRSAT</div>
		</div>
		<div class="ribbon-wrapper-green">
		<div class="ribbon-green">KAMPANYA</div>
		</div>
		</div>
		</div>
		<div class="col-md-3">
		 	
			
		</div>
		<div class="col-md-3">
		 	
			
		</div>
		<div class="col-md-3">
		 	
			
		</div>
		<div class="col-md-3">
		 	
			
		</div>
		  
		 
 
 
		<!--//End Pricing -->
	</div>
</div>
</div>
     
		 
		<!-- end service -->

<?php
include('footer.php');
?>
	