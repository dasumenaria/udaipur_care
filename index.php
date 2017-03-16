<?php
include("database.php");
include("header.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
@$session_id=$_SESSION['id']; 
 ?>

  <!-- Full Width Column -->
  
  <div class="content-wrapper">
  <div class="box box-solid" >
              <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="images/slider/1.jpg" alt="First slide"  >
					</div>
                  <div class="item">
                    <img src="images/slider/2.jpg" alt="Second slide"  >
					 

                     
                  </div>
                  <div class="item">
                    <img src="images/slider/3.jpg" alt="Third slide"  >
					</div>
                </div>
               </div>
            </div>
            <!-- /.box-body -->
          </div> 
		  <section class="content-header">
        <h1>
         SERVICES
          </h1>
              </section>
	  <section class="content">
	<div class="row" style="background:white;">
	
   <?php
                $sql="select * from master_services where flag=0";
				$fet=mysql_query($sql) or die(mysql_error());
				$count=0;
				while($result=mysql_fetch_array($fet))
					{  
                $id=$result['id'];               
 
 ?>	
	
		<div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon " style="background:#f9f9f900 !important; color:black !important;"><i class="<?php echo $result['icon']; ?>"></i></span>

            <div class="info-box-content" style="min-height:230px !important;">
			 <span class="info-box-number" style="margin-top:10px;"><?php echo $result['service_name']; ?></span>
			 <hr/>
              <span class="info-box-text" style="line-height: 24px;" ><?php echo $result['discription']; ?></span>
			  
			<a  href="service.php?id=<?php echo $id;?>" class="btn btn-block btn-social btn-bitbucket ">
                <i class="fa fa-arrow-circle-right"></i> For More Services
              </a>
			</div>
			
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
					<?php } ?>		 	 		 
	</div>
         </section>
		 
		<div class="cn_header">
		<div class="row">
		 
		<div class="col-md-12 col-sm-8">
		<h1 class="wow bounce"><strong style="color:#93CA3A;">About Us</strong></h1>

		<h3>“WE BELIVE THAT IT IS OUR MORAL OBLIGATION TO LOOK AFTER OUR ELDERS & IT IS OUR DUTY TO PROVIDE THEM BEST CARE POSSIBLE.” </h3>
		<span  style="font-size:12pt;">“Udaipur Care”is a mission initiated by District Administration Udaipur and supported by various organizations mainly Rotary Udaipur Mewar Service Trust, PHP Poets IT Solutions Pvt. Ltd and Fusion Business Solutions Pvt. Ltd. We established a “Senior Citizen Helpline” in Udaipur for welfare of senior citizens of Udaipur. This helpline enables senior citizens to reach out for help & assistance for making their day-to day lives safe & comfortable.
		<p  style="font-size:12pt;">‘Udaipur Care” provides various medical and non-medical personal care services to senior citizens at their door step on discounted/subsidized rates in reasonable time. Our aim is to ensure that senior citizens remain safe with comfort. We are committed to serve them through trusted information and reliable services so that they can feel safe, confident, valued and can live with dignity.</p>
		
		</span>
		
		</div>
		<div class="col-md-2 col-sm-2"></div>
		</div>

		<div class="print"></div>
		</div>
		</br>
		<div id="team" style="background:white;">
			<div class="container">
				<div class="row">
                	<div class="col-md-4">
                        <div class="col-md-12" >
                          <center>  <h2 class="wow bounce" style="color:black; font-weight:bold;">Initiated By</h2></center>
                        </div>
						</br>
                        <div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
                            <img src="images/logo/6.png"class="img-responsive" alt="team img" height="50px !important"> 
                                <label><a href=" ">District Administration,Udaipur</a></label>   
                        </div>
                         
                     </div>
                     <div class="col-md-8">
                     	<div class="col-md-12">
                         <center><h2 class="wow bounce" style="color:black; font-weight:bold;">Support By</h2></center>
                        </div>
						</br>
                        <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.6s">
                            <a target="_blank" href="http://www.rotaryclubmewar.org/"><img src="images/logo/logo.png" style="height:120px !important" class="img-responsive" alt="team img"></a>
                             
                            <label></br><a href="http://www.rotaryclubmewar.org/">Rotary Udaipur Mewar Service Trust</a></label>   
                        </div>
                        
                        <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <a target="_blank" href=""><img src="images/logo/logo-fusion.png" style="height:120px !important"  class="img-responsive" alt="team img"></a>
                        
                        <label></br><a href="http://www.fusionoutsourcing.com/">Fusion Business Solutions Pvt. Ltd.</a></label>   
                        </div>
                        
                        <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
                            <a target="_blank" href="http://phppoets.com/"><img src="images/logo/7.png"  height="180px;" style="margin-top:15px" class="img-responsive" alt="team img"></a>
                            
                            <label style="margin-top:12px;"></br></br> 
                            <a href="http://phppoets.com//">PHP Poets IT Solutions Pvt. Ltd.</a></label>   
                        </div>
                     </div>
  

				</div>
			</div>
		</div>
	</br> 
		
		<div class="cn_header" style="background:url('images/s.jpg.');">
		
		 <div id="row">			
			<div class="col-md-2">
			</br>
	 
			<h2><strong>Udaipur Care</strong></h2>
			<p>We belive that it is our moral oblaigation to look after our Elders & It is our duty to proovide them best care possible. </p>
			 
  
			</div>

			
			<div class="col-md-2">
			</br>
			 			<h2>Visit Office</h2>
							</br>
							<p style="margin-top:-30px;"><i class="fa fa-map-marker too-icon" style="color:#3C8DBC"></i> &nbsp; Rotary Udaipur Mewar Service Trust 11-12,GuruvRamdas Colony Opposite M.B. College Udaipur-313001(Raj.) </p>
							<p><i class="fa fa-phone too-icon"style="color:#3C8DBC"></i> &nbsp;0294-2490491, 2490492 <i class="fa fa-envelope-o too-icon" style="color:#3C8DBC"></i> &nbsp; helpline@udaipurcare.com</p>
			 </div>
 		</div
			<!-----form ---->
			<div class="col-md-8">
			</br></br>
			 <form class="form-horizontal" >
              <div class="box-body">
                <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputname" placeholder="Full Name" name="full_name"   >
                  </div>
					
                </div>
                <div class="form-group">
                  <div class="col-sm-5">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email"  >
                  </div>
				  <div class="col-sm-5">
                    <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No." >
                  </div>
                </div>
				<div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputname" placeholder="Message" name="message"  >
                  </div>
					
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                 <button type="submit" class="btn btn-info pull-right">Sign in</button>     
                  </div>
                </div>
              </div>
             </form>
			</div>
			
		</div>
   
		  
		</div>  
  </div>
  <!-- /.content-wrapper -->
<?php include("footer.php");?>