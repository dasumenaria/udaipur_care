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
  border: 3px solid #eee;
}

.pricing-active {
  border: 3px solid #36d7ac;
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
  background: #007787;
  border-bottom: solid 3px #e7e0e0;
  
}

.pricing-head h4 {
  color: #bac39f;
  padding: 5px 0;
  font-size: 32px;
  font-weight: 300;
  background: #fbfef2;
  border-bottom: solid 1px #f5f9e7;
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
  background-color: #f3c200;
}
.yellow-crusta.btn:hover,
.yellow-crusta.btn:focus,
.yellow-crusta.btn:active,
.yellow-crusta.btn.active {
    color: #FFFFFF;
    background-color: #cfa500;
}
</style>
  <link rel="stylesheet" href="assest/dist/css/AdminLTE.min.css">
<section class="content-header">
       <center>
      	<h2 class="wow bounce" style=" padding-top:70px; color:#707568"> <strong> 
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
					<h3><span><img src="images/service_images/2.jpg" width="100%" height="150px"></span></h3>
					<h4><i>$</i>5<i>.49</i>
					<span>
					Per Month </span>
					</h4>
				</div>
				 
				<div class="pricing-footer">
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
					</p>
					<a href="javascript:;" class="btn yellow-crusta">
					Sign Up
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3> 
					<img src="images/service_images/3.jpg" width="100%" height="150px"> 
					</h3>
					<h4><i>$</i>5<i>.49</i>
					<span>
					Per Month </span>
					</h4>
				</div>
				 </br>
				<div class="pricing-footer">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
					</br>
					<a href="javascript:;" class="btn yellow-crusta">
					Sign Up
					</a>
				</div>
			</div>
		</div>
		 
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3><img src="images/service_images/4.jpg" width="100%" height="150px"> </h3>
					<h4><i>$</i>5<i>.49</i>
					<span>
					Per Month </span>
					</h4>
				</div>
				 
				<div class="pricing-footer">
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
					</p>
					<a href="javascript:;" class="btn yellow-crusta">
					Sign Up
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3><img src="images/service_images/5.jpg" width="100%" height="150px"> </h3>
					<h4><i>$</i>5<i>.49</i>
					<span>
					Per Month </span>
					</h4>
				</div>
				 <div class="pricing-footer">
					<p>
						 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
					</p>
					<a href="javascript:;" class="btn yellow-crusta">
					Sign Up
					</a>
				</div>
			</div>
		</div>
		<!--//End Pricing -->
	</div>
</div>
</div>
     
		 
		<!-- end service -->

<?php
include('footer.php');
?>
	