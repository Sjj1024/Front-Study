<?php

// 文件编程:是指通过php代码对文件夹或文件进行增删改查的操作

echo "woaini\n";

// 文件夹的操作,使用mkdir函数，会有一个返回值，定义一个结果变量，保存成功或者失败
// 可以使用相对路径和绝对路径创建,只能创建一层，不能迭代创建多个
// @是错误抑制符，即便报错，也无所谓，直接忽略，不然的话会报错误警告
@mkdir("D:\HtmlCss\php\word");
// $res = mkdir("D:\HtmlCss\php\word");

// if ($res==True){
// 	echo "创建文件夹成功!\n";
// }else{
// 	echo "创建失败\n";
// }

// 删除文件夹使用rmdir,同样使用错误抑制符，如果文件夹不为空，就会删除报错
@rmdir("wordcode");

// 修改文件夹或者文件的名字，rename(旧名字，新名字);
@rename("word", "woaini");

// 等待函数sleep，里面跟上秒钟数
// sleep(10);
echo "结束了\n";

// 改变文件模式，权限问题

// 读取文件夹中的所有文件名字，形成一个列表，使用scandir
$dir_info = @scandir("D:\学习资料\php实战video\php通关必备");
// var_dump($dir_info);
foreach ($dir_info as $key => $value) {
	# code..
	echo $value,"\n";
}

// 或者使用readdir，挨个读里面的文件，有的话就返回文件名字，没有的话就返回false
// while ($file = readdir()) {
// 	# code...
// 	echo $file;
// }

// 文件夹的操作:is_dir,判断是否是一个路径，是的话返回TRUE，否的话返回False
// getcwd() 获取当前工作路径
// chdir，修改当前的工作路径，既不用修改访问的文件的真实路径
