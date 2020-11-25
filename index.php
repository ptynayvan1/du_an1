<?php
ob_start();
session_start();
// header("location: site/index.php");
// tao ms vua biet dung github
if ($_SESSION['role']==1) {
    require_once "admin/index.php";
} else {
    require_once "site/index.php";
}
?>