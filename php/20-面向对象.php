<?php

class Person{
	// 定义变量
	public $name;
	// 这里定义并初始化一个静态变量
	public static $num=0;

	function __construct($name){
		$this->name = $name;
	}

	public function join(){
		// 使用静态变量，静态变量相当于全局变量
		self::$num += 1;
		echo $this->name."加入游戏";
	}
}

/*
静态变量在类中访问使用self：：$变量名

静态变量在类外访问:类名::$变量名

一个实例是不允许访问静态变量的，也不能使用this关键字访问静态变量，
*/
$zhang = new Person("张三");
$zhang->join();
$li = new Person("李四");
$li->join();

// 输出看有多少人
echo "一共有".Person::$num;

?>
