<?php

// 常用的内置函数介绍

// 时间函数，拿到一个时间戳
echo time();

echo "\n";
// 按照格式输出时间
echo date("Y-m-d H-i-s");

// 把str转成时间戳
echo "\n";
echo strtotime("2019-12-05");

// 数学类,找出最大类,给区间就输出区间内的，不提供就随机
echo "\n";
echo mt_rand(1, 7);

// 使用字符串分割另外一个字符串explode，爆炸的意思,类似于split，与之相反的是inplode
echo "\n";
$info = "中国,广州,广东,东莞";
var_dump(explode(",", $info));

// 重复一个字符串多少次str_repeat
echo "\n";
echo str_repeat("我爱你", 5);

// 获取字符串的长度strlen,因为一个中文占3个字节，所以长度变了
echo "\n";
echo strlen($info);

// 去除字符串首尾处的空格trim
echo "\n";
$kong = "   我爱你  ";
echo trim($kong);


// 将所有字母大小写strtoupper,strtolower
echo "\n";
$code = "woshiduoainiSS";
echo strtolower($code);
echo "\n";
echo strtoupper($code);


// 数组的一些操作
// 判断数组中键是否存在array_key_exist
// 生成一个数组
echo "\n";
$rang_arr = range(1, 5);
var_dump($rang_arr);
// 默认指针在首,  
echo current($rang_arr);
echo next($rang_arr);
