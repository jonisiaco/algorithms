<?php

$arr = [
	0 => [36, 30, 36, 30],//r
	1 => [15, 15, 15, 15],//s
	2 => [46, 96, 90, 100],//p
	3 => [86, 86, 86, 86],//s
	4 => [100, 200, 100, 200],//r
	5 => [80, 80, 200, 200],//p
	6 => [100, 200, 100, 200]//r
];

$square = 0;
$rectangule = 0;
$polygon = 0;

for ($i=0; $i < count($arr); $i++) { 
		
	$a = $arr[$i][0];
	$b = $arr[$i][1];
	$c = $arr[$i][2];
	$d = $arr[$i][3];

	if ( $a < 0 || $b < 0 || $c < 0 ) {
		$polygon++;
		echo "p \n";
		continue;
	}

	if ( $a === $b && $b === $c && $c === $d ) {
		$square++;
		echo "s \n";
		continue;
	}
	if ( $a === $c && $b === $d ) {
		$rectangule++;
		echo "r \n";
		continue;
	}

	echo "p \n";
	$polygon++;

}

echo $square." ".$rectangule." ".$polygon;