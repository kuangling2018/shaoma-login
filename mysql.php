<?php
header("Content-Type:application/json;charset=utf-8");
$conn=mysqli_connect("127.0.0.1","root","","shaoma",3306);
mysqli_query($conn,"set names utf8");
$randnumber=$_REQUEST['randnumber'];
$sql="insert into login(randnumber) values($randnumber)";
$result=mysqli_query($conn,$sql);
if($result==false)
{
	echo "请检查".$sql;
}
else
{
	echo '{"code":1,"msg":"导入数据成功"}';
}
?>