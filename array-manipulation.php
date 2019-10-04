<?php

$n = 5;
$queries = [
	0 => [ 1,2,100 ],
	1 => [ 2,5,100 ],
	2 => [ 3,4,100 ]
];

$array = range(1, $n);
$array = array_fill_keys(array_keys($array),0);

foreach ($queries as $v) {

	$a = $v[0];
	$b = $v[1];
	$k = $v[2];
	
	for ($i = $a-1; $i < $b; $i++) { 
		$array[$i] += $k;
	}
	
}

echo max($array);