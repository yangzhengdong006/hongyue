<?php
session_start();
$_SESSION['username']="";
$_SESSION['uid']="";

header("Location:login.php");
exit;


?>