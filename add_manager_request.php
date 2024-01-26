<!--login.php-->
<?php
session_start();
$assetid=$_POST['assetId'];
$assetname=$_POST['assetName'];
$assetqty=$_POST['assetQty'];
$request=$_POST['requestReason'];

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="my_suit";

$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);

if($conn)
{
$sql= "INSERT INTO `tbl_request`(`assetId`, `requestQty`, `requestItem`, `requestReason`) VALUES ('$assetid', '$assetqty', '$assetname', '$request')";
$result = mysqli_query($conn, $sql);  

   if($result == 1){  
    echo '<script>alert("New Hardware Asset Request Sent Successfully")</script>';
    echo '<script>location.assign("http://localhost/my_suit/manager_asset.php")</script>';
}
mysqli_close($conn);
}
?>