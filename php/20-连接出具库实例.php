<?php

// 连接数据库操作实例
$host = "127.0.0.1";
$user = "root";
$pwd = "10241024";
$dbname = "php1";


// 创建数据库对象
$db =new mysqli($host, $user, $pwd, $dbname);

// 判断连接成功没
if ($db->connect_errno) {
	# code...
	die("连接失败,错误原因是".$db->connect_errno);
}else{
	echo "连接成功,状态码是：".$db->connect_errno;
}

// 连接成功后的擦欧洲哦
echo "恭喜走到这一步，你真的很不容易呢\n";

// 设置连接编码为utf8
$db->query("SET NAMES UTF8");
echo "连接编码格式设置好了UTF8\n";

// 使用查询语句查询内容
$sqlstr = "select * from test";
$res = $db->query($sqlstr);

// 判断查询结果是否为空
if ($res == null) {
	# code...
	die("查询出错，没查到内容");
}
// 创建数组，将查询结果保存到数组中
$res_arry = [];
while (true) {
	# code...
	$content = $res->fetch_array( MYSQLI_ASSOC );
	if ($content == NULL) {
		# code...
		break;
	}
	$res_arry[] = $content;
}
// 优化查询结果
// $content = $res->fetch_array( MYSQLI_ASSOC );
// var_dump($content);


// 遍历列表
foreach ($res_arry as $value) {
	# code...
	var_dump($value);
}
