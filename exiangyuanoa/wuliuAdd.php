<?php
include 'admininit.php';
if($_SESSION['rank']!=1)
{
	 if($_SESSION['rank']!=1)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","你无权限增加物流信息");
			$smarty->assign("url","wuliuManage.php?m=wuliu&n=manage");
			$smarty->display('error.tpl');
	 	 exit;
	}
	 exit;
}


if($_POST['doadd'])
{
	
	$uid=trim(args('uid'));
	$aid=trim(args('aid'));
	$fatime=trim(args('fatime'));
	$daotime=trim(args('daotime'));
	$name=trim(args('name'));
	$province=trim(args('province'));
	$shumu=intval(trim(args('shumu')));
	$price=intval(trim(args('price')));
	$phone=trim(args('phone'));
	$address=trim(args('address'));
	$beizu=trim(args('beizu'));
	
	
	
	if(!$uid||!$aid||!$name||!$phone||!$fatime||!$address||!$daotime||!$shumu||!$price)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","信息输入不完整或不准确，请重新输入");
			$smarty->assign("url","wuliuAdd.php?m=wuliu&n=add");
			$smarty->display('error.tpl');
			exit;	
			
	}
	
	
	
	

		
		
	
	$sql="insert into wuliu (aid,`uid`,`fatime`,daotime,name,province,shumu,price,address,uptime,phone,beizu) values('".$aid."','".$uid."','".$fatime."','".$daotime."','".$name."','".$province."','".$shumu."','".$price."','".$address."','".date("Y-m-d H:i:s",time())."','".$phone."','".$beizu."')";
	

	
	$res=$db->query($sql);
	if($res)
	{ 
		
		$smarty->assign("flag", 1);
		$smarty->assign("msg","物流信息增加成功。".$msg);
		$smarty->assign("url","wuliuManage.php?m=wuliu&n=manage");
		$smarty->display('error.tpl');
	}
	else
	{
		//echo "大幅度大股东豆腐干";
		$smarty->assign("flag", 0);
		$smarty->assign("msg","物流信息增加失败");
		$smarty->assign("url","wuliuAdd.php?m=wuliu&n=add");
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
$now=date("Y-m-d",time());
$smarty->assign("now", $now);



$smarty->display('wuliuAdd.tpl');


?>