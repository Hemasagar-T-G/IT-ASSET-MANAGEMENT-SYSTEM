<?php
session_start();
?>

<!Doctype HTML>
	<html>
	<head>
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<title>SOFTWARE-IAMS</title>
		<!-- <link rel="stylesheet" href="css/style.css" type="text/css"/> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
    
<!-- Buttons extension -->
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.1/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/2.1.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.1/js/buttons.html5.min.js"></script>

<style>
body{
	margin:0px;
	padding: 0px;
	background-color:white;
	/* overflow: hidden; */
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
  height: 120%;
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
	padding:0px;
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
	width: 85%;
	height: 100px;
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
/* table { 
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}
td, th {
  text-align: left;
  padding:15px;
  color: #ddd;
  border-bottom: 1px solid #81818140;
} */


@keyframes fill {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(126deg);
  }
}


/*open form*/
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

/* add assert */
input[type=text],[type=number] {
  /* width: 100%;
  padding: 12px 20px; */
  /* margin: 0px 0; */
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 5px;
  /* -webkit-transition: 0.5s; */
  /* transition: 0.5s;
  outline: none; */
}
/* for select options */
/* Full-width input fields */
select {
  width: 60%;
  box-sizing: border-box;
  border: 3px solid #ccc;
  border-radius: 5px;
  /* background: #f1f1f1; */
}
/* When the inputs get focus, do something */
select:focus {
  background-color: #ddd;
  outline: none;
}

/* Pop-up start */
.loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
        background-color: #fff ;
      }
      .formPopup {
        width: 400px;
        background-color: #fff ;
        display: none;
        position: fixed;
        left: 50%;
        top: 25%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }
      .formContainer {
        width: 300px;
        padding: 20px;
      }
      .formContainer input[type=text], {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=number]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      }
/* Pop-up end */
		</style>
	</head>
	<body>

	<div id="mySidenav" class="sidenav">
    <p class="logo"><span><i class='fa fa-object-group'></i></span></p>
    <a href="http://localhost/my_suit/dash.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
	  <a href="http://localhost/my_suit/request.php"class="icon-a"><i class="fa fa-paper-plane icons"></i>   Request</a>
	  <!-- <a href="#"class="icon-a"><i class="fa fa-list icons"></i>   Projects</a> -->
	  <a href="http://localhost/my_suit/analytics.php"class="icon-a"><i class="fa fa-bar-chart icons"></i>   Analytics</a>
	  <a href="http://localhost/my_suit/hardware_store.php"class="icon-a"><i class="fa fa-tasks icons"></i>   Hardware</a>
	  <a href="http://localhost/my_suit/software_store.php"class="icon-a"><i class="fa fa-gg icons"></i>   Software</a>
	  <a href="index.html"class="icon-a"><i class="fa fa-sign-out icons"></i>Log-Out</a>
	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	        <span style="font-size:30px;cursor:pointer; color: rgb(6, 6, 6);" class="nav"  ><i class='bx bx-menu'></i>SOFTWARE ASSET INVENTORY</span>
	        <span style="font-size:30px;cursor:pointer; color: black;" class="nav2"  ><i class='bx bx-menu'></i></span>
           <br/> <br/>
             <!--table stsrt-->
     <div class="container mt-4">
     <table class="table table-striped table-bordered">
     <form action="http://localhost/my_suit/add_software.php" method="post">
      <tr>
     <td><label for="assetId">Asset ID:</label>
        <input type="number" name="add_assetId" required></td>

        <td><label for="assetName">Asset Name:</label>
        <input type="text" name="add_assetName" required></td>

        <td><label for="assetQty">Asset Quantity:</label>
        <input type="number" name="add_assetQty" required></td>

        <td> <input type="submit" value="Add Asset" class="btn btn-primary"></td></tr>
    </form>
</table>
        <table id="dataTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Asset ID</th>
                    <th>Asset Name</th>
                    <th>Quantity</th>
                </tr>
            </thead>
           
            <tbody>
                <!-- Data will be loaded dynamically using DataTables -->
            </tbody>
        </table>

        <table id="dataTable" class="table table-striped table-bordered">
        <form action="http://localhost/my_suit/edit_software_asset.php" method="post">
          <td><label for="assetName">Asset ID:</label>
          <?php
              $host="localhost";
              $dbUsername="root";
              $dbPassword="";
              $dbName="my_suit";

              $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);

              if($conn)
              {
              $s=mysqli_query($conn, "SELECT * FROM tbl_software");}
              ?>
                  <select name="edit_assetId" >
                  <?php 
                  while($r=mysqli_fetch_array($s))
                  {
                    $hwId=$r['assetId'];
                  ?><option><?php echo$r['assetId']?></option>
                  <?php } ?>
                  </select></td> 

                  <td><label for="assetQty">Asset Quantity:</label>
                  <input type="number" name="edit_assetQty" required></td>

                  <td><input type="submit" value="Update Asset" class="btn btn-primary"></td></tr>
                  </form>
                  <tr><td><form action="http://localhost/my_suit/delete_software_asset.php" method="post">
                  <label for="assetName">Asset ID:</label>
          <?php

              $host="localhost";
              $dbUsername="root";
              $dbPassword="";
              $dbName="my_suit";

              $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);

              if($conn)
              {
              $s=mysqli_query($conn, "SELECT * FROM tbl_software");}
          ?>
          <select name="delete_assetId">
          <?php 
              while($r=mysqli_fetch_array($s))
              {
                $hwId=$r['assetId'];
              ?><option><?php echo$r['assetId']?></option>
              <?php } ?>
          </select></td>
          <td><input type="submit" value="Delete Asset" class="btn btn-danger"></form>
          <td><a href="http://localhost/my_suit/pdf_generate/software_asset_report.php"><button class="btn btn-success">Generate Report&nbsp;<i class="fa fa-print" aria-hidden="true"></i></button></a></td>
          </td>
        </table>
    </div>
     <!--table end-->
</div>
	</div>

<!-- open popup -->
<?php
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="my_suit";
$newlocation="http://localhost/my_suit/software_store.php";
$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);
if($conn)
{
$sql= "SELECT `assetId`, `assetName`, `assetQty` FROM `tbl_software`";
$result = mysqli_query($conn, $sql);   
// if($result == 1){

//  }
}
mysqli_close($conn);
?>
<div class="loginPopup">
      <div class="formPopup" id="popupForm">
      <table class="table table table-bordered">
      <form action="" method="post" class="formContainer">
      <tr><td colspan="2"><h3>Edit Software Asset</h3></td></tr>
        <tr><td><label for="assetId">Asset ID:</label></td>
        <td><input type="number" name="add_assetId" value="<?=['assetId'];?>"required></td></tr>

        <tr><td><label for="assetName">Asset Name:</label></td>
        <td><input type="text" name="add_assetName" required></td></tr>

        <tr><td><label for="assetQty">Asset Quantity:</label></td>
        <td><input type="number" name="add_assetQty" required></td></tr>

        <tr><td> <button type="submit" value="updateAsset" class="btn btn-primary">Update Asset</button></td>
        <td><button type="button" class="btn btn-danger" onclick="closeForm()">Close</button></td></tr>
      </form>
      </table>
  </div>
</div>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
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
     $(document).ready(function() {
            $('#dataTable').DataTable({
                "ajax": {
                    "url": "software_data_request.php",
                    "dataSrc": ""
                },
                "columns": [
                    { "data": "assetId" },
                    {"data":"assetName"},
                    { "data": "assetQty" },
            ],
            });
        });

function openForm() {
document.getElementById("popupForm").style.display = "block";
}
function closeForm() {
document.getElementById("popupForm").style.display = "none";
}
</script>
</body>
</html>