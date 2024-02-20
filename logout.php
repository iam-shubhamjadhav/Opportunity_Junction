
<?php
session_start();
session_destroy();
echo "<script>alert('Logout successful'update); window.location='index.php'</script>";
header("location: index.php")
?>
