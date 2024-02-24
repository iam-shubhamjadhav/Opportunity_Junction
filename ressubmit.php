<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$msg = ""; // Initialize message variable

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $fileName = $_FILES["resume"]["name"];
    $fileTmpName = $_FILES["resume"]["tmp_name"];

    $targetFilePath = $fileName;

    // Check file type
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowTypes = array('pdf', 'docx');

    if (in_array($fileType, $allowTypes)) {
        // File type is allowed, echo success message
        $msg = "File uploaded successfully.";
    } else {
        $msg = "Sorry, only PDF and DOCX files are allowed.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
</head>
<body>
    <h2>Upload Resume</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="resume" accept=".pdf,.docx">
        <input type="submit" name="submit" value="Upload">
    </form>
    <?php echo $msg; ?> <!-- Display message -->
</body>
</html>
