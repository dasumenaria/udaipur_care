<?php
include('authForWeb.php');
 @$SESSION_ID=$_SESSION['SESSION_ID'];
if($SESSION_ID){
	$log_path='<a href="logout.php" >LOGOUT</a>';
}
else
{
	$log_path='<a href="login.php" >LOGIN</a>';
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Udaipur Care</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">
 		<!-- animate -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- custom -->
		<link rel="stylesheet" href="css/style.css">
 	</head>
	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
		<!-- start navigation -->
		<div class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#home" class="navbar-brand smoothScroll"><img src="images/logos.png" style="height:62px !important" class="img-responsive" alt="logo"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
                    	<li><a href="index.php" class="smoothScroll">HOME</a></li>
                        <li><a href="index.php#about" class="smoothScroll">ABOUT US</a></li>
 						<li><a href="services.php" class="smoothScroll">SERVICES</a></li>
 						<li><a href="partners.php" class="smoothScroll">PARTNERS</a></li>
						<li><a href="index.php#contact" class="smoothScroll">CONTACT</a></li>
                        <li><a href="registration.php" class="smoothScroll">REGISTER</a></li>
						<li><?php echo $log_path; ?></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end navigation -->