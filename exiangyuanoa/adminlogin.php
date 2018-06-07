<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if($_SESSION['username'])
{
	 header("Location:admin.php");
	 exit;
}
if($_POST['dolog'])
{
	include("config.php");
	require("class/mysql.class.php");
	$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);
	
	$sql="select * from admin where username='".trim($_POST['username'])."' limit 1 ";
	
	$row=$db->getRow($sql);
	if(!$row)
	{
		$tts= "<b style='color:red'>该账户不存在!</b>";
		
	}
	else
	{
		
		if($row['password']!=md5(trim($_POST['password'])))
		{
			$tts= "<b style='color:red'>密码错误!</b>";
		}
		else
		{
			 $_SESSION['username']=trim($_POST['username']);
			 $_SESSION['aid']=trim($row['aid']);
			 $_SESSION['rank']=trim($row['rank']);
			 
			
			 
			 header("Location:admin.php");
			 exit;
		}
	}
	
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>物流信息查询系统_登录</title>
<meta name="keywords" content="物流信息查询系统">
<meta name="description" content="物流信息查询系统">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<script src="./js/jquery.js" language="javascript"></script>
<link type="text/css" rel="stylesheet" href="./css/validator.css"></link>
<script src="./js/formValidator.js" type="text/javascript" charset="UTF-8"></script>
<script src="./js/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function(){
	$.formValidator.initConfig({formid:"form1",onerror:function(){alert("校验没有通过，具体错误请看错误提示")}});
	
	//$("#password1").formValidator({onshow:"请输入密码",onfocus:"密码不能为空",oncorrect:"密码合法"}).inputValidator({min:1,empty:{leftempty:false,rightempty:false,emptyerror:"密码两边不能有空符号"},onerror:"密码不能为空,请确认"});





	//$("#yhm").formValidator({onshow:"请输入用户名",oncorrect:"谢谢你的合作，你的用户名正确"}).regexValidator({regexp:"username",datatype:"enum",onerror:"用户名格式不正确"});


});
</script>
<style type="text/css" media="all">
body,div{font-size:12px; margin:10px;}
</style>
</head>
<body>
<div style="width:100%; margin:0px auto 0px auto;border-top:4px solid #67ad03; border-bottom:1px solid #c3c3c3; height:60px;background-color:#f3f3f3; margin-left:0px;">
	<div style="margin-top:5px; margin-left:10px; float:left;"> <img src="/images/bg_logo.png" alt="物流信息查询评价"></div>
	<div  style="margin-right:10px; margin-top:15px; float:right; font-size:14px; color:#666666;"></div>
</div>

<div style="height:100px;"></div>
<div style="width:100%;  margin-top:40px;">

<form action="./adminlogin.php" method="post" name="form1" id="form1">
<table width="60%" border="0" align="center" cellpadding="0" cellspacing="5" style="font-size:12px;">
  <tr>
    <td align="right">用户名：</td>
    <td><input type="text" id="yhm" style="width:120px"  name="username"/></td>
    <td><div id="yhmTip"></div></td>
  </tr>
  <tr>
    <td align="right">密码：</td>
    <td><input type="password" id="password1" class="sz" style="width:120px"  name="password"/></td>
    <td><div id="password1Tip"></div></td>
  </tr>
  <tr>
    <td align="right"><input type="hidden" name="dolog" value="1"></td>
    <td><input type="submit" name="button" id="button" value="登录" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
    <td><?php echo $tts;?></td>
    <td></td>
  </tr>
</table>

</form>
</div>

<div style="width:100%; margin:auto; text-align:center; color:#666666; font-size:14px; clear:both;">
	
</div>
</body>
</html>
