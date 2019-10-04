<?php

$list = [101,198,65,22,10,5,25,40,33,77];
$k = 100;

$sum = $count = 0;
$n = count($list);

for ($i = 0; $i < $n-1; $i++) {

	for ($j = 0; $j < $n - $i -1; $j++) {
    		if ($list[$j] > $list[$j+1]) {
			$temp = $list[$j]; 
			$list[$j] = $list[$j+1]; 
			$list[$j+1] = $temp; 
    		} 
	}

	$sum += $list[$i];

	if($sum >= $k ) {
   		 break;
	}
	var_dump($sum);
	$count++;
}

