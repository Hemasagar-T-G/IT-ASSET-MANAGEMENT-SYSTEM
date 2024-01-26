
<?php
$hardwareid = $_POST['edit_assetId'];

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="my_suit";
$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);
if($hardwareid!='')
{
if($conn)
{
$result=mysqli_query($conn, "DELETE FROM `tbl_hardware` WHERE `assetId`='$hardwareid'");
echo '<script>alert("Hardware Asset ' . $hardwareid . ' Deleted Successfully")</script>';
echo '<script>location.assign("http://localhost/my_suit/hardware_store.php")</script>';
}
}
mysqli_close($conn);

?>