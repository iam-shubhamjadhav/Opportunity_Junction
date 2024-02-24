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
        // File type is allowed, set success message and redirect
        $msg = "Submitted Successfully.";
        echo "<script>alert('Submitted Successfully'); window.location='studash.php';</script>";
        exit; // Prevent further execution
    } else {
        $msg = "Sorry, only PDF and DOCX files are allowed.";
    }
}
?>
