


function display(data) {
	// body...
	for (var i = 0; i < 3; i++) {
		var str = "";
		for(var  j = i*3; j < (i+1)*3; j++)
			str = str + data[j]+" ";
		console.log(str);
	}
}

function check(data) {
	if(data[4] != 5)
		return false;
	if((data[0]+data[8])!=10)
		return false;
	if((data[1]+data[7])!=10)
		return false;
	if((data[2]+data[6])!=10)
		return false;
	if((data[3]+data[5])!=10)
		return false;
	return true;
}

function set(data) {
	// body...
	while(true)
	{
		for( var i = 0; i < 9 ; i++)
		{
			while(true)
			{
				data[i] = parseInt(Math.random()*9+1);
				var flag = true;
				for(var j = 0; j < i ; j++)
				{
					if(data[i]==data[j])
						flag = false;
				}
				if(flag)
					break;
			}
			
		}
		if(check(data))
			break;
	}
	

}
var data = [];
set(data);
display(data);
