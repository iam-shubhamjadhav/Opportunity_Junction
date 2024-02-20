<?php


$servername = "apahe.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="opportunity";

$conn = new mysqli($servername, $username, $password,$database);
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}


$error="";	
?>