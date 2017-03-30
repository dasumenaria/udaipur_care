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
  <title>AdminLTE 2 | Buttons</title>
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
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $dashboard; ?>" class="logo">
       <img src="../images/logos.png" width="180px;" height="49px"    alt="logo">
       
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
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
       <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
           <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
               <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
       
       <ul class="sidebar-menu">
         
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../assest/index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../assest/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
         <li><a href="../assest/documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
       </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content -->
   