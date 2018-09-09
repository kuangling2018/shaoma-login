<?php
$conn=mysqli_connect("127.0.0.1","root","","shaoma",3306);
mysqli_query($conn,"set names utf8");
$randnumber=$_REQUEST['randnumber'];
$name=$_REQUEST['name'];
$sql="update login set name='$name' where randnumber='$randnumber'";
$result=mysqli_query($conn,$sql);
if($result==false)
{
	echo "请检查".$sql;
}
?>