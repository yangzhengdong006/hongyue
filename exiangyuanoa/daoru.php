<?php
include("config.php");
require("class/mysql.class.php");
$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);

$f = fopen ("1.txt", "r");
$ln= 0;
while (!feof ($f)) {
    $line= fgets ($f);
    ++$ln;
  
    if ($line===FALSE) print ("FALSE\n");
    else 
	
	{
		//$tt=explode(" ",$line);
		$tt=preg_split('/[\n\r\t\s]+/i', trim($line));
		
		echo "<pre>";
		print_r($tt);
		
		echo "</pre>";
		
		$username=$tt[1];
		$password=md5($tt[2]);
		$name=iconv("gbk","utf-8",$tt[0]);
		//echo $name;
		$date=date("Y-m-d,h:i:s",time());
		$sql="insert into user (username,password,name,mobile,realname,address,addtime,beizu,aid) values('{$username}','{$password}','{$name}',' ',' ',' ','{$date}',' ','2')";
		//echo $sql;
		$db->query($sql);
	}
}
fclose ($f);

?>