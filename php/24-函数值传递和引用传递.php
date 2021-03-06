<?php 

$i = 1;
$b = 1;

// 默认返回null,还可以将函数调用写在定义之前
// 因为php是动态的,先将代码编译成二进制,再从内从中查找这个函数名,只要能找到,就能执行
$res = add($i, $b);
echo $res;

// 参数可以有默认值，默认值参数必须定义在所有参数的后面，系统把实参传递给形参是按顺序的
function add($i = 2, &$b){
	for ($i; $i < 10; $i++) { 
		# code...
		for ($j=1; $j <= $i; $j++) { 
			# code...
			echo $j."*".$i."=".$i*$j."\t";
		}
		echo "\n";
		$b++;
	}
	return "打印结束！\n";
}

// 使用值传递和引用传递的不同：使用值传递相当于将值复制了一份，在函数中使用
// 使用引用传递的话，因为引用指向的是同一个值的内存地址，所以函数里面的操作，
// 会影响这个值得变化，使用引用的方式：&$b
// 所以进行引用传值的时候，只能使用变量传递，不能使用值传递的形式
echo $i;
echo "\n";
echo $b;
// 换行是\n,表示下拉一行，

// 回车的话是将指针移到行首\r，重新开始，新的内容会覆盖之前的文字
?>
