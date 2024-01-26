<?php

$uname = $_POST['MngUser'];
$pass = $_POST['MngPass'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "my_suit";


$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn) {
    $sql = "SELECT * FROM tbl_projectmanager WHERE projMgrUsrname='$uname' and ProjMgrPassword='$pass'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
      echo '<script>alert("Login Success. Welcome to Manager Dashboard.")</script>';
        echo '<script>location.assign("http://localhost/my_suit/projectDash.php")</script>';
        exit(); // Important: exit after redirect to prevent further script execution
    } else {
        echo '<script>alert("Login failed. Invalid username or password.")</script>';
        echo '<script>location.assign("http://localhost/my_suit/index.html")</script>';
        exit(); // Exit after displaying the alert
    }
}

mysqli_close($conn);

?>
