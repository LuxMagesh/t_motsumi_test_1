<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "devprox_1";

$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>