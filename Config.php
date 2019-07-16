<?php
$servername = "localhost";
$username =  "root";
$password =  "";
$dbname = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );
$sql="use mydb";
$conn->query($sql);  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?> 