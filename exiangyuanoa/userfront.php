<?php
include 'init.php';

if($_POST['domod'])
{
	$address=args('address');
	$mobile=args('mobile');
	$realname=args('realname');
	$password=args('password');
	
	$sql="update user set address='".$address."',mobile='".$mobile."',realname='".$realname."',password='".md5($password)."' where uid=".$_SESSION['uid'];
	$res=$db->query($sql);
	if($res)
	{
		
		$smarty->assign("flag", 1);
		$smarty->assign("msg","用户信息编辑成功");
		$smarty->assign("url","userfront.php?m=user&n=set");
		$smarty->display('error.tpl');
	}
	else
	{
		//echo "大幅度大股东豆腐干";
		$smarty->assign("flag", 0);
		$smarty->assign("msg","用户信息编辑失败");
		$smarty->assign("url","userfront.php?m=user&n=set");
		$smarty->display('error.tpl');
	}
	exit;
}

$sql="select * from user where uid='".$_SESSION['uid']."'";
$user=$db->getRow($sql);

$smarty->assign("user", $user);
$smarty->assign("m", $m);
$smarty->assign("n", $n);

$smarty->display('userfront.tpl');
?>