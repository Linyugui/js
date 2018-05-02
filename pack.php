<?php 

function countx($x) {
	// 传入一个x值，计算从1到x的和
	$sum = 0;
	for ($i = 0; $i <= $x ; $i++) { 
		$sum += $i;
	}
	echo $sum."<br>";
}
function primeIn($x) {
	// 传入一个x值，输出打印小于等于x的所有质数 
	if($x < 2)
		echo "null";
	else
	{
		for ($i = 2; $i <= $x ; $i++) { 
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
	}
	echo "<br>";
}
function intersect($a,$b) {
	//传入两个字符串，交替打印字符串
	$length=strlen($a)<strlen($b)?strlen($a):strlen($b);
	$str="";
	for ($i = 0; $i < $length; $i++) {
		$str=$str.$a[$i].$b[strlen($b)-1-$i];	
	}
	if(strlen($a)>strlen($b))
		$str.=substr($a,$i);
	else
		$str.=strrev(substr($b,0,strlen($b)-$i));
	echo $str."<br>";
}
function car_selection($car,$value) {
	// body...
	foreach ($car as $x => $x_value) {
		# code...
		if($x_value < $value)
			echo $x."<br>";
	}
}
function display($data) {
	// body...
	for ($i = 0; $i < 3; $i++) {
		$str = "";
		for($j = $i*3; $j < ($i+1)*3; $j++)
			$str = $str.$data[$j].'&nbsp;';
		echo $str."<br>";
	}
	echo "<br>";
}
function check($data)
{
	$flag = true;
	for ($i = 0; $i < 3; $i++) {
		if(($data[$i*3]+$data[$i*3+1]+$data[$i*3+2])!=15)
		{
			$flag = false;
			break;
		}
	}
	if($flag)
	{
		for ($i = 0; $i < 3; $i++) {
			if(($data[$i]+$data[$i+3]+$data[$i+6])!=15)
			{
				$flag = false;
				break;
			}
		}
	}
	if($flag)
	{
		for ($i = 0; $i < 5; $i++) {
			if(($data[$i]+$data[8-$i]+$data[4])!=15)
			{
				$flag = false;
				break;
			}
		}
	}
	return $flag;
}

function sudoku($t,$n,$data)
{
	if($t > $n)
	{
		if(check($data))
			display($data);
	}
	else
	{
		for($i = 0;$i <= $n; $i++)
		{
			$flag1 = true;
			for($j = 0;$j < $t; $j++)
			{
				if($data[$j] == $i+1)
				{
					$flag1 = false;
					break;
				}
			}
			if($flag1)
			{
				$data[$t] = $i+1;
				sudoku($t+1,$n,$data);
			}
		}
	}
}
countx(100);

primeIn(100);

$str1 = "abcdefghijklmnopqrstuvwxyz";
$str2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
intersect($str1,$str2);

$car=array('benz-S800' => '80', 'bmw-X7' => '90' , 
			'maybach' => '120' , 'lada' => '10');
car_selection($car,95);

$data = array();
sudoku(0,8,$data);

 ?>