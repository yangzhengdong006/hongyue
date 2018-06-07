<?php
include 'admininit.php';



$act=args('act');
if($act=='editdo')//编辑提交
{
	if($_SESSION['rank']!=1)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","你无权限编辑物流信息");
			$smarty->assign("url","wuliuManage.php?m=wuliu&n=manage");
			$smarty->display('error.tpl');
	 	 exit;
	}

	
	
	$id=trim(args('id'));
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
	
	$prank=trim(args('prank'));
	$pinfo=trim(args('pinfo'));
	
	if(!$uid||!$aid||!$name||!$phone||!$fatime||!$address||!$daotime||!$shumu||!$price)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","信息输入不完整或不准确，请重新输入");
			$smarty->assign("url","wuliuManage.php?m=wuliu&n=manage&id=".$id."&act=edit");
			$smarty->display('error.tpl');
			exit;	
			
	}
	
	$now=date("Y-m-d H:i:s");
	

		
	$sql="update wuliu set aid={$aid},uid={$uid},fatime='{$fatime}',daotime='{$daotime}',name='{$name}',province='{$province}',shumu={$shumu},price='{$price}',phone='{$phone}',address='{$address}',beizu='{$beizu}',prank={$prank},pinfo='{$pinfo}',uptime='{$now}' where id={$id} ";
	

	
	$res=$db->query($sql);
	if($res)
	{ 
		
		$smarty->assign("flag", 1);
		$smarty->assign("msg","物流信息编辑成功。".$msg);
		$smarty->assign("url","wuliuManage.php?m=wuliu&n=manage&id=".$id."&act=edit");
		$smarty->display('error.tpl');
	}
	else
	{
		//echo "大幅度大股东豆腐干";
		$smarty->assign("flag", 0);
		$smarty->assign("msg","物流信息编辑失败");
		$smarty->assign("url","wuliuManage.php?m=wuliu&n=manage&id=".$id."&act=edit");
		$smarty->display('error.tpl');
	}
	exit;






}

if($act=='edit')//商品编辑
{	
	
	
	
	$id=args('id');
	$sql="select * from wuliu where id=".$id;
	$row=$db->getRow($sql);
	
	$row['fatime']=substr($row['fatime'],0,10);
	$row['daotime']=substr($row['daotime'],0,10);
	
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
	
	$sql="select * from user where aid=".$row['aid'];
	$fxss=$db->getAll($sql);
	$smarty->assign("fxss", $fxss);
	
		$smarty->assign("wuliu", $row);
		$smarty->assign("m", $m);
		$smarty->assign("n", $n);
		$smarty->display('wuliuedit.tpl');
	exit;
}


if($act=='cha')//商品编辑
{	
	$id=args('id');
	$sql="select * from wuliu where id=".$id;
	$row=$db->getRow($sql);
	
	$row['fatime']=substr($row['fatime'],0,10);
	$row['daotime']=substr($row['daotime'],0,10);
	
		$uid=$row['uid'];
		$aid=$row['aid'];
		$sql="select name from admin where aid={$aid} limit 1 ";
		$tem=$db->getOne($sql);
		$row[aname]=$tem;
		
		$sql="select name from user where uid={$uid} limit 1 ";
		$tem=$db->getOne($sql);
		$row[uname]=$tem;
	
		$row[prankname]=$G_rank[$row['prank']];
		
		$smarty->assign("wuliu", $row);
		$smarty->assign("m", $m);
		$smarty->assign("n", $n);
		$smarty->display('wuliucha.tpl');
		exit;
}

if($act=='del')//单个删除
{
		if($_SESSION['rank']!=1)
		{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","你无权限删除物流信息");
			$smarty->assign("url","wuliuManage.php?m=wuliu&n=manage");
			$smarty->display('error.tpl');
	 	 exit;
		}
	
		$id=args('id');
		
		
		$sql="delete from wuliu where id=".$id;
		$res=$db->query($sql);
		
		if($res)
		{
		
			$smarty->assign("flag", 1);
			$smarty->assign("msg","删除成功");
			$smarty->assign("url","wuliuManage.php?m=wuliu&n=manage");
			$smarty->display('error.tpl');
		}
		else
		{
			//echo "大幅度大股东豆腐干";
			$smarty->assign("flag", 0);
			$smarty->assign("msg","删除失败");
			$smarty->assign("url","wuliuManage.php?m=wuliu&n=manage");
			$smarty->display('error.tpl');
		}

	exit;
}


	$aid=args('aid')?args('aid'):$_SESSION['aid'];
	
	$uid=args('uid');
	$p=args('p')?args('p'):1;
	
	$prank=args('prank');
	$province=args('province');
	$fatime1=args('fatime1');
	$fatime2=args('fatime2');
	$daotime1=args('daotime1');
	$daotime2=args('daotime2');
	
	$st=($p-1)*10;
	
	if($_SESSION['rank']==1&&$_GET['aid']=="")
	{
		$where= " aid>0 ";
	}
	else
	{
		$where=" aid={$aid} ";
	}
	
	if($uid)
	{
		$where.=" and uid = '{$uid}' ";
	}
	
	if($prank)
	{
		$where.=" and prank = '{$prank}' ";
	}

	if($province)
		
	{
		$where.=" and province = '{$province}' ";
	}
	
	if($fatime1)
	{
		$where.=" and fatime >= '{$fatime1}' ";
	}
	
	if($fatime2)
	{
		$where.=" and fatime <= '{$fatime2}' ";
	}
	
	if($daotime1)
	{
		$where.=" and daotime >= '{$daotime1}' ";
	}
	
	if($daotime2)
	{
		$where.=" and daotime <= '{$daotime2}' ";
	}
	
	
	
		
	$sql="select * from wuliu where ".$where." limit {$st} ,10 ";
	
	//echo $sql;
	
	$wulius=$db->getAll($sql);
	
	foreach($wulius as $k=>$v)
	{
		$uid=$v['uid'];
		$aid=$v['aid'];
		$sql="select name from admin where aid={$aid} limit 1 ";
		$tem=$db->getOne($sql);
		$wulius[$k][aname]=$tem;
		
		$sql="select name from user where uid={$uid} limit 1 ";
		$tem=$db->getOne($sql);
		$wulius[$k][uname]=$tem;
		
		
		$wulius[$k][fatime]=substr($v['fatime'],0,10);
		$wulius[$k][daotime]=substr($v['daotime'],0,10);
		$wulius[$k][uptime]=substr($v['uptime'],0,10);
		
		$wulius[$k][prankname]=$G_rank[$v['prank']];
		$wulius[$k][provincename]=$G_rank[$v['province']];
		
	
	}
	
	
	$sql="select count(*) total from wuliu where ".$where;
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

	
		
		$smarty->assign("wulius", $wulius);
		$smarty->assign("m", $m);
			$smarty->assign("rank", $rank);
		$smarty->assign("n", $n);
		
		$page_arr=doAdminPage($p,$total,10);
		
		$smarty->assign("page_arr", $page_arr);
		$smarty->display('wuliuManage.tpl');
	
		

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