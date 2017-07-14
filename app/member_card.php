<?php 
include('auth.php'); 
include("../config.php");
//include("header.php");

include('function.php');
$from = $_GET['from'];
     $from_date=date('Y-m-d',strtotime($from));
 $to = $_GET['to'];
     $to_date=date('Y-m-d',strtotime($to));

$p=$_SESSION['SESSION_ID'];
$session_id=$_SESSION['SESSION_ID'];

?>
<style>
.col-md-4 {
	background-image:url(../images/member_card.png) !important;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover !important;
	height:240px;
	width:31%;
	border-right:1px solid #000;
	
}
.col-md-1 {
	width:1%;
}
.col-md-6
{
	top:30px;
	font-size:12px;
	color:#6BB0B9 !important;
	
	word-wrap: break-word; 
	width: 54.66666667%;
	position: relative;
	min-height: 1px; 
}
.col-md-3 {
    width: 25%;
	position: relative;
    min-height: 1px;
 }
 table {
	font-size:12px;
	color:#6BB0B9 !important; 
 }
</style>
 
            <div class="row" align="center">
            
                <div class="col-md-4" align="right">
                 	<div class="col-md-6" style="float:right">
                    	<table width="100%" >
                        <tr>
                        	<td width="40%"><strong>Care No. </strong></td>
                            <td width="6	0%"> UD1245</td>
                        </tr>
                        <tr>
                        	<td><strong>Name </strong></td>
                            <td> Dasu Menaria</td>
                        </tr>
                        <tr>
                        	<td><strong>Adhar No.</strong></td>
                            <td> 987654321098</td>
                        </tr>
                        <tr>
                        	<td><strong>Address </strong></td>
                            <td> dsu menaria, dfasdas , dasdasda</td>
                        </tr>
                    	</table>     
                    </div>
                </div> 
                 
			</div>	 
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>
 
 

