<?php
include('header.php');
include('config.php');
?>  
<style>
.main-timeline .timeline{
    text-align: center;
    padding: 0;
}
.main-timeline .timeline-icon{
    padding: 45px 0 35px;
    background: #58b25e;
    border-radius: 0 0 50% 50%;
}
.main-timeline .timeline-icon i{
    width: 80px;
    height: 80px;
    line-height: 80px;
    border-radius: 50%;
    background: #fff;
    font-size: 45px;
}
.main-timeline .timeline-content{
    padding: 0 10px 20px;
}
.main-timeline .year{
    font-size: 16px;
    font-weight: bold;
    color: #58b25e;
}
.main-timeline .post{
    font-size: 18px;
    font-weight: bold;
    color: #000;
}
.main-timeline .description{
    font-size: 14px;
    color: #555;
}
.main-timeline .timeline:nth-child(2n) .timeline-icon{
    padding: 35px 0 45px;
    border-radius: 50% 50% 0 0;
}
.main-timeline .timeline:nth-child(2n) .timeline-content{
    padding: 20px 10px 0;
}
.main-timeline .timeline:nth-child(2n) .timeline-icon{ background: #9f84c4; }
.main-timeline .timeline:nth-child(3n) .timeline-icon{ background: #f35958; }
.main-timeline .timeline:nth-child(4n) .timeline-icon{ background: #e67e49; }
.main-timeline .timeline:nth-child(2n) .year{ color: #9f84c4; }
.main-timeline .timeline:nth-child(3n) .year{ color: #f35958; }
.main-timeline .timeline:nth-child(4n) .year{ color: #e67e49; }
@media only screen and (max-width: 990px){
    .main-timeline .timeline{
        margin-bottom: 20px;
    }
}

</style>		
		<div id="service">
	 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="col-md-2 col-sm-4 timeline">
                    <div class="timeline-content">
                        <div class="year">2011-2012</div>
                        <div class="post">Web Desginer</div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, tenetur.
                        </p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                </div>
 
                <div class="col-md-2 col-sm-4 timeline">
                    <div class="timeline-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="timeline-content">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, tenetur.
                        </p>
                        <div class="post">Web Developer</div>
                        <div class="year">2012-2013</div>
                    </div>
                </div>
 
                <div class="col-md-2 col-sm-4 timeline">
                    <div class="timeline-content">
                        <div class="year">2013-2014</div>
                        <div class="post">Web Desginer</div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, tenetur.
                        </p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                </div>
				<div class="col-md-2 col-sm-4 timeline">
                    <div class="timeline-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="timeline-content">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, tenetur.
                        </p>
                        <div class="post">Web Developer</div>
                        <div class="year">2012-2013</div>
                    </div>
                </div>
				 <div class="col-md-2 col-sm-4 timeline">
                    <div class="timeline-content">
                        <div class="year">2013-2014</div>
                        <div class="post">Web Desginer</div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, tenetur.
                        </p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                </div>
				<div class="col-md-2 col-sm-4 timeline">
                    <div class="timeline-icon">
                        <i class="fa fa-rocket"></i>
                    </div>
                    <div class="timeline-content">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, tenetur.
                        </p>
                        <div class="post">Web Developer</div>
                        <div class="year">2012-2013</div>
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

		</div>
		</br>
		<!-- end service -->

<?php
include('footer.php');
?>
	