<?php

// 使用递归函数写出斐波那契数列前n项和
function feibo($n){
	if ($n == 1 | $n == 2) {
		# code...
		return 1;
	}
	return feibo($n - 1) + feibo($n - 2);
}


$res = feibo(8);
echo $res;
