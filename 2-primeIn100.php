<?php 

for ($i = 2; $i <= 100 ; $i++) { 
	# code...
	$falg = true;
	for ($j = 2; $j <= $i/2 ; $j++) { 
		# code...
		if ($i % $j == 0) {
			# code...
			$falg = false;
		}
	}
	if($falg)
	{
		echo $i.'&nbsp;';
	}
}

?>