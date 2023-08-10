<?php
$servername="localhost";
$username="";  
$password="";     
$database="alpha_academy"; 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>