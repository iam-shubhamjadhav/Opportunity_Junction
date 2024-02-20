<!DOCTYPE html>
<html>
<head>
    <title>resumes</title>
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

        table tr td {
            font-family: sans-serif;
            font-size: 0.6cm;
            color: #7B1F06;
        }

        input, textarea {
            font-family: sans-serif;
            font-size: 0.6cm;
            color: #003333;
        }

        .size21 {
            font-style: italic;
        }

        submit {
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

        footer {
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

        .footer-bottom {
            background: rgba(255,255,255,0);
            width: 80vw;
            padding: 4px 0;
            text-align: center;
        }

        .footer-bottom p {
            font-size: 10px;
            word-spacing: 4px;
            text-transform: capitalize;
        }
    </style>
</head>

<body>
<div class="container-fluid p-3 my-3 bg-dark text-white" style="height:130px">
    <img src="logo.png" class="rounded float-left" style="width:100px;height:100px;">
    <center>
        <h1> OPPORTUNITY &nbsp;&nbsp; JUNCTION </h1>
        <h4> Navigate Your Career Path Online </h4>
    </center>
</div>
&nbsp;<button type="button" style="height:40px;width:60px" class="btn btn-primary " onclick="history.back()"><b>Back</b></button>&nbsp;
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <center>
            <div id="adminPane" style="background:rgba(255,255,255,0)" class="jumbotron ">
                <h3>Upload Resume for Review</h3>
                <form action="ressubmit.php" method="post" enctype="multipart/form-data">
                    
                    <div class="input-group" style="margin:15px">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
<input type="file" name="resume" accept=".pdf, .docx"><br><br>
                            </div>
                    <input name="submit" style="background-color: #1c8adb;color: #fff; width: 50%; padding: 10px; border-radius: 20px; font-size: 15px; margin: 10px 0; border: none;outline: none;cursor: pointer;" type="submit" value="Upload Resume">
                </form>
            </div>
        </center>
    </div>
</div>
<center>
    <footer>
        <div class="footer-bottom">
            <p><h6>copyright &copy;2024 OPPORTUNITY JUNCTION. designed by Shubham Jadhav</h6></p>
        </div>
    </footer>
</center>
</body>
</html>
