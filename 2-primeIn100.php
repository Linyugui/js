<?php 

for ($i = 2; $i <= 100 ; $i++) { 
	# code...
	$flag = true;
	for ($j = 2; $j <= $i/2 ; $j++) { 
		# code...
		if ($i % $j == 0) {
			# code...
			$flag = false;
		}
	}
	if($flag)
	{
		echo $i.'&nbsp;';
	}
}

?>