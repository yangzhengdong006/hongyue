<?php
include 'init.php';



$act=args('act');
if($act=='editdo')//编辑提交
{
	

	
	
	$id=trim(args('id'));
	$uid=$_SESSION['uid'];
	
	
	$prank=trim(args('prank'));
	$pinfo=trim(args('pinfo'));
	
	
	
	
	if(!$id||!$uid)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","不能评价无效信息");
			$smarty->assign("url","wuliufront.php?m=wuliu&n=manage");
			$smarty->display('error.tpl');
			exit;	
			
	}
	
	$sql="select * from wuliu where id=".$id." limit 1 ";
	$row=$db->getRow($sql);
	
	if($row['uid']!=$uid)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","不能评价其他商户的信息");
			$smarty->assign("url","wuliufront.php?m=wuliu&n=manage");
			$smarty->display('error.tpl');
			exit;	
	}
	
	$now=date("Y-m-d H:i:s");

		
	$sql="update wuliu set prank={$prank},pinfo='{$pinfo}',uptime='{$now}' where id={$id} ";
	

	
	$res=$db->query($sql);
	if($res)
	{ 
		
		$smarty->assign("flag", 1);
		$smarty->assign("msg","物流信息评价成功。".$msg);
		$smarty->assign("url","wuliufront.php?m=wuliu&n=manage&id=".$id."&act=cha");
		$smarty->display('error.tpl');
	}
	else
	{
		//echo "大幅度大股东豆腐干";
		$smarty->assign("flag", 0);
		$smarty->assign("msg","物流信息评价失败");
		$smarty->assign("url","wuliufront.php?m=wuliu&n=manage&id=".$id."&act=cha");
		$smarty->display('error.tpl');
	}
	exit;






}




if($act=='cha')//商品编辑
{	
	$id=args('id');
	
	$uid=$_SESSION['uid'];
	if(!$id||!$uid)
	{
			$smarty->assign("flag", 0);
			$smarty->assign("msg","不能评价无效信息");
			$smarty->assign("url","wuliufront.php?m=wuliu&n=manage");
			$smarty->display('error.tpl');
			exit;	
			
	}
	
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
		$smarty->display('wuliuchapin.tpl');
		exit;
}




	$uid=$_SESSION['uid'];
	
		$sql="select name from user where uid={$uid} limit 1 ";
		$myname=$db->getOne($sql);
		$smarty->assign("myname", $myname);
			
	
	
	$p=args('p')?args('p'):1;
	
	$prank=args('prank');
	
	$fatime1=args('fatime1');
	$fatime2=args('fatime2');
	$daotime1=args('daotime1');
	$daotime2=args('daotime2');
	
	$st=($p-1)*10;
	
	
	
	if($uid)
	{
		$where="  uid = '{$uid}' ";
	}
	
	if($prank)
	{
		$where.=" and prank = '{$prank}' ";
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
		
		$wulius[$k][prankname]=$G_rank[$v['prank']];
		
		
	
	}
	
	
	$sql="select count(*) total from wuliu where ".$where;
	$total=$db->getOne($sql);
	
	
	
	


	

	
		
		$smarty->assign("wulius", $wulius);
		$smarty->assign("m", $m);
			
		$smarty->assign("n", $n);
		
		$page_arr=doAdminPage($p,$total,10);
		
		$smarty->assign("page_arr", $page_arr);
		$smarty->display('wuliufront.tpl');
	
		

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