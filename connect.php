<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dv";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} else {
  // echo "OK";
}
?>