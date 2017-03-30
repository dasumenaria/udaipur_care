<?php 
include("../config.php");
  
	
$SESSION_ID=$_SESSION['SESSION_ID']; 
	
	$s1=mysql_query("select `user_type` from `login` where `id`='$SESSION_ID'");
	$f1=mysql_fetch_array($s1);
	
	$user_type=$f1['user_type'];
	
?>

<style>
.nav > li > a:hover, .nav > li > a:active, .nav > li > a:focus {
     background: #3c8dbc; !important; 
	color:white !important; 
</style>

<div class="box box-solid" style="background:white;">
           <!-- <div class="box-header with-border">
               <span class="box-title"><a href="" style="color:black;margin-left:12px;"><i class="fa fa-th"></i> Dashboard</a></span> 
             </div> -->
			<div class="box-body no-padding">
						 <ul class="nav nav-pills nav-stacked"  >
 <?php
//////////////////////////		COMPLETE 	CODE  READY START 	


?>		
						<?php  $page_name_from_url=basename($_SERVER['PHP_SELF']);
			 
			 
							//@$fac_id=$_SESSION['id'];
							$user_type=$user_type;
							
			 
			 $selecto7=mysql_query("select * from `user_management` where `user_type`='$user_type'");
			        while($reco7=mysql_fetch_array($selecto7))
			       {
					   $mng_mdul_id[]=$reco7['module_id'];
				   }
				    
				 $sel_module2=mysql_query("select `main_menu` from `modules` where `page_name_url`='".$page_name_from_url."'");
				$arr_module2=mysql_fetch_array($sel_module2);
				 $main_menu_active=$arr_module2['main_menu'];			
				
					$selecto3=mysql_query("select * FROM `modules` ORDER BY id");
                      while($data=mysql_fetch_array($selecto3))
					  {
                      $main_menu_arr[]='';
                     if(in_array($data['id'],$mng_mdul_id))
					 {
                        if(empty($data['main_menu']) && empty($data['sub_menu']))
                        {
							
                            ?>
                            <li class="<?php if($page_name_from_url==$data['page_name_url']){ echo 'active'; } ?>">
  <a href="<?php echo $data['page_name_url']; ?>"><i class="<?php echo $data['icon_class_name']; ?>"></i><?php echo $data['name']; if($page_name_from_url==$data['page_name_url']){ echo '<span class="selected"></span>'; } ?></a>
                            </li>
                            <?php
                        }
                      
                        if(!empty($data['main_menu']) && empty($data['sub_menu']))
                        {
                            if(in_array($data['main_menu'], $main_menu_arr))
                            {
                               
                            }
                            else
                            {
                                $main_menu_arr[]=$data['main_menu'];
                                  ?>
                                <li class="<?php if($main_menu_active==$data['main_menu']){ echo 'active'; } ?>">
                                    <a href="javascript:;">
                                    <i class="<?php echo $data['main_menu_icon']; ?>"></i>
                                    <?php echo $data['main_menu']; ?> <span class="arrow"></span>					
					                <span class="selected"></span>
                                    </a>
                                    <ul  class="sub-menu">
                                    <?php
									$selecto4=mysql_query("select * FROM `modules` where `main_menu`='".$data['main_menu']."'");
									while($data_value=mysql_fetch_array($selecto4))
									{
										if(in_array($data_value['id'],$mng_mdul_id))
										{			
                                    
                                         ?>
                                                <li class="<?php if($page_name_from_url==$data_value['page_name_url']){ echo 'active'; } ?>">
                                                    <a href="<?php echo $data_value['page_name_url']; ?>"> <i class="<?php echo $data_value['icon_class_name']; ?>"></i><?php echo $data_value['name']; ?></a>
                                                </li>
                                                <?php
										}
                                    }
                                    ?>
									
                                    </ul>
                                </li>
                                <?php
                            }
                        }
					 }
					  }
					  
					  ?>  
		  </ul>
						</div>
						<!-- /.box-body -->
</div>
 

