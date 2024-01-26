
<?php
$softwareid = $_POST['edit_assetId'];
$newQty = $_POST['edit_assetQty'];

$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="my_suit";

$newlocatiom = 'http://localhost/my_suit/software_store.php';

$conn = new mysqli ($host, $dbUsername, $dbPassword, $dbName);
if($softwareid!='' && $newQty!='')
{
if($conn)
{
$result=mysqli_query($conn, "UPDATE `tbl_software` SET `assetQty`='$newQty' WHERE `assetId`='$softwareid'");
echo '<script>alert("Software Asset ' . $softwareid . ' Updated Successfully")</script>';
echo '<script>location.assign("http://localhost/my_suit/software_store.php")</script>';
}
}

mysqli_close($conn);

?>