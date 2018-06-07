<?php
include 'admininit.php';
if($_SESSION['rank']!=1)
{
	 header("Location:adminlogin.php");
	 exit;
}

if($_POST['doadd'])
{
	
	$username=trim(args('username'));
	$password=trim(args('password'));
	$name=trim(args('name'));
	$mobile=trim(args('mobile'));
	$realname=trim(args('realname'));
	$address=trim(args('address'));
	$beizu=trim(args('beizu'));
	
	if(!$username||!$password||!$name||!$mobile||!$realname||!$address)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","信息输入不完整，请重新输入");
			$smarty->assign("url","ghsAdd.php?m=ghs&n=add");
			$smarty->display('error.tpl');
			exit;	
			
	}
	
	
	$sql="select * from admin where username='".$username."' limit 1 ";
	$num=$db->getRow($sql);
		if($num)
		{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","供货商帐号已经存在，请更换帐号名称");
			$smarty->assign("url","ghsAdd.php?m=ghs&n=add");
			$smarty->display('error.tpl');
			exit;	
		}
		
		$sql="select * from admin where name='".$name."' limit 1 ";
		$num=$db->getRow($sql);
		if($num)
		{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","供货商名称已经存在，请更换供货商名称");
			$smarty->assign("url","ghsAdd.php?m=ghs&n=add");
			$smarty->display('error.tpl');
			exit;	
		}
	
	

		
		
	
	$sql="insert into admin (username,`password`,`name`,mobile,realname,address,addtime,beizu,`rank`) values('".$username."','".md5($password)."','".$name."','".$mobile."','".$realname."','".$address."','".date("Y-m-d H:i:s",time())."','".$beizu."','2')";
	
	//$sstr=
	
	$res=$db->query($sql);
	if($res)
	{ 
		
		$smarty->assign("flag", 1);
		$smarty->assign("msg","供货商增加成功。".$msg);
		$smarty->assign("url","ghsManage.php?m=ghs&n=manage");
		$smarty->display('error.tpl');
	}
	else
	{
		//echo "大幅度大股东豆腐干";
		$smarty->assign("flag", 0);
		$smarty->assign("msg","供货商增加失败");
		$smarty->assign("url","ghsAdd.php?m=ghs&n=add");
		$smarty->display('error.tpl');
	}
	exit;

}

$smarty->assign("m", $m);
$smarty->assign("n", $n);

$smarty->display('ghsAdd.tpl');


?>