<?php
// 使用流程控制

$a = 4;
if ($a == 3){
	echo "我是真的";
}elseif ($a == 4) {
	# code...
	echo "我是elseif";
}else{
	echo "我是假的！";
}


// 也有switch语句:
switch ($a) {
	case '1':
		# code...
		break;
	
	default:
		# code...
		break;
}

// for循环的使用
for ($n=0; $n < 10; $n++) { 
	# code...
	if ($n >= 10) {
		# code...
		echo "执行结束了";
	}
	echo "正在执行中----";
}

// php提供了简单的遍历数组的方式foreach
$arr2 = [2, 5, 6, 8]
foreach ($arr2 as $key => $value) {
	# code...
	// key和value就是数组中键值对的值
	echo $key;
	echo $value;
	// 如果数组中包含数组，使用echo是要报错的，
	// 需要使用var_dump来执行
	var_dump($value)
}

// 跳过本次循环使用：continue

?>
