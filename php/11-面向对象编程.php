<?php

// 面向对象使用
// 定义类的基本语法
class person{
	// 定义类属性，public是可见性，
	public $a1 = 0;

	// 定义类方法
	public function say(){
		echo $a1;
		// 如果想在自身中调用自身的方法，使用$this关键字
		$this->hai();
		$this->$a1;
	}

	public function hai(){
		echo "这是方法2";
	}
}

// 创建对象的操作
$one = new person();

// 对象调用对象属性,符号是->来调用，
echo $one -> $a1;
echo $one -> say();
