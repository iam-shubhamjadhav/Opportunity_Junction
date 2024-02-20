<html>
<head>

 <title>Change Password Page</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
     background-image: url('Pink-Blue-Blured-Texture.jpg');
     background-repeat: no-repeat;
	 background-position: center;
	 background-size: 100%;
    }
</style> 

</head>
<body>
<style>
    
 
 .change-password-form {
  width: 300px;
  box-shadow: 0 0 3px 0 rgba(0,0,0,0,3);
  background: rgba(255,255,255,0);
  padding: 10px;
  margin: 8% auto 0;
  text-align: center;
 }
 
 .input-box{
 border-radius: 20px;
 padding: 10px;
 margin: 10px 0;
 width: 100%;
 border: 1px solid #999;
 outline: none;
 }
 button{
 color: #fff;
 width: 100%;
 padding: 10px;
 border-radius: 20px;
 font-size: 15px;
 margin: 10px 0;
 border: none;
 outline: none;
 cursor: pointer;
 }
 .submit{
 background-color: #1c8adb;
 }
 
 
  footer{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(255,255,255,0);
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    color: #000000;
}
	.footer-bottom{
    background: rgba(255,255,255,0);
    width: 80vw;
    padding: 4px 0;
    text-align: center;
}
.footer-bottom p{
    font-size: 10px;
    word-spacing: 4px;
    text-transform: capitalize;
}



</style>
 
 
 </div>
 
 <link href="style1.css" rel="stylesheet" type="text/css">
     <div class="container-fluid p-3 my-3 bg-dark text-white" style="height:130px" >
   <img src="logo.png" class="rounded float-left" style="width:100px;height:100px;">
	
	<center> 
	 <h1> OPPORTUNITY &nbsp;&nbsp; JUNCTION </h1>
	<h4> Navigate Your Career Path Online </h4>
	</center>
	</div>
 
 &nbsp;<button type="button" style="height:40px;width:60px" class="btn btn-primary " onclick="history.back()"><b>Back</b></button>	

<center>
<h2> Change Password</h2>

 <div class="change-password-form"> 
 <form action="changepassword1.php" method="post">
    
  <label for="email"><b>Enter email</b></label>
    <input type="text" style="align-center" class="input-box" placeholder="Enter email" name="email1" required><br>
    <label for="old password"><b>Old Password</b></label>
    <input type="password" class="input-box" placeholder="Enter Old Password" name="password1" required><br>
    <label for="New Password"><b>New Password</b></label>
    <input type="password" class="input-box" placeholder="Enter New Password" name="newpassword" required><br>
   
    <button type="submit"<input type="submit" class="btn btn-primary" name="submit">Submit</button><br></center>
  </form>
</center>
</div>
<center>

         <p> <h6>copyright &copy;2024 OPPORTUNITY JUNCTION. designed by Shubham Jadhav</h6></p>
    </center>

</body>
</html>