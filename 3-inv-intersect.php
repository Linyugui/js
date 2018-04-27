<?php 

$str1 = "abcdefghijklmnopqrstuvwxyz";
$str2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$str = "";
for ($i = 0; $i < strlen($str1) ; $i++) { 
	# code...
	$str .= $str1[$i].$str2[strlen($str2)-$i-1];
}
echo $str;



 ?>