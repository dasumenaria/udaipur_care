<?php
include('auth.php'); 
include("../config.php");
include("header.php");
  
  
 ?>
 
  
 <section class="content">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-footer no-padding">
              <div class="mailbox-controls" style="min-height: 470px;">
			   
				<!---		TABS	---->
				<div class="col-lg-3 col-xs-6">
				  <div class="small-box bg-aqua">
					<div class="inner">
					  <h3> <?php echo $lead_new; ?> </h3>
					  <p> New Leads</p>
					</div>
					<div class="icon">
					  <i class="ion ion-stats-bars"></i>
					</div>
					<a href="lead_status.php?s=0" class="small-box-footer">
					  More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				  </div>
				</div>
				<!---		TABS	---->
				<div class="col-lg-3 col-xs-6">
				  <div class="small-box bg-red">
					<div class="inner">
					  <h3><?php echo $lead_reject; ?></h3>
					  <p>Rejected Leads</p>
					</div>
					<div class="icon">
					  <i class="ion ion-person-add"></i>
					</div>
					<a href="lead_status.php?s=2" class="small-box-footer">
					  More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				  </div>
				</div>
				<!---		TABS	---->
				<div class="col-lg-3 col-xs-6">
				  <div class="small-box bg-yellow">
					<div class="inner">
					  <h3><?php echo $lead_transfer; ?></h3>
					  <p>Leads Transfer</p>
					</div>
					<div class="icon">
					  <i class="ion ion-pie-graph"></i>
					</div>
					<a href="lead_status.php?s=1" class="small-box-footer">
					  More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				  </div>
				</div>
                <!---		TABS	---->
				<div class="col-lg-3 col-xs-6">
				  <div class="small-box bg-green">
					<div class="inner">
					  <h3> <?php echo $lead_complete; ?> </h3>
					  <p>Completed Leads</p>
					</div>
					<div class="icon">
					  <i class="ion ion-stats-bars"></i>
					</div>
					<a href="lead_status.php?s=3" class="small-box-footer">
					  More info <i class="fa fa-arrow-circle-right"></i>
					</a>
				  </div>
				</div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
 <?php 
include("	footer.php");
  ?>