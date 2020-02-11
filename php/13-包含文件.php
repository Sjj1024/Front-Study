<?php

// 类似于导包，将别的文件内容导入到这个文件中,使用include('文件名');
// 如果文件不在同一个目录中，还要考虑文件路径的问题
// 最常用的就是这种方法：其他的不怎么常用；
include('12-魔术方法.php');

// include_once不论你调用多少次，都只会加载一次，防止重复加载，而include是调用几次，就加载几次
// 
include_once('12-魔术方法.php');


// require和include都是导入文件，但是include遇到错误，会继续执行后面的代码，
// 而require遇到错误是不会继续执行的，直接报错，
require('12-魔术方法.php')

// exit会终止程序，后面的代码就不会执行了；
exit;
