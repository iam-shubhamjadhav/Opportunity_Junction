<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

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
 { echo "<script>alert('User already exists'); window.location='main.php'</script>"; }
else
 
 {
  
 $reg = "insert into usertable(email , password) values ('$name','$pass')";
    mysqli_query($conn, $reg);
 echo "<script>alert('Registered successfully'); window.location='main.php'</script>";
  }
?>