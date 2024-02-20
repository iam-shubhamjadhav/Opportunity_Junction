<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="opportunity";
$conn = mysqli_connect($servername, $username, $password, $database);
  
mysqli_select_db($conn, "opportunity");

if(isset($_GET['rollno'])){
    
    $id =$_GET['rollno'];
    $sql = "delete from stureg where rollno=$id";
    if($conn->query($sql)==true){
        
        header('Location: viewstudent.php');
    }else{
        header('Location: viewstudent.php?error=failed');
    }
    
}