<?php
session_start();
$SESSION_ID=$_SESSION['SESSION_ID']; 

if(empty($SESSION_ID))
{
	header("location:../login.php");
}
else
{
	$SESSION_ID=$_SESSION['SESSION_ID'];
	$SESSION_USERNAME=$_SESSION['SESSION_USERNAME'];
	$SESSION_USERTYPE=$_SESSION['SESSION_USERTYPE']; 
}
?>