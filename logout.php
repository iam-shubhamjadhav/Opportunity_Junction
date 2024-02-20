
<?php
session_start();
session_destroy();
echo "<script>alert('Logout successful'); window.location='index.php'</script>";
?>
