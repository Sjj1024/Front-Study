<?php
// 变量必须是以$开头的，并且是以字母开头，由数字字母下划线组成,看到$符一定是变量
$aa = "hellow world";
// 在php中，任何有值得东西，都是一个表达式；例如上面的一句话，就是表达式
// 几乎所写的任何东西都是一个表达式，表达式是php重要的基石；

// 数据类型：9种数据类型
// 整数，浮点，布尔，字符串（单引号双引号），数组（[php5.4后可以这么写],array()）,对象，空null
$a1 = 232;
$a2 = 12.5;
$a3 = true;
$a31 = True;
$a32 = TRUE;
// 看到$符一定是变量，看到引号一定是字符串；
$a4 = 'woaini';
// 使用创引号的字符串中，如果有变量存在，直接输出表达式的值，双引号可以识别变量和转义符等
$a5 = "woxihuanni";
$a6 = [1, 4, 56,];
$a7 = array(2, 5, 7)
$a8 = new stdClass;
$a9 = null;
// 使用var_dump可以输出变量类型和值
var_dump($a2, $a3);
// 当进行加减乘除的时候，会进行自动类型转换,就会将字符串3转成数字3，
// 如果字符串转化不成功，将会默认转成0，true转成1
var_dump($a1 + "3")

// 类型转换格式：(要转成的类型) 被转数据
$a10 = (bool) 1;  // 那么$a10就是布尔类型数据
// true会被转成1，false会被转成0




?>
