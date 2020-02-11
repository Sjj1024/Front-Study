// 点赞
var n=0;

// 定义函数
function like(){
	// 点赞数量
	n++;
	var btn = document.getElementById("like");
	// 只有数值类型的数据才能进行数据运算
	btn.innerHTML = "点赞是"+ n +"个"
	// 也可以使用document.write写入内容，将会覆盖原有的所有内容
	// document.write("我是新鞋入的")
}
