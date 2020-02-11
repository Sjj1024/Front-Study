// 在这里直接写js代码就额可以了,如果只有一行代码不用写分号，不然要写分号
// alert("我是js代码");

// 变量的名称：大小写字母下划线数字h和$符号，不能以数字开头
// 变了量名称不能使用函数库中的函数
// var name = "你好";
// alert(name);

// document是整个网页内容，document.write是可以向网页中写入内容的
// 下面这句话可以弹出一个对话框，获取到用户输入的内容
// var str1 = prompt("你的名字是：", "");
// 默认写入到网页文档的最开头了，原有内容不变化
// document.write(str1);

// js的条件判断
// alert("开始进行条件语句判断");
// var str1 = prompt("你的名字是：", "");
// if(str1 == "宋江江"){
//     alert("恭喜你登录成功！");
// }else{
//     alert("很遗憾，你登录失败了！");
// }

// 请输入一个数字,else if，&&表示与，
// var input1 = prompt("请输入一个数字：","");
// if(input1 < 50 && input1 >0){
//     alert("您输入的是比50小！");
// }else if(input1 >50){
//     alert("您输入的数字是大于50的！");
// }else{
//     alert("您输入的不是数字");
// }

// while循环的使用
// var str2 = prompt("请输入你的名字：","");
// // 不等的表达形式：！== 
// while(str2 !== "宋江江"){
//     str2 = prompt("请输入你的名字：","");
// }
// if(str2 == "宋江江"){
//     alert("恭喜您，登录成功！")
// }

// 使用for循环使用,n1前可以不写var
for(n1=5; n1<10; n1++){
    alert(n1);
    document.write(n1)
}
