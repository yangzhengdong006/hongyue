<?php
session_start();
$_SESSION['username']="";
$_SESSION['aid']="";
$_SESSION['rank']="";
header("Location:adminlogin.php");
exit;


?>