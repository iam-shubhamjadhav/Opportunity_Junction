<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'php/vendor/autoload.php';


use Azure\Storage\Blob\BlobRestProxy;
use Azure\Storage\Blob\Models\CreateBlobOptions;

$connectionString = "DefaultEndpointsProtocol=https;AccountName=shubham;AccountKey=bPJNQN+VC6VndimOG7y1hKYZ6V5+m27U4q90V5CMCk01DbpQ8E9LDjgZ+yDjM/Auf+b6sV9PTGZE+ASt1lKigw==;EndpointSuffix=core.windows.net";
$containerName = "shubham";

$blobClient = BlobRestProxy::createBlobService($connectionString);

$msg = "Submitted successfully";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $fileName = $_FILES["resume"]["name"];
    $fileTmpName = $_FILES["resume"]["tmp_name"];

    $targetFilePath = $fileName;

    // Check file type
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $allowTypes = array('pdf', 'docx');

    if (in_array($fileType, $allowTypes)) {
        // Upload file to Azure Blob Storage
        try {
            $content = fopen($fileTmpName, "r");
            $options = new CreateBlobOptions();
            $options->setContentType(mime_content_type($fileTmpName));

            $blobClient->createBlockBlob($containerName, $fileName, $content, $options);

            $msg = "Resume uploaded successfully.";
            header("Location:studash.php");
            exit();
        } catch (Exception $e) {
            $msg = "Failed to upload resume: " . $e->getMessage();
        }
    } else {
        $msg = "Sorry, only PDF and DOCX files are allowed.";
    }
}
?>
