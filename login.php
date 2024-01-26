<?php

$uname = $_POST['UUsername'];
$pass = $_POST['PPassword'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "my_suit";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn) {
    $sql = "SELECT * FROM tbl_admin WHERE username='$uname' and password='$pass'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
      echo '<script>alert("Login Success. Welcome to Admin Dashboard.")</script>';
        echo '<script>location.assign("http://localhost/my_suit/dash.php")</script>';
        exit();
        echo '<script>alert("Login failed. Invalid username or password.")</script>';
        echo '<script>location.assign("http://localhost/my_suit/index.html")</script>';
        exit();
    }
}

mysqli_close($conn);

?>
