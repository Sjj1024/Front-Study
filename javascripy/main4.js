// 获取元素
var pic = document.getElementById("picture");

// 设置时钟控件
var n=1;
setInterval(function(){
	// alert("aaaa");
	/*这是多行注释*/
	if(n==6) n=1
	pic.innerHTML = "<img src='img/"+n+".png'>";
	n++;
}, 2000)
