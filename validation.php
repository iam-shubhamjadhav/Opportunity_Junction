<?php
session_start();
$servername = "apahe.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="opportunity";

$conn = new mysqli($servername, $username, $password,$database);

// Create connection
$conn = mysqli_connect('localhost','root','');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


mysqli_select_db($conn, "opportunity");

$name = $_POST['email'];
$pass = $_POST['password'];

$s= "select * from usertable where email = '$name' && password = '$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if($num == 1)
 { 
    header("location: studash.php"); 
 }
else
 { 
    echo " <script>alert('Wrong Email Password Combination'); window.location='stulogin.php'</script> ";
 }
?>