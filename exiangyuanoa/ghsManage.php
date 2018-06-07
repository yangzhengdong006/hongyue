<?php
include 'admininit.php';

if($_SESSION['rank']!=1)
{
	 header("Location:adminlogin.php");
	 exit;
}

$act=args('act');
if($act=='editdo')//编辑提交
{
	$aid=args('aid');
	//$username=trim(args('username'));
	$password=trim(args('password'));
	$name=trim(args('name'));
	$mobile=trim(args('mobile'));
	$realname=trim(args('realname'));
	$address=trim(args('address'));
	$beizu=trim(args('beizu'));
	
	if(!$name||!$mobile||!$realname||!$address)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","信息输入不完整，请重新输入");
			$smarty->assign("url","ghsManage.php?m=ghs&n=manage&act=edit&aid=".$aid);
			$smarty->display('error.tpl');
			exit;	
			
	}
	
	$sql="select * from admin where name='".$name."' and aid!=".$aid." limit 1 ";
	$num=$db->getRow($sql);
	if($num)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","供货商名称已经存在，请更换供货商名称");
			$smarty->assign("url","ghsManage.php?m=ghs&n=manage&act=edit&aid=".$aid);
			$smarty->display('error.tpl');
			exit;	
	}
	
	if($password)
	{
		$sql="update admin set password='".md5($password)."',name='{$name}',mobile='{$mobile}',realname='{$realname}',address='{$address}',beizu='{$beizu}' where aid=".$aid;
		
	}
	else
	{
		$sql="update admin set  name='{$name}',mobile='{$mobile}',realname='{$realname}',address='{$address}',beizu='{$beizu}' where aid=".$aid;
		
	}


	$res=$db->query($sql);
	if($res)
	{ 
		
		$smarty->assign("flag", 1);
		$smarty->assign("msg","编辑成功。".$msg);
		$smarty->assign("url","ghsManage.php?m=ghs&n=manage&act=edit&aid=".$aid);
		$smarty->display('error.tpl');
	}
	else
	{
		//echo "大幅度大股东豆腐干";
		$smarty->assign("flag", 0);
		$smarty->assign("msg","编辑失败");
		$smarty->assign("url","ghsManage.php?m=ghs&n=manage&act=edit&aid=".$aid);
		$smarty->display('error.tpl');
	}
	exit;



}

if($act=='edit')//商品编辑
{	
	$aid=args('aid');
	$sql="select * from admin where aid=".$aid;
	$row=$db->getRow($sql);
	
	
	

	
		$smarty->assign("user", $row);
		$smarty->assign("m", $m);
		$smarty->assign("n", $n);
		$smarty->display('ghsedit.tpl');
	exit;
}
if($act=='del')//单个删除
{
	$aid=args('aid');
		$sql="select * from user where aid=".$aid;
		$row=$db->getRow($sql);
		if($row)
		{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","删除失败,该供货商下有分销商存在");
			$smarty->assign("url","ghsManage.php?m=ghs&n=manage");
			$smarty->display('error.tpl');
			exit;
		}
		
		$sql="delete from admin where aid=".$aid;
		$res=$db->query($sql);
		
		if($res)
		{
		
			$smarty->assign("flag", 1);
			$smarty->assign("msg","删除成功");
			$smarty->assign("url","ghsManage.php?m=ghs&n=manage");
			$smarty->display('error.tpl');
		}
		else
		{
			//echo "大幅度大股东豆腐干";
			$smarty->assign("flag", 0);
			$smarty->assign("msg","删除失败");
			$smarty->assign("url","ghsManage.php?m=ghs&n=manage");
			$smarty->display('error.tpl');
		}

	exit;
}





	$p=args('p')?args('p'):1;
	$st=($p-1)*10;
	
	$sql="select * from admin where `rank`!=1 limit {$st} ,10 ";
	
	
	$users=$db->getAll($sql);
	
	
	$sql="select count(*) total from admin where `rank`!=1 ";
	$total=$db->getOne($sql);
	

	
		
		
		$smarty->assign("users", $users);
		$smarty->assign("m", $m);
		$smarty->assign("n", $n);
		
		$page_arr=doAdminPage($p,$total,10);
		
		$smarty->assign("page_arr", $page_arr);
		$smarty->display('ghsManage.tpl');
	
		

function getParams() {
	//$url  =  $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?").$_SERVER["QUERY_STRING"];
	//$url  =  $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?").str_replace('&amp;','&',$_SERVER["QUERY_STRING"]);
	$url  =  $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?");
	//echo $_SERVER['REQUEST_URI'];
	$parse = parse_url($url);
	if(isset($parse['query'])) {
		parse_str($parse['query'],$params);
		unset($params['p']);
		$url   =  $parse['path'].'?'.http_build_query($params);
	}
	return  $url;
}

	
function doAdminPage($p,$total,$limit=10){
	$url = getParams();
	$pagecount = ceil($total/$limit);
	$start = ($p-1)*$limit;
	$curPage=$p;
	$nextPage = $p+1;
	$prePage = $p-1;
	$pagestr = '';
	if ($curPage - 6 > 0)
		$minpage = $curPage - 2;
	else
		$minpage = 1;
	if ($curPage + 6 < $pagecount)
		$maxpage = $curPage + 6;
	else
		$maxpage = $pagecount;
	$pagestr .= '<div class="pagination">'."<a href='{$url}&p=1'>&laquo; 第一页</a>";
	if($curPage<=1)
		$pagestr .="<a>&laquo; 上一页</a>";
	else
		$pagestr .="<a href='{$url}&p={$prePage}'>&laquo; 上一页</a>";
	if ($curPage > 6)
		$pagestr .= "<a href='{$url}&p=1' class='number' >1</a><a href='{$url}&p=2' class='number'>2</a><a  class='number'>&nbsp;...&nbsp;</a>";
	for($i = $minpage; $i <= $maxpage; $i ++) {
		if ($i == $curPage)
			$pagestr .= "<a  class='number current'>" . $i . "</a>";
		else
			$pagestr .= "<a href='{$url}&p={$i}'  class='number'>{$i}</a>";
	}
	if ($maxpage  < $pagecount)
		$pagestr .= "<a  class='number'>...</a>";
	if ($curPage != $pagecount)
		$pagestr .= "<a href='{$url}&p={$nextPage}'>下一页 &raquo;</a>";
	else
		$pagestr .="<a>下一页 &raquo;</a>";
	$pagestr .= "<a href='{$url}&p={$pagecount}'>最后一页 &raquo;</a>"."</div>";
	if($pagecount==1)
		$pagestr='';
	return array("start"=>$start,"limit"=>$limit,"str"=>$pagestr);
}


?>