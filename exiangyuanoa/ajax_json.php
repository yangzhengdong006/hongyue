<?php
include 'admininit.php';
$aid=$_POST['aid'];
$province=$_POST['province'];
$sql="select * from user where aid='{$aid}' and province='{$province}'";
$users=$db->getAll($sql);

foreach($users as $user)
{
	echo "<option value='".$user['uid']."'>".$user['name']."</option>";

}
//print_r($users);

//echo $_POST['aid'];

?>