<?php
session_start();
$_SESSION['username'] =  null;
$_SESSION['uid'] = null;
session_destroy();
header("location: alumni.php")
?>

