<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_suit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database table
$sql = "SELECT `assetId`, `assetQty` FROM `tbl_projectasset`";// WHERE `Status`='0'";
$result = $conn->query($sql);

// Store the data in an array
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the connection
$conn->close();

// Return the data as JSON
echo json_encode($data);
?>
