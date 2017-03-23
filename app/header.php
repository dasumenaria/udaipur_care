<?php
  @$SESSION_USERTYPE=$_SESSION['SESSION_USERTYPE']; //$seccion_usertype = $_SESSION['SESSION_USERTYPE']; exit;
  if($SESSION_USERTYPE==0){
	  $dashboard='user_dashboard.php';
  }
  if($SESSION_USERTYPE==1){
	  $dashboard='admin_dashboard.php';
  }
  if($SESSION_USERTYPE==2){
	  $dashboard='vendor_dashboard.php';
  }
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UDAIPUR CARE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assest/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assest/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../assest/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../assest/plugins/datatables/dataTables.bootstrap.css">    
<style>
	.info-box-icon
	{
		 background-color:white;
	}
	.skin-black .main-header .navbar .navbar-nav > li > a {
		border-right: none;
		color:#807e7e;
		font-size:11pt;
	}
	a {
	cursor:pointer !important;	
	}
</style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">
   <header class="main-header">
    <nav class="navbar navbar-static-top" style="background-color:#f8f8f8 !important;padding-top: 0px !important;">
      <div class="container">
        <div class="navbar-header">
        <a href="<?php echo $dashboard; ?>" class=""><img src="../images/logos.png" width="180px;"  class="img-responsive" alt="logo"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
            <ul class="nav navbar-nav" >
				<li><a href="../logout.php">LOGOUT</a></li>
			</ul>
          <!--<form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>-->
        </div>
      </div>
    </nav>
  </header>