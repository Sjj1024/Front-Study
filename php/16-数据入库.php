<?php

// 将留言数据写入数据库

$name = "张三";
$age = 18;

$host = "127.0.0.1";
$user = "root";
$pwd = "root";
$dbname = "msg";

// 连接数据库
$db = mysqli($host, $user, $pwd, $dbname);

// 判断是否连接成功
if($db -> connect_errno <> 0){
	echo "连接错误";
}else{
	echo "连接成功！";
}

// 获取时间的方法,获取到的是一个时间戳
$time = time();


// 指定数据连接时的编码为utf8；否则会出现存入数据乱码情况,执行数据库连接时必须先执行这条语句
$db->query("SET NAMES UTF8");

// 字符串填充使用的是花括号
$sqlstr = "INSERT INTO msg (content, user) values ('{$name}','{$age}')";
$db->query($sqlstr);
