
<html>
<head>
<title>Student Dashboard Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
     background-image: url('Pink-Blue-Blured-Texture.jpg');
    
	 background-position: center;
	 background-size: 100%;
    }
</style>
</head>
<body>
<style>
   
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

<link href="style1.css" rel="stylesheet" type="text/css">
     <div class="container-fluid p-3 my-3 bg-dark text-white" style="height:130px" >
   <img src="logo.png" class="rounded float-left" style="width:100px;height:100px;">
	
	<center> 
	<h1> OPPORTUNITY &nbsp;&nbsp; JUNCTION </h1>
	<h4> Navigate Your Career Path Online </h4>
	</center>
	</center>
	</div>	

<div class="container">
	<div class="top-menu">
	<center> 
	<h1>Student  Section </h1>
	</center> </br></br></br>
	</div>
	<div class="login-menu">
	
	
	</div>
	<div class="clearfix">
	<div class="left-menu">
	  <center>
	  <form action="studetails.php" method="post">
	  <button type="submit" class="btn btn-primary">Enter Your Details</button><br><br>
	 
	   </form>
	  
	   <form action="disannounce.php" method="post">
	<button type="submit" class="btn btn-primary">Check Announcement</button><br><br>
	</form>
		 
		<form action="changepwd.php" method="post">
	<button type="submit" class="btn btn-primary">Change Password</button><br><br>
	</form>
	
		<form action="resume.php" method="post">
	<button type="submit" class="btn btn-primary">&nbsp;Resume&nbsp;</button><br><br>
	</form>
		
	  </center>
	</div>
	
	<div class="dataform" ">
	<div class="form-data" id="contents" style=" box-shadow: 10px 10px lightgrey;">
	
	</div>
	</div>
	</div>
	<center>
	
	<form action="logout.php" method="post">
	<button type="submit" class="btn btn-primary">Log Out</button><br><br>
	</form>
	
	
	</center>
</div>
<center>
<footer>
        <div class="footer-bottom">
           <h6>copyright &copy;2024 OPPORTUNITY JUNCTION. designed by Shubham Jadhav</h6>
       <br>  </div>
    </footer></center>
</body>
</html>
