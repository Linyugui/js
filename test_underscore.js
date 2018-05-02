'use strict';
var _ = require("underscore");
var a = [1,2,3,4,5];
function function1(num) {
	return num*3;
}
var b = _.map(a , function1);
console.log(a);
console.log(b);

function function2(num)
{
	return num % 2 == 0;
}
var c = _.filter(a , function2);
console.log(c);

var d = _.find(a , function2);
console.log(d);
