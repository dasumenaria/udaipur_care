<?php
include("database.php");
include("header.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
@$session_id=$_SESSION['id']; 
 ?>
<style>
.info-box {
    display: block;
    min-height: 90px;
    background: #fef6f600;
    width: 100%;
    box-shadow:-2px -2px 4px 1px rgba(0, 0, 0, 0.43);
    border-radius: 2px;
    margin-bottom: 15px;
}
</style>
  <!-- Full Width Column -->
  
  <div class="content-wrapper">
   
		  <section class="content-header">
        <h1>
         SERVICES
          </h1>
              </section>
	  <section class="content" id='services'>
	<div class="row">
	
   <?php
                $sql="select * from master_services where flag=0";
				$fet=mysql_query($sql) or die(mysql_error());
				$count=0;
				while($result=mysql_fetch_array($fet))
					{  
                $id=$result['id'];               
 
 ?>	
	 <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box" style="background-color:white;">
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
		 
		 
		</br>
		 
	 
		
		 
   
		  
		</div>  
  </div>
  <!-- /.content-wrapper -->
<?php include("footer.php");?>