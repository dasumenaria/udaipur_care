


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>UDAIPUR CARE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assest/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assest/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assest/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
		 .cn_header{
    background: url("images/divider-bg.jpg");
    height: 400px;
    line-height: 24px;
    padding: 5px;
    color:white;

}

.print{
    background: url(http://mcgrefer.com/images/search.png);
    display: inline-block;
    height: 24px;
    width: 400px;
   
vertical-align:middle;
}

.info-box-icon
{
	 background-color:white;
}

.skin-black .main-header .navbar .navbar-nav > li > a {
    border-right: none;
	color:#807e7e;
  	font-size:11pt;
}

		 </style>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-black layout-top-nav">
<div class="wrapper">

   <header class="main-header">
    <nav class="navbar navbar-static-top" style="background-color:#f8f8f8 !important">
      <div class="container">
        <div class="navbar-header">
           <img src="images/logos.png" style="margin-top:5%;" align="left" width="180px;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
            <ul class="nav navbar-nav" >
            <li class="active"><a href="index.php">HOME<span class="sr-only">(current)</span></a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li class="dropdown">
			
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES<span class="caret"></span></a>
			  
			  
              <ul class="dropdown-menu" role="menu">
			  <?php
 				$query=mysql_query("select * from `master_services` order by id ASC");
				 while($fetch=mysql_fetch_array($query))
				{
					$id=$fetch['id'];
					$service_name=$fetch['service_name'];
				
			?>
                <li><a href="#"><?php echo $service_name; ?></a></li>
				<li class="divider"></li>
				
				<?php } ?>  
              </ul>
            </li>
			<li><a href="#about">REGISTER NOW</a></li>
			<li><a href="#about">PARTNERS</a></li>
			<li><a href="#about">CONTACT US</a></li>
			<li><a href="login.php">LOGIN</a></li>
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