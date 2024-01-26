<!Doctype HTML>
	<html>
	<head>
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<title>ANALYTICS-IAMS</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  height: 200%;
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
	width: 35%;
	float: left;
	
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
	align: left;
  font-family: arial, sans-serif;
  border-collapse: collapse;
 /* width: 100%;*/
}
td{
  text-align: center;
  padding:10px;
  color: #ddd;
  height: 300px;
  width: 400px;
  margin-left: 20px;
}
@keyframes fill {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(126deg);
  }
}
</style>
	</head>
	<body>
	<div id="mySidenav" class="sidenav">
	  <p class="logo"><span><i class='fa fa-object-group'></i></span></p>
	  <a href="http://localhost/my_suit/dash.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
	  <a href="http://localhost/my_suit/request.php"class="icon-a"><i class="fa fa-paper-plane icons"></i>   Request</a>
	  <a href="http://localhost/my_suit/analytics.php"class="icon-a"><i class="fa fa-bar-chart icons"></i>   Analytics</a>
	  <a href="http://localhost/my_suit/hardware_store.php"class="icon-a"><i class="fa fa-hdd-o icons"></i>   Hardware</a>
	  <a href="http://localhost/my_suit/software_store.php"class="icon-a"><i class="fa fa-gg icons"></i>   Software</a>
	  <a href="index.html"class="icon-a"><i class="fa fa-sign-out icons"></i>Log-Out</a>
	</div>
	<div id="main">
		<div class="head">
			<div class="col-div-6">
				<span style="font-size:30px;cursor:pointer; color: rgb(6, 6, 6);" class="nav"  ><i class='bx bx-menu'></i>ANALYTICS</span>
				<span style="font-size:30px;cursor:pointer; color: black;" class="nav2"  ><i class='bx bx-menu'></i></span>
			</div>
		</div>
		<table>
			<th><h3>BAR-GRAPH ANALYTICS</h3></th>
      <tr>
			<td class="bar-chart01">
			<div id="chart-container">
			<canvas id="mycanvas"></canvas>
    		</div>
			</td>
			<td class="bar-chart01">
			<div id="chart-container">
			<canvas id="mycanvas1"></canvas>
    		</div>
			</td>
			</tr>
		</table>
	  	<br/>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	<script type="text/javascript" src="barchart/hardware/app.js"></script>
	<script type="text/javascript" src="barchart/hardware/app.js"></script>
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

//bar graph
$(document).ready(function(){
  $.ajax({
    url: "http://localhost/my_suit/barchart/hardware/chart.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var asset = [];
      var Quantity = [];
      for(var i in data) {
        asset.push("" + data[i].assetName);
        Quantity.push(data[i].assetQty);
      }
      var chartdata = {
        labels: asset,
        datasets : [
          {
            label: 'HARDWARE ASSET ',
            backgroundColor: 'rgb(29, 224, 246)',
            borderColor: 'black',
            hoverBackgroundColor: 'rgb(0, 142, 255)',
            hoverBorderColor: 'rgb(106, 90, 205)',
            data: Quantity
          }
        ]
      };
      var ctx = $("#mycanvas");
      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
//sw chart
$(document).ready(function(){
  $.ajax({
    url: "http://localhost/my_suit/barchart/software/swchart.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var asset1 = [];
      var Quantity1 = [];

      for(var j in data) {
        asset1.push("" + data[j].assetName);
        Quantity1.push(data[j].assetQty);
      }

      var chartdata1 = {
        labels: asset1,
        datasets : [
          {
            label: 'SOFTWARE ASSET ',
            backgroundColor: 'rgb(0, 0, 255)',
            borderColor: 'black',
            hoverBackgroundColor: 'rgb(0, 142, 255)',
            hoverBorderColor: 'rgb(106, 90, 205)',
            data: Quantity1
          }
        ]
      };
      var ctx = $("#mycanvas1");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata1
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
</script>
	</body>
	</html>