<?php
$servername = "apahe.mysql.database.azure.com";
$username = $_ENV['MYSQL_USERNAME'];
$password = $_ENV['MYSQL_PASSWORD'];
$database="opportunity";

$conn = new mysqli($servername, $username, $password,$database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start session
session_start();

if (isset($_POST['submit'])) {
    // Retrieve form data
    $old_pass = $_POST['password1'];
    $new_pass = $_POST['newpassword'];
    $email = $_POST['email1'];

    // Query database to retrieve password associated with the provided email address
    $password_query = mysqli_query($conn, "SELECT * FROM usertable WHERE email = '$email'");
    if (!$password_query) {
        die("Error: " . mysqli_error($conn));
    }

    $password_row = mysqli_fetch_assoc($password_query);
    if ($password_row) {
        $database_password = $password_row['password'];

        // Check if the old password matches the password retrieved from the database
        if ($database_password == $old_pass) {
            // Update password in the database
            $update_pwd = mysqli_query($conn, "UPDATE usertable SET password = '$new_pass' WHERE email = '$email'");
            if (!$update_pwd) {
                die("Error updating password: " . mysqli_error($conn));
            }

            // Display success message and redirect
            echo "<script>alert('Password updated successfully'); window.location='studash.php'</script>";
        } else {
            // Display error message for incorrect old password
            echo "<script>alert('Your old password is wrong'); window.location='studash.php'</script>";
        }
    } else {
        // Display error message for email not found
        echo "<script>alert('Email not found'); window.location='studash.php'</script>";
    }
}

// Close database connection
mysqli_close($conn);
?>
