<?php
$servername = "172.16.0.38";
$username = "jashn";
$password = "jashnjashn1234";
$dbname = "jashn";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jashn";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset('utf8');
?>