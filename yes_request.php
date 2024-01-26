<!--yes_request.php-->
<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'my_suit';
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$assetId = $_POST["assetId"];
$requestId= $_POST["requestId"];
$action=$_POST["action"];
if($action=="approve"){

    $reqQuantity = mysqli_query($conn, "SELECT `requestQty` FROM tbl_request WHERE `requestId`={$requestId}");
    $row = mysqli_fetch_assoc($reqQuantity);
    $quantity = $row['requestQty'];
    
    $assetQuantity=mysqli_query($conn, "SELECT `assetQty` FROM tbl_hardware WHERE `assetId`={$assetId}");
    $row = mysqli_fetch_assoc($assetQuantity);
    $quantity1 = $row['assetQty'];
    
    $assetQty=$quantity1-$quantity;
    $sql = "UPDATE tbl_hardware SET assetQty =$assetQty  WHERE assetId = {$assetId}";
    $sql1 = "UPDATE tbl_request SET Status =1  WHERE `requestId`={$requestId}";
    $result1 = mysqli_query($conn, $sql1);
    $result = mysqli_query($conn, $sql);
    echo '<script>alert("Approved")</script>';
    $qry="INSERT INTO `tbl_projectasset`(`assetId`, `assetQty`) VALUES ('$assetId ','$quantity')";
    $result = mysqli_query($conn, $qry);
}
if($action=="reject")
{
    $sql1 = "UPDATE tbl_request SET Status =-1  WHERE `requestId`={$requestId}";
    $result1 = mysqli_query($conn, $sql1);
}
?>