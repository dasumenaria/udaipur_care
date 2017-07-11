<?php
include('header.php');
include('config.php');
?>  
<style>
.main-timeline .timeline{
    padding: 0 2px;
    position: relative;
}
.main-timeline .timeline-icon{
    display: block;
    text-align: center;
    padding: 20px 0 55px 0;
    z-index: 1;
    position: relative;
}
.main-timeline .timeline:nth-child(2n) .timeline-icon{
    padding: 55px 0 20px 0;
}
.main-timeline .timeline-icon:before{
    content: "";
    width: 1px;
    height: 75%;
    background: #39ae99;
    margin: 0 auto;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:nth-child(2n) .timeline-icon:before{
    bottom: auto;
    top: 0;
}
.main-timeline .timeline:hover .timeline-icon:before{
    background: #555;
}
.main-timeline .timeline-icon i{
    width: 45px;
    height: 45px;
    line-height:45px;
    border-radius: 50%;
    background: #39ae99;
    font-size: 14px;
    color: #fff;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .timeline-icon i{
    background: #555;
    animation: icon-load 2.5s ease 0s infinite;
}
.main-timeline .border{
    height: 15px;
    background: #39ae99;
    margin-bottom: 20px;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .border{
    background: #555;
}
.main-timeline .timeline:first-child .border{
    border-radius: 4px 0 0 4px;
}
.main-timeline .timeline:last-child .border{
    border-radius: 0 4px 4px 0;
}
.main-timeline .timeline:nth-child(2n) .border{
    margin: 18px 0 0 0;
}
.main-timeline .timeline-content{
    padding: 15px;
    border: 1px solid #ddd;
    background: #f9f9f9;
    border-radius: 3px;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .timeline-content{
    background: #555;
}
.main-timeline .title{
    font-size: 18px;
    font-weight: 700;
    color: #39ae99;
    text-transform: uppercase;
    margin: 0 0 10px 0;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .title{
    color: #fff;
}
.timeline-content .description{
    font-size: 14px;
    color: #888;
    margin: 0;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .description{
    color: #fff;
}
@keyframes icon-load{
    0%{ transform: rotate(-12deg); }
    8%{ transform: rotate(12deg); }
    10%{ transform: rotate(24deg); }
    18%,20%{ transform: rotate(-24deg); }
    28%,30%{ transform: rotate(24deg); }
    38%,40%{ transform: rotate(-24deg); }
    48%,50%{ transform: rotate(24deg); }
    58%,60%{ transform: rotate(-24deg); }
    68%{ transform: rotate(24deg); }
    100%,75%{ transform: rotate(0deg); }
}
@media only screen and (max-width: 990px){
    .main-timeline .timeline{
        margin-bottom: 20px;
    }
}
@media only screen and (max-width: 767px){
    .main-timeline .timeline-icon{
        padding-top: 0;
    }
    .main-timeline .timeline:nth-child(2n) .timeline-icon{
        padding-bottom: 0;
    }
    .main-timeline .border{
        margin-bottom: 10px;
    }
    .main-timeline .timeline:nth-child(2n) .border{
        margin: 10px 0 0 0;
    }
    .main-timeline .timeline-content{
        text-align: center;
    }
}
.main-timeline .timeline{
    padding: 0 2px;
    position: relative;
}
.main-timeline .timeline-icon{
    display: block;
    text-align: center;
    padding: 20px 0 55px 0;
    z-index: 1;
    position: relative;
}
.main-timeline .timeline:nth-child(2n) .timeline-icon{
    padding: 55px 0 20px 0;
}
.main-timeline .timeline-icon:before{
    content: "";
    width: 1px;
    height: 75%;
    background: #39ae99;
    margin: 0 auto;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: -1;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:nth-child(2n) .timeline-icon:before{
    bottom: auto;
    top: 0;
}
.main-timeline .timeline:hover .timeline-icon:before{
    background: #555;
}
.main-timeline .timeline-icon i{
    width: 45px;
    height: 45px;
    line-height:45px;
    border-radius: 50%;
    background: #39ae99;
    font-size: 14px;
    color: #fff;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .timeline-icon i{
    background: #555;
    animation: icon-load 2.5s ease 0s infinite;
}
.main-timeline .border{
    height: 15px;
    background: #39ae99;
    margin-bottom: 20px;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .border{
    background: #555;
}
.main-timeline .timeline:first-child .border{
    border-radius: 4px 0 0 4px;
}
.main-timeline .timeline:last-child .border{
    border-radius: 0 4px 4px 0;
}
.main-timeline .timeline:nth-child(2n) .border{
    margin: 18px 0 0 0;
}
.main-timeline .timeline-content{
    padding: 15px;
    border: 1px solid #ddd;
    background: #f9f9f9;
    border-radius: 3px;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .timeline-content{
    background: #555;
}
.main-timeline .title{
    font-size: 18px;
    font-weight: 700;
    color: #39ae99;
    text-transform: uppercase;
    margin: 0 0 10px 0;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .title{
    color: #fff;
}
.timeline-content .description{
    font-size: 14px;
    color: #888;
    margin: 0;
    transition: all 0.3s ease 0s;
}
.main-timeline .timeline:hover .description{
    color: #fff;
}
@keyframes icon-load{
    0%{ transform: rotate(-12deg); }
    8%{ transform: rotate(12deg); }
    10%{ transform: rotate(24deg); }
    18%,20%{ transform: rotate(-24deg); }
    28%,30%{ transform: rotate(24deg); }
    38%,40%{ transform: rotate(-24deg); }
    48%,50%{ transform: rotate(24deg); }
    58%,60%{ transform: rotate(-24deg); }
    68%{ transform: rotate(24deg); }
    100%,75%{ transform: rotate(0deg); }
}
@media only screen and (max-width: 990px){
    .main-timeline .timeline{
        margin-bottom: 20px;
    }
}
@media only screen and (max-width: 767px){
    .main-timeline .timeline-icon{
        padding-top: 0;
    }
    .main-timeline .timeline:nth-child(2n) .timeline-icon{
        padding-bottom: 0;
    }
    .main-timeline .border{
        margin-bottom: 10px;
    }
    .main-timeline .timeline:nth-child(2n) .border{
        margin: 10px 0 0 0;
    }
    .main-timeline .timeline-content{
        text-align: center;
    }
}

</style>		
		<div id="service">
	 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline">
                <div class="col-md-2 col-sm-4 timeline">
                    <span class="timeline-icon">
                        <i class="fa fa-key"></i>
                    </span>
                    <div class="border"></div>
                    <div class="timeline-content">
                        <h4 class="title">Williamson</h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
 
                <div class="col-md-2 col-sm-4 timeline">
                    <div class="timeline-content">
                        <h4 class="title">Kristiana</h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <div class="border"></div>
                        <span class="timeline-icon">
                            <i class="fa fa-key"></i>
                        </span>
                </div>
 
                <div class="col-md-2 col-sm-4 timeline">
                    <span class="timeline-icon">
                        <i class="fa fa-key"></i>
                    </span>
                    <div class="border"></div>
                    <div class="timeline-content">
                        <h4 class="title">Steve thomas</h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
 
                <div class="col-md-2 col-sm-4 timeline">
                    <div class="timeline-content">
                        <h4 class="title">Miranda joy</h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <div class="border"></div>
                    <span class="timeline-icon">
                        <i class="fa fa-key"></i>
                    </span>
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
	