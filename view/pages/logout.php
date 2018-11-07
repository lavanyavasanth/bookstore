<!--destroying session-->
<?php
session_start();
session_destroy();
$_SESSION[ 'message' ] = "Logged out successfully";
header("location:../../login.php");
?>