<?php
include('header.php');
include('config.php');

?> 
<style>
#team img {
    border:none !important;
    display: inline-block;
    padding: 5px !important; 
    transition: all 0.4s ease-in;
	background-size: cover;

}
  
#background-carousel{
	position:absolute;
	width:100%;
	height:400px;
	z-index:-1;
}
.carousel,
.carousel-inner {
	width:100%;
	height:100%;
	z-index:0;
	overflow:hidden;
}
.item {
	width:100%;
	height:100%;
	background-position:center center;
	background-size:cover;
	z-index:0;
}
 
#content-wrapper {
	position:absolute;
	z-index:1 !important;
	min-width:100%;
	min-height:100%;
}
.well {
    opacity:0.90

}

.title{ color:white; font-size:40px; }
.wrimagecard{	
	margin-top: 0;
    margin-bottom: 1.5rem;
    text-align: left;
    position: relative;
    background: #fff;
    box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
    border-radius: 4px;
    transition: all 0.3s ease;
}
.wrimagecard .fa{
	position: relative;
    font-size: 70px;
}
.wrimagecard-topimage_header{
padding: 20px;
}
a.wrimagecard:hover, .wrimagecard-topimage:hover {
    box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
}
.wrimagecard-topimage a {
    width: 100%;
   
    display: block;
}
.wrimagecard-topimage_title {
    padding: 20px 24px;
    height: 80px;
    padding-bottom: 0.75rem;
    position: relative;
}
.wrimagecard-topimage a {
    border-bottom: none;
    text-decoration: none;
    color: #525c65;
    transition: color 0.3s ease;
}

/* */  

.contact .fa:before {
  display: inline-block;
  opacity: 0.7;
}

.contact li {
  display: inline-block;
  list-style-type: none;
  margin: 0 1em;
  text-align: center;
}

.contact p {
  text-align: center;
}

.contact {
  display: inline-block;
  margin: 0 auto;
  padding-left: 0;
}

.cont {
  text-align: center;
}

 

section {
    padding-top: 100px;
    
}

.quote {
    color: rgba(0,0,0,.1);
    text-align: center;
    margin-bottom: 30px;
}
 ---------------------------*/
 
#fade-quote-carousel.carousel .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-inner .active {
  opacity: 1;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
} 
#fade-quote-carousel.carousel .carousel-indicators > li {
  background-color: #e84a64;
  border: none;
}
#fade-quote-carousel blockquote {
    text-align: center;
 
}
#fade-quote-carousel .profile-circle {
   
    margin: 0 auto;
    border-radius: 100px;
}

</style>  
<section id="home" style="text-align:right">
	<div id="background-carousel">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active" style="background-image:url(https://understandsolar.com/wp-content/uploads/2016/12/Tesla-powerwall-II-1024x520.jpg)"></div>
				<div class="item" style="background-image:url(http://lorempixel.com/1200/800/food/1/)"></div>
				<div class="item" style="background-image:url(https://www.loyservice.com/wp-content/uploads/2015/03/b1.jpg)"></div>  
			</div>
		</div>
	</div>
	<div id="content-wrapper">
		<div class="container">
			<div class="page-header"><p class="title">Let us help</p></div>
			  <!--div class="">
				 
					<div class="row">
						<div class="col-md-5">
							<select name="name" class="form-control" style="  height:60px">
								<option value='	1'>1</option>
								<option value='	1'>2</option>
								<option value='	1'>3</option>
							</select>
						</div>
						<div class="col-md-5">
							<select name="name" class="form-control" style=" height:60px">
								<option value='	1'>1</option>
								<option value='	1'>2</option>
								<option value='	1'>3</option>
							</select>
						</div>
					</div>
				 
			</div-->
		</div>
	</div>		
</section>
<div id="service" style="margin-top:350px;">
	<div class="row">
	<div class="container">
     <p class="title" style="color:black;font-weight:bold;margin-top:10px;" >Our Services</p>
	 	<h4>Choose from our wide range of services</h4>
		</br>
	  <div class="row">
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<div class="container-fluid">
	<div class="row">
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:#f5f5f5">
            <center><i class="fa fa-medkit" style="color:#5a454599;"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title" >
           <center> <h4>Medical
             </h4></center>
          </div>
          
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:#f5f5f5">
             <center><i class="fa fa-cutlery" style="color:#5a454599;"> </i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4> Food and Diet
            <div class="pull-right badge" id="WrInformation"></div></h4>
          </div>
         
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
	<div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:#f5f5f5">
            <center><i class="fa fa-home" style="color:#5a454599;"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Repair and Maintenance
             
          </div>
        </a>
      </div>
      </div>
	  <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:#f5f5f5">
             <center><img src="images/service/wash.png" style="color:#5a454599;height:70px"></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Laundry
            <div class="pull-right badge" id="WrGridSystem"></div></h4>
          </div>
          
        </a>
      </div>
	</div>
	
    <div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:#f5f5f5">
           <center><img src="images/service/garden.png" style="color:#000;height:70px"></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Gardening 
            <div class="pull-right badge" id="WrControls"></div></h4>
          </div>
        </a>
      </div>
</div>

	
	
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
            <div class="wrimagecard-topimage_header" style="background-color:#f5f5f5">
           <center><i class="fa fa-cut" style="color:#5a454599;"> </i></center> 
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Hair and Salon 
            <div class="pull-right badge" id="WrNavigation"></div></h4>
          </div>
          
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
         <div class="wrimagecard-topimage_header" style="background-color:#f5f5f5">
            <center><i class="fa fa-briefcase" style="color:#5a454599;"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>
			Shoe Repair and Washing
            <div class="pull-right badge" id="WrThemesIcons"></div></h4>
          </div>
        </a>
      </div>
	</div>
	<div class="col-md-3 col-sm-4">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:#f5f5f5">
            <center><i class = "fa fa-motorcycle "style="color:#5a454599;"></i></center>
          </div>
          <div class="wrimagecard-topimage_title">
            <h4>Vehicle Services and Maintenance
            <div class="pull-right badge" id="WrControls"></div></h4>
          </div>
        </a>
      </div>
</div>
 </div>
</div>
	</div>
	
	</div>
	</div>
</div> 
<div id="about">
			<div class="container">
				<div class="row">
                 <div class="col-md-12 col-sm-12" style="margin-top: -30px;">
						<center><h2 class="wow bounce"> <strong>What We Offer</strong></h2></center>
						<div class="cont">
  <ul class="contact">
     
   <li style="text-align: left;">
      <p><i class="fa fa-tree fa-3x"></i></p>
      <p><strong>20%</strong></br>Gardening</p>
    </li>
    <li style="text-align: left;">
      <p><i class="fa fa-cut fa-3x"></i></p>
      <p><strong>40%</strong></br>Hair and Salon</p>
    </li>
    <li style="text-align: left;">
      <p><i class="fa fa-cutlery fa-3x"></i></p>
      <p><strong>10%</strong></br>Food and Diet</p>
    </li>
	<li style="text-align: left;">
      <p><i class="fa fa-tree fa-3x"></i></p>
      <p><strong>20%</strong></br>Gardening</p>
    </li>
    <li style="text-align: left;">
		  <p><i class="fa fa-cut fa-3x"></i></p>
		  <p><strong>40%</strong></br>Hair and Salon</p>
		</li>
		<li style="text-align: left;">
		  <p><i class="fa fa-cutlery fa-3x"></i></p>
      <p><strong>10%</strong></br>Food and Diet</p>
    </li>
  </ul>
</div>
						<p  style="font-size:12pt;"></p> 
					</div>
					 
				</div>
			</div>
		</div> 
<div class="col-md-12 col-sm-12" style="margin-top:10px;">
						<center><h2 class="wow bounce"> <strong>Testimonial</strong></h2></center>
						</div>
<section id="carousel" style=" height: 400px !important;">    				
 
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                   
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
				    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>	
						<center><h5 class="wow bounce"> <strong>Testimonial: lakshit</strong></h5></center>
				    </div>
				    
				    <div class="active item">
                        <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
				    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
						<center><h5 class="wow bounce"> <strong>Testimonial: dsu menaria</strong></h5></center>
				    </div>
                    
                     
				  </div>
				</div>
			</div>							
		</div>
	 
</section>
 
		</div>
 

 		<!-- end service -->

<?php
include('footer.php');
?>

	<script>
    $('#myCarousel').carousel({
        pause: 'none'
	})
</script>
