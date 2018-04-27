

var a="abcdefghijklmnopqrstuvwxyz";
var b="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var str="";
for (var i = 0; i < a.length; i++) {
	str=str+a[i]+b[b.length-1-i];
}
console.log(str);