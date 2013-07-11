<?php
	header("content-type:text/html;charset=utf-8");
	include("./header.php");
	$result=mysql_query("select * from biaodan");
	while($arr=mysql_fetch_array($result)){
		echo "第：".$arr[0]."条<br>";
		echo "姓名:".$arr[1]."<br>";
		echo "密码:".$arr[2]."<br>";
		echo "性别：".$arr[3]."<br>";
		echo "------------------------------<br>";
	}
	echo "<a href='aa.php'>继续注册</a>";

?>fd