function getdata(){
	var data = document.getElementById("logo");
	// data.dataset获取到的是一个json数据，并且省去了中横线，第二个单词首字母大写了，
	// 然后就可以通过.shuJu获取
	console.log(data.dataset.shuJu)
	alert(data.dataset.shuJu)
}

function savedata(){
	var data = document.getElementById("logo");
	var save = "我是改变后的内容，您能获取到么？"
	data.dataset.shuJu = save
	alert("改变成功哦，你真牛逼！")
}
