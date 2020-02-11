<?php

// 连接数据库操作：建立数据库对象，需要四个参数
// 数据库地址，用户名，密码，数据表名称
$host = "127.0.0.1"
$user = "127.0.0.1"
$pwd = "127.0.0.1"
$dbname = "127.0.0.1"

// 创建数据库对象，
$db = new msqli($host, $user, $pwd, $dbname);

// 判断是否连接成功,无果数据库对象的connect_errno属性为0表示连接成功
if($db->connect_errno <> 0){  // 如果不等于0表示连接失败
	echo "连接失败";
}

// 使用db对象执行sql语句,就是用query方法，执行成功就是true，执行失败就是false
$sqlstr = "INSERT INTO msg (user, intime) value ('song', 233424)";
$res = $db->query($sqlstr);

// 判断执行成功还是失败
if($res == true){
	echo "执行成功！";
}else{
	echo "查询失败!";
}
