<?php

// 魔术方法：不需要手动调用，自动执行的方法
class Person{
	public $name = "小宋"

	// 当实例化对象的时候，就会执行这个方法，
	public function __construct($a, $b){
		echo "这是一个魔术方法";
		// 类属性赋值：
		$this->$name = $a;
	}

	public function say(){
		echo "这是我定义的方法";
	}
}


// 当创建一个对象的时候，就执行, 创建对象的时候传参直接传给魔术方法了，相当于init方法
one = Person("a", "b");
