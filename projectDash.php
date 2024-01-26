<!Doctype HTML>
	<html>
	<head>
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<title>DASHBOARD-IAMS</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body{
	margin:0px;
	padding: 0px;
	background-color:white;
	overflow: hidden;
	font-family: system-ui;
}
.clearfix{
	clear: both;
}
.logo{
	margin: 0px;
	margin-left: 28px;
    font-weight: bold;
    color: white;
    margin-bottom: 30px;
}
.logo span{
	/*color: #f7403b;*/
	color: #85ff7f;
}
.sidenav {
  height: 122%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #272c4a;
  overflow: hidden;
  transition: 0.5s;
  padding-top: 30px;
}
.sidenav a {
  padding: 15px 8px 15px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f1f1;
  background-color:#1b203d;
}
.sidenav{
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
}
#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-left: 300px;
}
.head{
	padding:20px;
}
.col-div-6{
	width: 50%;
	float: left;
}
.profile{
	display: inline-block;
	float: right;
	width: 160px;
}
.pro-img{
	float: left;
	width: 40px;
	margin-top: 5px;
}
.profile p{
	color: white;
	font-weight: 500;
	margin-left: 55px;
	margin-top: 10px;
	font-size: 13.5px;
}
.profile p span{
	font-weight: 400;
    font-size: 12px;
    display: block;
    color: #8e8b8b;
}
.col-div-3{
	margin-top: 20px;
	width: 25%;
	float: left;
}
.box{
	width: 95%;
	height: 110px;
	background-image: linear-gradient(144deg,#8608b4, #492fed 60%,#bd6fda);
	margin-left: 10px;
	padding:10px;
	border-radius: 15px;
}
.box p{
	 font-size: 35px;
    color: white;
    font-weight: bold;
    line-height: 30px;
    padding-left: 10px;
    margin-top: 20px;
    display: inline-block;
	font-family: system-ui;
}
.box p span{
	font-size: 20px;
	font-weight: 400;
	color: #818181;
}
.box-icon{
	font-size: 40px!important;
    float: right;
    margin-top: 35px!important;
    color: #818181;
    padding-right: 10px;
}
.col-div-8{
	width: 500px;
	float: left;
}
.col-div-4{
	width: 500px;
	float: left;
}
.content-box{
	padding: 20px;
}
.content-box p{
	margin: 0px;
    font-size: 20px;
    color: #ffffff;
	border-radius: 15px;
}
.content-box p span{
	float: right;
    background-color: #ddd;
    padding: 3px 10px;
    font-size: 15px;
	border-radius: 15px;
}
.box-8, .box-4{
	width: 95%;
	background-color: #272c4a;
	height: auto;
	border-radius: 15px;
}
.nav2{
	display: none;
}
.box-8{
	margin-left: 10px;
    height: auto;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  text-align: left;
  padding:15px;
  color: #ddd;
  border-bottom: 1px solid #81818140;
}
@keyframes fill {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(126deg);
  }
}
footer {
	display: flex;
			align: center;
			width: 100%;
			margin-top: 250px;
			margin-right: 400px;
		}
		footer .btn {margin-top: 250px;
			margin-right: 400px;
		</style>
	</head>
	<body>
	<div id="mySidenav" class="sidenav">
    <p class="logo"><span><i class='fa fa-object-group'></i></span></p>
    <a href="http://localhost/my_suit/projectDash.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Project-Dashboard</a>
	  <a href="http://localhost/my_suit/manager_asset_request.php"class="icon-a"><i class="fa fa-paper-plane icons"></i>   Project-Request Asset</a>
	  <a href="http://localhost/my_suit/project_inventory.php"class="icon-a"><i class="fa fa-gg icons"></i>   Project-Inventory</a>
	  <a href="index.html"class="icon-a"><i class="fa fa-sign-out icons"></i>Log-Out</a>
	</div>
	<div id="main">
		<div class="head">
			<div class="col-div-6">
	        <span style="font-size:30px;cursor:pointer; color: rgb(6, 6, 6);" class="nav"  ><i class='bx bx-menu'></i>PROJECT MANAGER DASHBOARD</span>
	        <span style="font-size:30px;cursor:pointer; color: black;" class="nav2"  ><i class='bx bx-menu'></i></span>
           <br/> <br/>
		<div class="col-div-6">
	</div>
		<div class="clearfix"></div>
	</div>
		<div class="clearfix"></div>
		<br/>
		
		<div class="col-div-3">
			<div class="box">
				<p>
					<?php
					$host = 'localhost';
					$username = 'root';
					$password = '';
					$database = 'my_suit';
					$conn = mysqli_connect($host, $username, $password, $database);
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$sql = "SELECT * FROM `tbl_request` WHERE 1";
					if ($result = mysqli_query($conn, $sql)) {
						$rowcount = mysqli_num_rows( $result );
						printf(" %d", $rowcount);
					 }
					else {echo "No data found";}
					mysqli_close($conn);
					?>	
				<br/><span style="color:white; font-weight: bold; font-family: system-ui;">TOTAL REQUEST</span></p>
				<i class="fa fa-paper-plane box-icon" style="color:white"></i>
			</div>
		</div>

<!--  -->
<div class="col-div-3">
			<div class="box">
				<p>
					<?php
					$host = 'localhost';
					$username = 'root';
					$password = '';
					$database = 'my_suit';
					$conn = mysqli_connect($host, $username, $password, $database);
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$sql = "SELECT * FROM `tbl_request` WHERE Status=0;";
					if ($result = mysqli_query($conn, $sql)) {
						$rowcount = mysqli_num_rows( $result );
						printf(" %d", $rowcount);
					 }
					else {echo "No data found";}
					mysqli_close($conn);
					?>	
				<br/><span style="color:white; font-weight: bold; font-family: system-ui;">NEW REQUEST</span></p>
				<i class="fa fa-paper-plane box-icon" style="color:white"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>
					<?php
					$host = 'localhost';
					$username = 'root';
					$password = '';
					$database = 'my_suit';
					$conn = mysqli_connect($host, $username, $password, $database);
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$sql = "SELECT * FROM `tbl_request` WHERE `Status`='1'";
					if ($result = mysqli_query($conn, $sql)) {
						$rowcount = mysqli_num_rows( $result );
						printf(" %d", $rowcount);
					 }
					else {echo "No data found";}
					mysqli_close($conn);
					?>	
				<br/><span style="color:white; font-weight: bold; font-family: system-ui;">APPROVED REQUEST</span></p>
				<i class="fa fa-check-circle box-icon" style="color:white"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>
					<?php
					$host = 'localhost';
					$username = 'root';
					$password = '';
					$database = 'my_suit';
					$conn = mysqli_connect($host, $username, $password, $database);
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$sql = "SELECT * FROM `tbl_request` WHERE `Status`='-1'";
					if ($result = mysqli_query($conn, $sql)) {
						$rowcount = mysqli_num_rows( $result );
						printf(" %d", $rowcount);
					 }
					else {echo "No data found";}
					mysqli_close($conn);
					?>	
				<br/><span style="color:white; font-weight: bold; font-family: system-ui;">REJECTED REQUEST</span></p>
				<i class="fa fa-times-circle box-icon" style="color:white"></i>
			</div>
	</div>
    <div class="col-div-3">
			<div class="box">
				<p>
					<?php
					$host = 'localhost';
					$username = 'root';
					$password = '';
					$database = 'my_suit';
					$conn = mysqli_connect($host, $username, $password, $database);
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$sql1 = "SELECT * FROM  tbl_projectasset";
					if ($result = mysqli_query($conn, $sql1)) {
						$rowcount = mysqli_num_rows( $result );
						printf(" %d", $rowcount);
					 }
					else {echo "No data found";}
					mysqli_close($conn);
					?>	
				<br/><span style="color:white; font-weight: bold; font-family: system-ui;">PROJECT ASSETS</span></p>
				<i class="fa fa-desktop box-icon" style="color:white"></i>
			</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$(".nav").click(function(){
	    $("#mySidenav").css('width','70px');
	    $("#main").css('margin-left','70px');
	    $(".logo").css('visibility', 'hidden');
	    $(".logo span").css('visibility', 'visible');
	     $(".logo span").css('margin-left', '-10px');
	     $(".icon-a").css('visibility', 'hidden');
	     $(".icons").css('visibility', 'visible');
	     $(".icons").css('margin-left', '-8px');
	      $(".nav").css('display','none');
	      $(".nav2").css('display','block');
	  });
	$(".nav2").click(function(){
	    $("#mySidenav").css('width','300px');
	    $("#main").css('margin-left','300px');
	    $(".logo").css('visibility', 'visible');
	     $(".icon-a").css('visibility', 'visible');
	     $(".icons").css('visibility', 'visible');
	     $(".nav").css('display','block');
	      $(".nav2").css('display','none');
	 });
</script>
	</body>
	</html>