<!DOCTYPE html>
<html>
<head>
	<title>这是测试用的</title>
</head>
<body>
	<?php

// 将数据显示到网页上
echo "222";
$num_arr = [1, 5, 6];

foreach ($num_arr as $key => $value) {
	# code...
	?>
	<div>
		php是服务器端的脚本语言，而html是浏览器端的语言，理论上浏览器能读取到任何格式内容的数据；
		读到什么样式的数据，就显示什么样式的数据，
	</div>
<?php
 }
?>
<!-- 	<div>
		我是一串文字
	</div> -->
<?php
// 输出时间信息格式
echo "下面是一个时间信息:";
echo date('Y-m-d H:i:s', time());
// header("location: shuxian.php");
?>
</body>
</html>
