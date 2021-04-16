<?php

$servername ='localhost';
$username = 'root';
$password = '';
$db = 'e-commerce';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$con = mysqli_connect("$servername","$username","$password","$db");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

?>
