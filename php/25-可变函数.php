<?php

function show(){
	echo "我是show函数";
}


// 定义可变函数，类似于python中的闭包
function getfunc($func_name){
	$func_name();
}

// 执行这个函数，将会调用show函数，
getfunc(show);
