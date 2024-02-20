<?php 
$servername = "apahe.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="opportunity";

$conn = new mysqli($servername, $username, $password,$database);

if(isset($_POST['submit']))
{	
$rno=(integer)$_POST["rollno"];
$snam=$_POST["stuname"];
$fnam=$_POST["fname"];
$dob=$_POST["dob"];
$ph=$_POST["contno"];
$email1=$_POST["email"];
$strm=$_POST["strm"];
$course=$_POST["course"];
$scor=(float)$_POST["score"];
 $ten=(float)$_POST["ten"];
$twelve=(float)$_POST["twelve"];
$backlog=$_POST["backlog"];



 $sql= "insert into stureg(rollno , stuname, fname,  dob ,contno ,email , strm , course , score,ten ,twelve , backlog ) values ('$rno','$snam','$fnam','$dob','$ph','$email1','$strm','$course','$scor',' $ten' ,'$twelve' ,'$backlog')";
 if( mysqli_query($conn, $sql))
 {
  echo "<script>alert('Submitted successfully'); window.location='studash.php'</script>";
 }
 else
{
 echo "error";
}
}
else
{
	echo "cant connect";
}
 
?>

