<!Doctype HTML>
	<html>
	<head>
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<title>Admin-Requests-IAMS</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
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
  height: 110%;
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
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #272c4a;
  /* overflow: hidden; */
  height: 110%;
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
	  <a href="http://localhost/my_suit/hardware_store.php"class="icon-a"><i class="fa fa-tasks icons"></i>   Hardware</a>
	  <a href="http://localhost/my_suit/software_store.php"class="icon-a"><i class="fa fa-gg icons"></i>   Software</a>
	  <a href="index.html"class="icon-a"><i class="fa fa-sign-out icons"></i>Log-Out</a>
	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	        <span style="font-size:30px;cursor:pointer; color: rgb(6, 6, 6);" class="nav"  ><i class='bx bx-menu'></i>REQUEST</span>
	        <span style="font-size:30px;cursor:pointer; color: black;" class="nav2"  ><i class='bx bx-menu'></i></span>
           <br/> <br/>
             <!--table stsrt-->
     <div class="container mt-4">
      
        <table id="dataTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Request ID</th>
                    <th>Asset ID</th>
                    <th>Request Item</th>
                    <th>Request Quantity</th>
                    <th>Request Reason</th>
                    <th>Status</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
           
            <tbody>
                <!-- Data will be loaded dynamically using DataTables -->
              
            </tbody>
        </table>
    </div>
     <!--table end-->
    <a href="http://localhost/my_suit/pdf_generate/asset_request_report.php"><button class="btn btn-success">Generate Report&nbsp;<i class="fa fa-print" aria-hidden="true"></i></button></a>
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
                    "url": "data_request.php",
                    "dataSrc": ""
                },
                "columns": [
                    { "data": "requestId" },
                    {"data":"assetId"},
                    { "data": "requestItem" },
                    { "data": "requestQty" },
                    { "data": "requestReason" },
                    {
        data: "Status", // Assuming you have a 'status' property in your data
        render: function(data, type, full, meta) {
          // Custom rendering based on 'status' value
          if (data === '0') {
            return '<span class="badge badge-primary">Requested</span>';
          } else if (data === '1') {
            return '<span class="badge badge-success">Approved</span>';
          } else {
            return '<span class="badge badge-secondary">Rejected</span>';
          }}},
                    {
                // Add custom buttons in this column
                 "data": null,
                "render": function(data, type, full, meta) {
                    // 'data' is an object containing the row data for the current row
                    var yesButton = '<button class="btn btn-primary btn-sm edit-btn"><i class="fa fa-check"></i></button>';
                    var noButton = '<button class="btn btn-danger btn-sm delete-btn"><i class="fa fa-times" aria-hidden="true"></i></button>';
                    return yesButton + ' ' + noButton;
                }},
            ],
            });
        });
    
        // Handle yes button click
    $('#dataTable').on('click', '.edit-btn', function() {
        var row = $(this).closest('tr'); // Get the closest row (parent row of the clicked button)
    var requestId = row.find('td:eq(0)').text(); // Get the text of the first cell (index 0) in the row
    var assetId = row.find('td:eq(1)').text(); // Get the text of the second cell (index 1) in the row

        
        // Make an AJAX request to your PHP file with the requestId for further processing
        $.ajax({
            type: "POST",
            url: "yes_request.php",
            data: { requestId: requestId, assetId: assetId, action:"approve" },
            success: function(response) {
                // Handle the response from the PHP file, if needed
                console.log("Edit request sent successfully!");
            },
            error: function(xhr, status, error) {
                // Handle error, if any
                console.error("Error sending edit request: " + error);
            }
        });
        location.reload();
    });

    // Handle no button click
    $('#dataTable').on('click', '.delete-btn', function() {
        var row = $(this).closest('tr'); // Get the closest row (parent row of the clicked button)
    var requestId = row.find('td:eq(0)').text(); // Get the text of the first cell (index 0) in the row
    var assetId = row.find('td:eq(1)').text(); // Get the text of the second cell (index 1) in the row
        // Make an AJAX request to your PHP file with the requestId for further processing
        $.ajax({
            type: "POST",
            url: "yes_request.php",
            data: { requestId: requestId, assetId: assetId, action:"reject" },
            success: function(response) {
                // Handle the response from the PHP file, if needed
                console.log("Delete request sent successfully!");
                // Refresh the DataTable to reflect the changes
                dataTable.ajax.reload();
            },
            error: function(xhr, status, error) {
                // Handle error, if any
                console.error("Error sending delete request: " + error);
            }
        });
        location.reload();
    });

</script>
</body>
</html>