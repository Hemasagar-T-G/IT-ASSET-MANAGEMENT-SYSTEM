<!--login.php-->
<?php
session_start();
$assetid=$_POST['add_assetId'];
$assetname=$_POST['add_assetName'];
$assetqty=$_POST['add_assetQty'];

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="my_suit";

$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);

if($conn)
{
$sql= "INSERT INTO `tbl_hardware`(`assetId`, `assetName`, `assetQty`) VALUES ('$assetid','$assetname','$assetqty')";
$result = mysqli_query($conn, $sql);  

   if($result == 1){  
    echo '<script>alert("New Hardware Asset ' . $assetid . ' Added Successfully")</script>';
    echo '<script>location.assign("http://localhost/my_suit/hardware_store.php")</script>';
}
mysqli_close($conn);
}
?>