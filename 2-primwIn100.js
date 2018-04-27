

for(var i = 2; i <= 100 ;i++)
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