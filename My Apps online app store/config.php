<?php
$servername = "localhost";
$username = "root";
$password = ""; //we haven't username or password for server
$db="online app store"; //database name


// Create connection
$conn = new mysqli($servername, $username, $password,$db);//$conn is a connection object of database

// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
	echo "<script>alert('Conection lost');</script>";
}


?>