<?php
	header("content-type:text/html;charset=utf-8");
	include("./header.php");
	$username = $_POST["username"];
	$pass = $_POST["pass"];
	$sex = $_POST["sex"];

$sql = "insert into biaodan(username,pass,sex) values('$username','$pass','$sex')";

	if(empty($pass)){
		echo "密码不能为空<br>";
		echo  "<a href='aa.php'>继续注册</a>";
		exit;
	}
	if(empty($username)){
		echo "姓名不能为空<br>";
		echo  "<a href='aa.php'>继续注册</a>";f
		exit;
	}
	$pattern="/^\w{6,}$/";
	if(!preg_match($pattern,$pass)){	
		echo "密码格式不正确<br>";
		echo  "<a href='aa.php'>继续注册</a>";
		exit;
	}
	$sql="select * from biaodan where username='$username'";
	$re=mysql_query($sql);
	if(mysql_num_rows($re)>0){
		echo "用户名已存在，换个吧<br>";
		echo  "<a href='aa.php'>继续注册</a>";
		exit;
	}
if(mysql_query($sql)){
		echo "提交成功<br>";
		echo "<a href='cc.php'>查看表单</a>";
	}else{
		echo "提交失败！".mysql_error();
	}

?>