<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
///memcache_init();
if(!$_SESSION['username'])
{
	 header("Location:login.php");
	 exit;
}
if($_SESSION['rank'])
{
	 $_SESSION['rank']="";
	 $_SESSION['username']="";
	 $_SESSION['aid']="";
	 header("Location:login.php");
	 exit;
}


include("config.php");
require("class/mysql.class.php");
require 'class/smarty/Smarty.class.php';
$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);



 
$smarty = new Smarty;

$smarty->debugging = false;
$smarty->caching = false;


$smarty->assign("username", $_SESSION['username']);


$m=$_GET['m'];
$n=$_GET['n'];

$uid=$_SESSION['uid'];
	
		$sql="select name from user where uid={$uid} limit 1 ";
		$myname=$db->getOne($sql);
		$smarty->assign("myname", $myname);
		

function args($name,$method=null,$type=null) {
	$methodlist = array("auto","get","post");

	if(empty($method)){
		$method = "auto";
		$type="nocheck";
	}
	if(!in_array(strtolower($method),$methodlist, true)){
		$type=strtolower($method);
		$method="auto";
	}else{
		$method=strtolower($method);
		$type=strtolower($type);
	}

	$args = null;
	switch($method){
		case "auto":{};
		case "post":{$args = $_POST[$name];if(isset($args)) break;}
		case "get":{$args = $_GET[$name];if(isset($args)) break;};
		default:$args=null;
	}
	return checkargs($args,$type);
}

function checkargs($args,$type=null){
	$typelist=array("int","float","string","json","date","serial");
	if (!isset($args)) {
		return '';
	}
	if ((!empty($type)&&$type=="nocheck")||!in_array($type,$typelist)) {
		$type = "nocheck";
	} else {
		$type = strtolower($type);
	}

	if(is_array($args)){
		foreach($args as $key =>$value){
			$args[$key] = checkargs($value,$type);
		}
		return $args;
	}else{
		switch ($type){
			case "int"    : $args = intval($args);break;
			case "float"  : $args = floatval($args);break;
			case "string" : $args = strval($args);break;
			case "json"   : $args = json_decode($args,true);break;
			case "date"   : $args = strtotime($args);break;
			case "serial" : $args = unserialize($args);break;
		}
		return $args;
	}
}

?>