<?php 
session_start();
unset($_SESSION['admin']);
unset($_SESSION['pass']);
header("location:login.php");
?>