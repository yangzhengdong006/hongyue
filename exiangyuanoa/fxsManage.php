<?php
include 'admininit.php';



$act=args('act');//这是代表GET
if($act=='editdo')//编辑提交
{
	$aid=args('aid');//这根据get是获取不到的
	$uid=args('uid');//这个可以
	//$username=trim(args('username'));
	$password=trim(args('password'));
	$name=trim(args('name'));
	$province=trim(args('province'));//这获取？？？里的值可以直接在前台
	$mobile=trim(args('mobile'));//这根据get是获取不到的
	$realname=trim(args('realname'));//这根据get是获取不到的
	$address=trim(args('address'));//这根据get是获取不到的
	$beizu=trim(args('beizu'));//这根据get是获取不到的
	//证因为你的get的值是空，所以你前台写的if
	//这样的思路，url上的获取的不能获取province  你看url
	//http://localhost/web/fxsManage.php?act=edit&m=fxs&n=manage&uid=2
	//这表明可以获取act 和m和n 和uid=2
	//那就可以根据uid查user的信息出来。
	//$sql="select * from user where uid=".$uid
	
	//$area=trim(args('area'));
	
	if(!$name||!$mobile||!$realname||!$address)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","信息输入不完整，请重新输入");
			$smarty->assign("url","fxsManage.php?m=fxs&n=manage&act=edit&uid=".$uid);
			$smarty->display('error.tpl');
			exit;	
			
	}
	
	$sql="select * from user where name='".$name."' and uid!=".$uid." limit 1 ";
	$num=$db->getRow($sql);
	if($num)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","分销商名称已经存在，请更换分销商名称");
			$smarty->assign("url","fxsManage.php?m=fxs&n=manage&act=edit&uid=".$uid);
			$smarty->display('error.tpl');
			exit;	
	}
	
	if($password)
	{
		$sql="update user set password='".md5($password)."',name='{$name}',province='{$province}',mobile='{$mobile}',realname='{$realname}',address='{$address}',beizu='{$beizu}',aid='{$aid}' where uid=".$uid;
		
	}
	else
	{
		$sql="update user set  name='{$name}',province='{$province}',mobile='{$mobile}',realname='{$realname}',address='{$address}',beizu='{$beizu}',aid='{$aid}'  where uid=".$uid;
		
	}


	$res=$db->query($sql);
	if($res)
	{ 
		
		$smarty->assign("flag", 1);
		$smarty->assign("msg","编辑成功。".$msg);
		$smarty->assign("url","fxsManage.php?m=fxs&n=manage&act=edit&uid=".$uid);
		$smarty->display('error.tpl');
	}
	else
	{
		//echo "大幅度大股东豆腐干";
		$smarty->assign("flag", 0);
		$smarty->assign("msg","编辑失败");
		$smarty->assign("url","fxsManage.php?m=fxs&n=manage&act=edit&uid=".$uid);
		$smarty->display('error.tpl');
	}
	exit;



}

if($act=='edit')//商品编辑
{	
	$uid=args('uid');
	$sql="select * from user where uid=".$uid;
	$row=$db->getRow($sql);
	
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
		// print_r($row);exit;
		$smarty->assign("user", $row);
		$smarty->assign("m", $m);
		$smarty->assign("n", $n);
		$smarty->display('fxsedit.tpl');
	exit;
}
if($act=='del')//单个删除
{
	$uid=args('uid');
		$sql="select * from wuliu where uid=".$uid." limit 1 ";
		$row=$db->getRow($sql);
		if($row)
		{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","删除失败,该分销商下有物流信息存在");
			$smarty->assign("url","fxsManage.php?m=fxs&n=manage");
			$smarty->display('error.tpl');
			exit;
		}
		
		$sql="delete from user where uid=".$uid;
		$res=$db->query($sql);
		
		if($res)
		{
		
			$smarty->assign("flag", 1);
			$smarty->assign("msg","删除成功");
			$smarty->assign("url","fxsManage.php?m=fxs&n=manage");
			$smarty->display('error.tpl');
		}
		else
		{
			//echo "大幅度大股东豆腐干";
			$smarty->assign("flag", 0);
			$smarty->assign("msg","删除失败");
			$smarty->assign("url","fxsManage.php?m=fxs&n=manage");
			$smarty->display('error.tpl');
		}

	exit;
}


	$aid=args('aid')?args('aid'):$_SESSION['aid'];
	$p=args('p')?args('p'):1;
	$name=args('name');
	$province=args('province');
	$st=($p-1)*10;
	
	if($_SESSION['rank']==1&&$_GET['aid']=="")
	{
		$where= " aid>0 ";
	}
	else
	{
		$where=" aid={$aid} ";
	}
	
	if($name)
	{
		$where.=" and name like '%".$name."%' ";
	}
	if($province)
	{
		$where.=" and province like '%".$province."%' ";
	}
		
	$sql="select * from user where ".$where." limit {$st} ,10 ";
	
	
	$users=$db->getAll($sql);
	
	foreach($users as $k=>$v)
	{
		$aid=$v['aid'];
		$sql="select name from admin where aid=".$aid;
		$aname=$db->getOne($sql);
		$users[$k]['aname']=$aname;
		$provinces=$db->getOne($sql);
		$users[$k]['provinces']=$provinces;

	}
	
	
	$sql="select count(*) total from user where ".$where;
	$total=$db->getOne($sql);
	
	
	
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

	
		
		
		$smarty->assign("users", $users);
		$smarty->assign("m", $m);
			$smarty->assign("rank", $rank);
		$smarty->assign("n", $n);
		
		$page_arr=doAdminPage($p,$total,10);
		
		$smarty->assign("page_arr", $page_arr);
		$smarty->display('fxsManage.tpl');
	
		

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