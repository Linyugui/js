

var car={'benz-S800':80,'bmw-X7':90,'maybach':120,'lada':10};
for (var i in car) {
	if(car[i]<95)
		console.log(i);
}