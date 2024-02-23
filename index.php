<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opportunity Junction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url('khj.jpeg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
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
        }
        .chatbot-container {
            position: fixed;
            bottom: 50px;
            right: 20px;
            display: none;
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

<div class="container-fluid p-3 my-3 bg-dark text-white" style="height:130px">
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

<div class="container-fluid p-3 my-3 bg-light text-dark">
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
        </center>
    </div>
</div>

<footer>
    <div class="footer-bottom">
        <h6>Copyright &copy;2024 OPPORTUNITY JUNCTION. designed by Shubham Jadhav</h6>
    </div>
</footer>

<div class="chatbot-container" id="chatbot-container">
    <iframe src="https://webchat.botframework.com/embed/jobchatbot-bot?s=4vKRPVpHOrI.hudYSENIO9VuSnOFCZJtKCGul92e3Er0SxSy2bP811I" class="chatbot-frame"></iframe>
</div>

<script>
    $(document).ready(function(){
        $('#chatbot-toggle').click(function(){
            $('#chatbot-container').toggle();
        });
    });
</script>

</body>
</html>
