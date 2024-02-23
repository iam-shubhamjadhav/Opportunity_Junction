<html>
<head>
 <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  
</head>
<body>
<style>
    body {
     background-image: url('khj.jpeg');
     background-repeat: no-repeat;
	 background-position: center;
	 background-size: 100%;
    }
</style>

 
    <div class="container-fluid p-3 my-3 bg-dark text-white" style="height:130px" >
   <img src="logo.png" class="rounded float-left" style="width:100px;height:100px;">
	
	<center> 
	<h1> OPPORTUNITY &nbsp;&nbsp; JUNCTION </h1>
	<h4> Navigate Your Career Path Online </h4>
	</center>
	</div>
	<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
    $(document).ready(function(){
        
        $('#chatbot-container').hide();

     
        $('#chatbot-toggle').click(function(){
            $('#chatbot-container').toggle();
        });
    });
</script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 5px 15px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
  
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
}
	*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
footer{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: #111;
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    color: #fff;
}
	.footer-bottom{
    background: #000;
    width: 80vw;
    padding: 4px 0;
    text-align: center;
}
.footer-bottom p{
    font-size: 10px;
    word-spacing: 4px;
    text-transform: capitalize;
}
.chatbot-container {
            position: fixed;
            bottom: 50%;
            right: 20px;
            transform: translateY(50%);
        }
        .chatbot-frame {
            width: 300px;
            height: 300px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="topnav">

 
  <a href="Help.php" style="float:right">Contact Us</a>
  <a href="aboutus.html" style="float:right">About Us</a>
 
  
</div>

</body>
</html>
<br>
	<div class="login-menu"> 
	<center>
	<form action="stulogin.php" method="post">
	<button type="submit" class="btn btn-primary">Student Login</button><br><br>
	</form>
	<form action="adminlogin.php" method="post">
	<button type="submit" class="btn btn-primary">Admin Login</button><br><br>
	</form><br><br><br><br><br><br>
	<b> Not having an account ? </b><br><br>
	<form action="signup.php" method="post">
	<button type="submit" class="btn btn-primary">Sign Up</button><br><br>
	</form>
	 <footer>
        <div class="footer-bottom">
            <h6>copyright &copy;2024 OPPORTUNITY JUNCTION. designed by Shubham Jadhav</h6>
        </div>
    </footer>
    <div class="chatbot-container">
    <iframe src="https://webchat.botframework.com/embed/jobchatbot-bot?s=4vKRPVpHOrI.hudYSENIO9VuSnOFCZJtKCGul92e3Er0SxSy2bP811I" 
            class="chatbot-frame"></iframe>
</div>
</div>
</body>
</html>