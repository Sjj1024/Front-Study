<?php

// 使用数据库的查询
/*
SELECT 表示要进行查询哪些字段，*表示所有

FROM TABLE  目标数据

WHERE  数据过滤条件，可选

ORDERBY  排序条件，可选

LIMIT  取出数量，可选，常用于分页

*/

// 获取查询后的结果,建立数据库的连接
$host = "127.0.0.1";
$user = "root";
$pwd = "root";
$dbname = "msg";

// 建立数据库连接
$db = mysqli($host, $user, $pwd, $dbname);

if($db -> connect_errno <> 0){
	echo "数据库连接失败！";
	exit;
}else{
	echo "连接成功！";
}

// 执行查询语句
// 还要执行一条数据库连接编码语句，，，，，
$db->query("SET NAMES UTF8")
$dbstr = "SELECT * FROM msg";
$res = $db->query($dbstr);

// 从查询结果中获取结果，如果执行成功，返回的是sql执行结果是一个查询结果对象，
if($res == false){
	echo "查询失败";
	exit;
}

// 查询成功后执行的结果：是一个数组，参数MYSQLI_ASSOC是让结果更清晰
// 因为不加参数的话，会返回一个索引数组和关系数组，参数是将索引数组去掉，没啥必要
// fetch_array是取出查询结果中的一个数据，
/*
反复调用这条语句，就会返回不同的结果，类似于生成器一样，直到返回结果为null，表示没有数据了
*/
$content = $res->fetch_array( MYSQLI_ASSOC );

// 所以可以通过while循环,一直将所有内容取出来
while (true) {
	# code...
	if($content == null){
		break;
	}
	$content = $res->fetch_array( MYSQLI_ASSOC );
}

// 将结果输出到网页中
echo $content['id'];
echo $content['conten'];
echo $content['user'];
echo $content['intime'];
