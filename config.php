<?php
    
$servername = "localhost";
$username = "root";
$password = "Raju@123";
$database="testapi";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>