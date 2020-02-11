<?php

// 获取到留言内容和用户信息
$content = $_POST['text1']
$user = $_POST['user']

if ($content == "") {
	# code...
	// die意思是停止程序，并输出留言内容不能为空
	die("留言内容不能为空")
}

// 过滤掉禁止使用的关键词
$forbid = ["张三"， "王五"， "李四"]
// $value相当于遍历出来的元素i
foreach ($forbid as $value) {
	# code...
	if ($user == $value) {
		# code...
		die("禁止使用敏感词汇")
	}
}

?>
