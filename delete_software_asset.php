
<?php
$softwareid = $_POST['delete_assetId'];
// $newQty = $_POST['delete_assetQty'];

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="my_suit";

$newlocatiom = 'http://localhost/my_suit/software_store.php';

$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);
if($softwareid!='')
{
if($conn)
{
$result=mysqli_query($conn, "DELETE FROM `tbl_software` WHERE `assetId`='$softwareid'");
echo '<script>alert("Software Asset ' . $softwareid . ' Deleted Successfully")</script>';
echo '<script>location.assign("http://localhost/my_suit/software_store.php")</script>';
}
}

mysqli_close($conn);

?>