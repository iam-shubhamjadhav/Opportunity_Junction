<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "apahe.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="opportunity";

$conn = new mysqli($servername, $username, $password,$database);
$msg = "Submitted successfully";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["resume"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

    $allowTypes = array('pdf', 'docx');
    if (in_array($fileType, $allowTypes)) {
        if ($_FILES["resume"]["size"] > 5 * 1024 * 1024) {
            $msg = "Sorry, your file is too large. It should be less than 5MB.";
        } else {
            if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath)) {
                $sql = "INSERT INTO resumes (filename, date_uploaded) VALUES ('$fileName', NOW())";
                if ($conn->query($sql) === true) {
                    $msg = "Resume uploaded successfully.";
                    header("Location:studash.php");
                    exit();
                } else {
                    $msg = "Failed to upload resume: " . $conn->error;
                }
            } else {
                $msg = "File upload failed.";
            }
        }
    } else {
        $msg = "Sorry, only PDF and DOCX files are allowed.";
    }
}
?>
