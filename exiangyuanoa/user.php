<?php
include 'admininit.php';

if($_POST['domod'])
{
	$address=args('address');
	$mobile=args('mobile');
	$realname=args('realname');
	$password=args('password');
	
	$sql="update admin set address='".$address."',mobile='".$mobile."',realname='".$realname."',password='".md5($password)."' where aid=".$_SESSION['aid'];
	$res=$db->query($sql);
	if($res)
	{
		
		$smarty->assign("flag", 1);
		$smarty->assign("msg","用户信息编辑成功");
		$smarty->assign("url","user.php?m=user&n=set");
		$smarty->display('error.tpl');
	}
	else
	{
		//echo "大幅度大股东豆腐干";
		$smarty->assign("flag", 0);
		$smarty->assign("msg","用户信息编辑失败");
		$smarty->assign("url","user.php?m=user&n=set");
		$smarty->display('error.tpl');
	}
	exit;
}

$sql="select * from admin where aid='".$_SESSION['aid']."'";
$user=$db->getRow($sql);

$smarty->assign("user", $user);
$smarty->assign("m", $m);
$smarty->assign("n", $n);

$smarty->display('user.tpl');
?>