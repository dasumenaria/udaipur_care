<?php
include('header.php');
include('config.php');
?>
 <style> 
 .serviceBox{text-align: center;margin-top: 60px;position: relative;z-index: 1; margin-bottom: 21px;}
.serviceBox .service-icon{width: 78px;height: 78px;border-radius:3px;background: #fff;margin: 0 auto;position: absolute;top: -34px;left: 0;right: 0;z-index: 1;transition: all 0.3s ease-out 0s;}
.serviceBox:hover .service-icon{transform: rotate(45deg);}
.serviceBox .service-icon span{display: inline-block;width: 60px;height: 60px;line-height: 60px;border-radius:3px;background: #727cb6;font-size: 30px;color: #fff;margin: auto;position: absolute;top: 0;left: 0;bottom: 0;right: 0;transition: all 0.3s ease-out 0s;}
.serviceBox .service-icon span i{transition: all 0.3s ease-out 0s;}
.serviceBox:hover .service-icon span i{transform: rotate(-45deg);}
.serviceBox .service-content{background: #fff;border: 1px solid #e7e7e7;border-radius: 3px;padding: 55px 15px;position: relative;}
.serviceBox .service-content:before{content: "";display: block;width: 80px;height: 80px;border: 1px solid #e7e7e7;border-radius: 3px;margin: 0 auto;position: absolute;top: -37px;left: 0;right: 0;z-index: -1;transition: all 0.3s ease-out 0s;}
.serviceBox:hover .service-content:before{transform: rotate(45deg);}
.serviceBox .title{font-size: 17px;font-weight: 500;color: #324545;text-transform: uppercase;margin: 0 0 25px 0;position: relative;transition: all 0.3s ease-out 0s;}
.serviceBox:hover .title{color: #727cb6;}
.serviceBox .description{font-size: 14px;font-weight: 500;line-height: 24px;margin-bottom: 0;}
.serviceBox .read-more{display: block;width: 40px;height: 40px;line-height: 38px;border-radius: 50%;background: #fff;border: 1px solid #e7e7e7;font-size: 14px;color: #c4c2c2;margin: 0 auto;position: absolute;bottom: -17px;left: 0; right: 0;transition: all 0.3s ease-out 0s;}
.serviceBox .read-more:hover{border: 1px solid #727cb6;color: #727cb6;text-decoration: none;}
.serviceBox.green .service-icon span{ background: #008b8b; }
.serviceBox.blue .service-icon span{ background: #3498db; }
.serviceBox.orange .service-icon span{ background: #e67e22; }
.serviceBox.green:hover .title{ color: #008b8b; }
.serviceBox.blue:hover .title{ color: #3498db; }
.serviceBox.orange:hover .title{ color: #e67e22; }

.serviceBox:hover .read-more{border: 1px solid #727cb6;color: #727cb6;}
.serviceBox.green:hover .read-more{border: 1px solid #008b8b;color: #008b8b;}
.serviceBox.blue:hover .read-more{border: 1px solid #3498db;color: #3498db;}
.serviceBox.orange:hover .read-more{border: 1px solid #e67e22;color: #e67e22;}
 </style>
 
		<!-- start service -->
		<div id="service">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
	<div class="row">
	<div class="col-md-3 col-sm-6 col-xsx-6">
            <div class="serviceBox">
                <div class="service-icon">
                    <span><i class="fa fa-id-card-o"></i></span>
                </div>
                <div class="service-content">
                    <h3 class="title">Web Desinging</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in volutpat elit. Class aptent taciti.</p>
                    <a href="WebDesigning.html" class="read-more fa fa-plus" data-toggle="tooltip" title="Read More"></a>
                </div>
            </div>
        </div>
 
        <div class="col-md-3 col-sm-6 col-xsx-6">
            <div class="serviceBox green">
                <div class="service-icon">
                    <span><i class="fa fa-desktop"></i></span>
                </div>
                <div class="service-content">
                    <h3 class="title">Web Development</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in volutpat elit. Class aptent taciti.</p>
                    <a href="WebDevelopment.html" class="read-more fa fa-plus" data-toggle="tooltip" title="Read More"></a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xsx-6">
            <div class="serviceBox orange">
                <div class="service-icon">
                    <span><i class="fa fa-tablet"></i></span>
                </div>
                <div class="service-content">
                    <h3 class="title">Mobile App Devlopment</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in volutpat elit. Class aptent taciti.</p>
                    <a href="MobileAppDevelopment.html" class="read-more fa fa-plus" data-toggle="tooltip" title="Read More"></a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xsx-6">
            <div class="serviceBox blue">
                <div class="service-icon">
                    <span><i class="fa fa-shopping-cart"></i></span>
                </div>
                <div class="service-content">
                    <h3 class="title">E-Commarce</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean in volutpat elit. Class aptent taciti.</p>
                    <a href="ECommarce.html" class="read-more fa fa-plus" data-toggle="tooltip" title="Read More"></a>
                </div>
            </div>
        </div>
	</div>
</div>
 
            </div>
        </div>
    </div>

</div>

		</div>
		</br>
		<!-- end service -->

<?php
include('footer.php');
?>
	