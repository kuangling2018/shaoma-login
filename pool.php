<?php
header("Content-Type:application/json;charset=utf-8");
$conn=mysqli_connect("127.0.0.1","root","","shaoma",3306);
mysqli_query($conn,"set names utf8");
$randnumber=$_REQUEST['randnumber'];
$sql="select name from login where randnumber='$randnumber'";
$result=mysqli_query($conn,$sql);
if($result==false)
{
	echo "请检查".$sql;
}
else
{
	$row=mysqli_fetch_row($result)[0];
	if($row!==null)
	{
		echo '{"code":1,"msg":"扫码成功"}';
	}
	else
	{
		echo '{"code":-1,"msg":"等待扫码"}';
	}	
}
?>