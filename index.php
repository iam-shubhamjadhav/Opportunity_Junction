<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url('khj.jpeg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            position: relative;
        }

        .container-fluid {
            padding: 20px;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
            padding: 10px;
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
        }

        .login-menu {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .login-menu button {
            margin-top: 10px;
        }

        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: #111;
            height: auto;
            width: 100%;
            font-family: "Open Sans";
            color: #fff;
        }

        .footer-bottom {
            background: #000;
            width: 100%;
            padding: 4px 0;
            text-align: center;
        }

        .footer-bottom p {
            font-size: 12px;
            word-spacing: 4px;
            text-transform: capitalize;
        }

        
        .chatbot-container {
            display: none;
            position: fixed;
            bottom: 40px;
            right: 40px;
            width: 300px;
            height: 300px;
            border: none;
            z-index: 9998;
			background-color: #fff; 
        border-radius: 10px; 
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .chatbot-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #04AA6D;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 9999;
        }


        .account-section {
            background-color: #04AA6D; 
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            color: white;
        }
    </style>
</head>
<body>

<div class="container-fluid p-3 my-3 bg-dark text-white">
    <img src="logo.png" class="rounded float-left" style="width:100px;height:100px;">
    <center>
        <h1> OPPORTUNITY &nbsp;&nbsp; JUNCTION </h1>
        <h4> Navigate Your Career Path Online </h4>
    </center>
</div>

<div class="topnav">
    <a href="Help.php" style="float:right">Contact Us</a>
    <a href="aboutus.html" style="float:right">About Us</a>
</div>

<div class="login-menu">
    <form action="stulogin.php" method="post">
        <button type="submit" class="btn btn-primary">Student Login</button><br><br>
    </form>
    <form action="adminlogin.php" method="post">
        <button type="submit" class="btn btn-primary">Admin Login</button><br><br>
    </form>
    <div class="account-section">
        <b> Not having an account ? 
       
    </div> <form action="signup.php" method="post"></b><br><br>
            <button type="submit" class="btn btn-primary">Sign Up</button><br><br>
        </form>
</div>

<!-- Chatbot button -->
<button class="chatbot-button" onclick="toggleChatbot()">Need Help ?</button>

<!-- Chatbot container -->
<div class="chatbot-container">
    <iframe src="https://webchat.botframework.com/embed/jobchatbot-bot?s=4vKRPVpHOrI.hudYSENIO9VuSnOFCZJtKCGul92e3Er0SxSy2bP811I" style="height: 100%; width:100%; max-height: 100%; border: none;"></iframe>
</div>

<footer>
    <div class="footer-bottom">
        <h6>copyright &copy;2024 OPPORTUNITY JUNCTION. designed by Shubham Jadhav</h6>
    </div>
</footer>

<!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
    function toggleChatbot() {
        var chatbotContainer = document.querySelector('.chatbot-container');
        chatbotContainer.style.display = (chatbotContainer.style.display === 'none' ? 'block' : 'none');
    }
</script>

</body>
</html>
