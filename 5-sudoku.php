<?php 

function display($data)
{
	# code...
	for ($i = 0; $i < 3; $i++) { 
		# code...
		$str = "";
		for ($j = $i*3; $j < ($i+1)*3; $j ++) { 
			# code...
			$str .= $data[$j].'&nbsp;';
		}
		echo $str."<br>";
	}
}
function check($data)
{
	# code...
	if($data[4] != 5)
		return false;
	if(($data[0]+$data[8])!=10)
		return false;
	if(($data[1]+$data[7])!=10)
		return false;
	if(($data[2]+$data[6])!=10)
		return false;
	if(($data[3]+$data[5])!=10)
		return false;
	return true;
}
function set($data) {
	// body...
	while(true)
	{
		for($i = 0; $i < 9 ; $i++)
		{
			while(true)
			{
				array_push($data,rand(1,9));
				//display($data);
				$flag = true;
				for($j = 0; $j < $i ; $j++)
				{
					if($data[$j]==$data[$i])
						$flag = false;
				}
				if($flag==true)
				{
					break;
				}
				array_pop($data);
			}
			
		}
		if(check($data))
			break;
		$data = array();
	}
	display($data);
	

}
$data = array();
set($data);




 ?>