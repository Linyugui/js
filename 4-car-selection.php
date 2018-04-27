<?php 

$car = array('benz-S800' => '80', 'bmw-X7' => '90' , 
			'maybach' => '120' , 'lada' => '10');
foreach ($car as $x => $x_value) {
	if ($x_value < 95) {
		# code...
		echo $x."<br>";
	}
}



 ?>