<?php
$n = 1;
while ($n <= 10) {
	# code...
	echo $n++;
}

// 使用do-while做循环判断
$n2 = 5;
do{
	echo "我会执行一次\n";
	echo $n2;
}while ($n2 <= 3);

// 专门对数组进行一个循环控制foreach
$array1 = [1, 4, 56, 78];
$array2 = [
	"li1" => "王五",
	"li2" => "李四",
	"li3" => "赵倩",
	"li4" => "孙俪",
];
foreach ($array2 as $key => $value) {
	# code...
	echo $key, $value;
}

// 通过下表获取值
echo $array2["li4"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>这是测试用的</title>
	<style>
	    .test{
		    height: 100px;
		    width: 100px;
		    background-color: pink;
		    transition-duration: 3s;
		/*     以下三值为默认值，稍后会详细介绍 */
		    transition-property: all;
		    transition-timing-function: ease;
		    transition-delay: 0s;
		}    
		.test:hover{
			left: 500px;
		    /*width: 500px;*/
		}
	</style>
</head>
<body>
<div class="test">
	我是一串文字
</div>
<ul>
	<!-- php嵌入html标签中使用方法介绍：
		会解析php的开始，会执行forearch到}，然后会找到}的位置，把大括号中的
		内容当做循环体输出，在循环体中，可以继续使用循环变量控制输出。
		如果找不到后面的}大括号，就会报错
	 -->
	<?php foreach ($array2 as $key => $value): ?>
		<li><a href="#"><?php echo $value; ?></a></li>
	<?php endforeach; ?>
	<!-- 
	为了满足在标签中能很好地识别到php中if或while等的结束符号，出现了新的标签语法：
	与那里的if是if(){}       标签语法：if(): 和 endif;
	for原来的方式：for(){}   标签语法：for(): 和 endif;
	while原来方式是while(){} 标签语法：whitle(): 和 endwhile;
	foreach:原方式是foreach(){} 标签语法：foreach() 和 endforeach;
	 -->
</ul>
</body>
</html>
