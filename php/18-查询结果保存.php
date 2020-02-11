<?php


// 通常会将查询结果保存到一个数组中；
$content_arr = [];

// 创建数据库信息
$host = "127.0.0.1";
$user = "root";
$pwd = "root";
$dbname = "msg";

// 创建数据库对象
$db = myqli($host, $user, $pwd, $dbname);
if($db -> connect_errno <> 0){
	echo "连接失败！";
}
// 设置连接的编码格式
$db->query("SET NAMES UTF8");

// 获取查询对象
$dbstr = "SELECT * FROM msg";
$res = $db->query($dbstr);

// 使用查询对象获取到查询内容
if($res == null){
	echo "查询错误";
	exit;
}

$content = $res->fetch_array( MYSQLI_ASSOC );
// 将查询到的内容添加到数组中，如果[]为空，意思是按照键自动递增的方式；
// 如果填上["a"]，就表示为["a"]键添加值为content的内容；
$content_arr[] = $content;

// 将查询结果输出到网页中
var_dump($content_arr);
