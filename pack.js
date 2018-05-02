function count(x) {
	// 传入一个x值，计算从1到x的和
	var a = 0;
	for (var i = 1; i <= x; i++)
	{
		a += i;
	}	
	console.log(a);
}
function primeIn(x) {
	// 传入一个x值，输出打印小于等于x的所有质数 
	if(x < 2)
		console.log("null");
	else
	{
		for(var i = 2; i <= x ;i++)
		{
			var flag = true;
			for (var j = 2; j <= i/2; j++) {
				if(i % j == 0)
				{
					flag = false;
					break;
				}
			}
		if (flag)
			console.log(i);
		}
	}
}
function intersect(a,b) {
	//传入两个字符串，交替打印字符串
	var length=a.length<b.length?a.length:b.length;
	var str="";
	for (var i = 0; i < length; i++) {
		str=str+a[i]+b[b.length-1-i];	
	}
	if(a.length>b.length)
		str+=a.slice(i,a.length);
	else
		str+=b.slice(0,b.length-i).split("").reverse().join("");
	console.log(str);
}
function car_selection(car,value) {
	// body...
	for (var i in car) {
		if(car[i]<value)
			console.log(i);
	}
}
function display(data) {
	// body...
	for (var i = 0; i < 3; i++) {
		var str = "";
		for(var  j = i*3; j < (i+1)*3; j++)
			str = str + data[j]+" ";
		console.log(str);
	}
	console.log();
}
function check(data)
{
	var flag = true;
	for (var i = 0; i < 3; i++) {
		if((data[i*3]+data[i*3+1]+data[i*3+2])!=15)
		{
			flag = false;
			break;
		}
	}
	if(flag)
	{
		for (var i = 0; i < 3; i++) {
			if((data[i]+data[i+3]+data[i+6])!=15)
			{
				flag = false;
				break;
			}
		}
	}
	if(flag)
	{
		for (var i = 0; i < 5; i++) {
			if((data[i]+data[8-i]+data[4])!=15)
			{
				flag = false;
				break;
			}
		}
	}
	return flag;
}

function sudoku(t,n,data)
{
	if(t > n)
	{
		if(check(data))
			display(data);
	}
	else
	{
		for(var i = 0;i <= n; i++)
		{
			var flag1 = true;
			for(var j = 0;j < t; j++)
			{
				if(data[j] == i+1)
				{
					flag1 = false;
					break;
				}
			}
			if(flag1)
			{
				data[t] = i+1;
				sudoku(t+1,n,data);
			}
		}
	}
}
count(100);

primeIn(100);

var str1 = "abcdefghijklmnopqrstuvwxyz";
var str2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
intersect(str1,str2);

var car={'benz-S800':80,'bmw-X7':90,'maybach':120,'lada':10};
car_selection(car,95);

var data = [];
sudoku(0,8,data);
