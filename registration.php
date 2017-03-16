<?php 
	include("header.php");
	include("database.php");
date_default_timezone_set('Asia/Calcutta');
ini_set('max_execution_time', 100000);
@$session_id=$_SESSION['id']; 
  
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
		Registration 
		</h1>
     </section>

    <!-- Main content -->
    <section class="content">
	
		<div class="box box-primary" >
             <form role="form">
         <div class="box-body" style="margin-left:12px;">
		 </br>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div> 
		</div>	  
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
           
 
 
    </section>
    <!-- /.content -->
  </div>		 

<?php include("footer.php"); ?>