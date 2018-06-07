<?php
include 'admininit.php';


if($_POST['doadd'])
{
	
	$username=trim(args('username'));
	$password=trim(args('password'));
	$name=trim(args('name'));
	$province=trim(args('province'));
	$mobile=trim(args('mobile'));
	$realname=trim(args('realname'));
	$address=trim(args('address'));
	$beizu=trim(args('beizu'));
	
	//$area=trim(args('area'));
	
	$aid=trim(args('aid'));
	
	if(!$username||!$password||!$name||!$mobile||!$realname||!$address)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","信息输入不完整，请重新输入");
			$smarty->assign("url","fxsAdd.php?m=fxs&n=add");
			$smarty->display('error.tpl');
			exit;	
			
	}
	
	
	$sql="select * from user where username='".$username."' limit 1 ";
	
	
	$num=$db->getRow($sql);
	
	print_r($num);
		if($num)
		{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","分销商帐号已经存在，请更换帐号名称");
			$smarty->assign("url","fxsAdd.php?m=fxs&n=add");
			$smarty->display('error.tpl');
			exit;	
		}
		
		$sql="select * from user where name='".$name."' limit 1 ";
		$num=$db->getRow($sql);
		if($num)
		{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","分销商名称已经存在，请更换分销商名称");
			$smarty->assign("url","fxsAdd.php?m=fxs&n=add");
			$smarty->display('error.tpl');
			exit;	
		}
	
	

		
		
	
	$sql="insert into user (username,`password`,`name`,province,mobile,realname,address,addtime,beizu,`aid`) values('".$username."','".md5($password)."','".$name."','".$province."','".$mobile."','".$realname."','".$address."','".date("Y-m-d H:i:s",time())."','".$beizu."',{$aid})";
	

	
	$res=$db->query($sql);
	if($res)
	{ 
		
		$smarty->assign("flag", 1);
		$smarty->assign("msg","分销商增加成功。".$msg);
		$smarty->assign("url","fxsManage.php?m=fxs&n=manage");
		$smarty->display('error.tpl');
	}
	else
	{
		//echo "大幅度大股东豆腐干";
		$smarty->assign("flag", 0);
		$smarty->assign("msg","分销商增加失败");
		$smarty->assign("url","fxsAdd.php?m=fxs&n=add");
		$smarty->display('error.tpl');
	}
	exit;

}

$smarty->assign("m", $m);
$smarty->assign("n", $n);

$rank=$_SESSION['rank'];
if($rank==1)
{
	$sql="select * from admin where rank!=1";
	$ghss=$db->getAll($sql);

}
else
{
	$sql="select * from admin where aid=".$_SESSION['aid'];
	$ghss=$db->getAll($sql);
}

$sql1="select * from province";
$ghs=$db->getAll($sql1);
$smarty->assign("ghs", $ghs);
$smarty->assign("ghss", $ghss);

$smarty->display('fxsAdd.tpl');


?>