<!DOCTYPE html>
<html>
<head>
    <title>Student Information Page</title>
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        footer {
            margin-top: auto;
            background-color: #f8f9fa;
            padding: 20px 0;
            width: 100%;
        }

        .table-wrapper {
            overflow-y: auto;
            max-height: calc(100vh - 250px); /* Adjust based on your footer and header heights */
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

<center>
    <h2> Student Details </h2>
</center>

<div class="table-wrapper">
    <table class='table table-bordered table-striped'>
        <tr>
            <th>Roll no</th>
            <th>First name</th>
            <th>Surname</th>
            <th>Date of Birth</th>
            <th>Contact number</th>
            <th>Email</th>
            <th>Stream</th>
            <th>Course</th>
            <th>CGPA</th>
            <th>10th marks</th>
            <th>12th marks</th>
            <th>Backlog</th>
            
            <th>Action</th>
        </tr>
        <?php
$servername = "opportunityjunction.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="opportunity";

$conn = new mysqli($servername, $username, $password,$database);

        mysqli_select_db($conn, "opportunity");
        $sql = "Select * from stureg";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['rollno'] ?></td>
                    <td><?php echo $row['stuname'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['contno'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['strm'] ?></td>
                    <td><?php echo $row['course'] ?></td>
                    <td><?php echo $row['score'] ?></td>
                    <td><?php echo $row['ten'] ?></td>
                    <td><?php echo $row['twelve'] ?></td>
                    <td><?php echo $row['backlog'] ?></td>
                    
                    <td><a href="deleteStudent.php?rollno=<?php echo $row['rollno'] ?>">Delete</a></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</div>

<footer>
     <div class="footer-bottom">
         <center>   <h6>copyright &copy;2024 OPPORTUNITY JUNCTION. designed by Shubham Jadhav</h6></center>
        </div>
</footer>

</body>
</html>
