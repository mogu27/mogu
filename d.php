fgdfg<?php

	header("content-type:text/html;charset=utf-8");
	$link = @mysql_connect("localhost","root","root") or die("连接数据库失败");
	mysql_select_db("liuyan");
	mysql_query("set names utf-8");

?>