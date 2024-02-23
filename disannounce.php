<!DOCTYPE html>
<html>
<head>
    <title>Announcements</title>
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

        .announcement-box {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .announcement-date {
            font-weight: bold;
            color: #007bff;
        }

        .announcement-description {
            margin-top: 5px;
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
<button type="button" style="height:40px;width:60px" class="btn btn-primary" onclick="history.back()"><b>Back</b></button>
<div class="container">
    <h1 class="text-center">Announcements</h1>
    <?php
$servername = "opportunityjunction.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="opportunity";

$conn = new mysqli($servername, $username, $password,$database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM anouncement ORDER BY date description";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="announcement-box">
                <div class="announcement-date">Date: <?php echo $row["date"]; ?></div>
                <div class="announcement-description">
                    Opening: <?php echo $row["description"]; ?> 
                    <?php if (!empty($row["link"])) { ?><br>Link :-
                        <a href="<?php echo $row["link"]; ?>" target="_blank">Click Here</a>
                    <?php } ?>
                </div>
            </div>
            <?php
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
</div>
<center>
    <footer>
        <div class="footer-bottom">
            <h6>copyright &copy;2024 OPPORTUNITY JUNCTION. designed by Shubham Jadhav</h6>
        </div>
    </footer>
</center>
</body>
</html>
