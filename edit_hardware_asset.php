
<?php
$hardwareid = $_POST['edit_assetId'];
$newQty = $_POST['edit_assetQty'];

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="my_suit";

$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);
if($hardwareid!='' && $newQty!='')
{
if($conn)
{
$result=mysqli_query($conn, "UPDATE `tbl_hardware` SET `assetQty`='$newQty' WHERE `assetId`='$hardwareid'");
echo '<script>alert("Hardware Asset ' . $hardwareid . ' Updated Successfully")</script>';
echo '<script>location.assign("http://localhost/my_suit/hardware_store.php")</script>';
}
}

mysqli_close($conn);

?>