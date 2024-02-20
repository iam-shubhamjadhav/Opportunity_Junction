<?php
$servername = "apahe.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="opportunity";

$conn = new mysqli($servername, $username, $password,$database);
  
mysqli_select_db($conn, "opportunity");
session_start();


 
if (isset($_POST['submit']))
	{
	$old_pass = $_POST['password1'];
	$new_pass = $_POST['newpassword'];
	$email    = $_POST['email1'];
	
	$password_query = mysqli_query($conn,"select * from admin where email= '$email'");
	$password_row = mysqli_fetch_array($password_query);
	$database_password = $password_row['password'];
	if ($database_password == $old_pass)
			{
			$update_pwd = mysqli_query($conn,"update admin set password='$new_pass' where email='$email'");
			$password_row1 = mysqli_fetch_array($update_pwd);
			echo "<script>alert('Update Sucessfully'); window.location='admdash.php'</script>";
			}
		  
	    else
		  {
		   echo "<script>alert('Your old password is wrong'); window.location='studash.php'</script>";
		  }
		}
	
 
?>