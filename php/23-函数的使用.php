<?php 

// 默认返回null,还可以将函数调用写在定义之前
// 因为php是动态的,先将代码编译成二进制,再从内从中查找这个函数名,只要能找到,就能执行
$res = add();
echo $res;

function add(){
	for ($i=1; $i < 10; $i++) { 
		# code...
		for ($j=1; $j <= $i; $j++) { 
			# code...
			echo $j."*".$i."=".$i*$j."\t";
		}
		echo "\n";
	}

	return "打印结束！\n";
}


// 换行是\n,表示下拉一行，

// 回车的话是将指针移到行首\r，重新开始，新的内容会覆盖之前的文字
?>
