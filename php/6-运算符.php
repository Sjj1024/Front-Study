<?php

// 加减乘除取余等操作

/*
.也是一个运算符：用于连接字符串，相当于字符串中相加拼接一样
.= 就是拼接后再赋值，一样的运算

大小比较判断运算符：
< > ==  ===
== 做判断的时候，只会对值进行判断
=== 做判断的时候，还会进行数据类型的判断，

and 和 or运算符：和python中一样,但这里的and可以使用&&代替，or可以使用||代替

=> 在数组中对键进行赋值的时候用到，


*/

$a1 = 4;
$a1 += 5;  // 加等加后再赋值

// .号的使用
$a3 = "woaini";
echo "zuguo" . $a3;

// == 和 ===的区别
$a4 = "4";
var_dump($a1 == $a4);  // 会输出true
var_dump($a1 === $a4);  // 会输出false
