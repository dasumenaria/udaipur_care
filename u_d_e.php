<?php
include('header.php');
include('config.php');

?> 
<style>
 
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
<div id="service" style="margin-top:10px;">
	<div class="row">
	<div class="container">
     <p class="title" style="color:black;font-weight:bold;margin-top:10px;" >Our Services</p>
	 	<h4>Choose from our wide range of services</h4>
		</br>
	 
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	
	<?php
				$count=0;
				$query=mysql_query("select * from `master_services` where flag=0 ");
				while($fetch=mysql_fetch_array($query))
				{
					$count++;		
					$id=$fetch['id'];
					$service_name=$fetch['service_name'];
					$icon=$fetch['icon'];
					
				if($count==1 ){ echo '<div class="row form-group">'; }
				
				?>
	<div class="col-md-3">
      <div class="wrimagecard wrimagecard-topimage">
          <a href="#">
          <div class="wrimagecard-topimage_header" style="background-color:#fff">
            <center><i class="<?php echo $icon; ?>" style="color:#5a454599;"> </i></center>
			<hr></hr>
          </div>
          <div class="wrimagecard-topimage_title" >
	
           <center><h4><a href="discount_user.php?id=<?php echo $id;?>"><?php echo $service_name; ?></a>
             </h4></center>
          </div>
          
        </a>
      </div>
	</div>
	 <?php  if($count==4){ echo '</div>';  $count=0;}
		 } ?>

	
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
