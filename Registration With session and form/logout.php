<?php session_start();
unset($_SESSION['raji']);
session_destroy();
header("location:index.php");

?>