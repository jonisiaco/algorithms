<?php
$array = [2,3,4,2,3,6,8,4,5];
//$array = [12,13,4,55,3,6,8,4,5];

$d = 9; //days
$n = 5; //notification days

$result = 0;

for($i=0; $i<$d; $i++){
	
	if ( $i >= $n ) {

		echo "times: ".$i."\n";

		$t = [];

		$t = array_slice($array, $i - $n, $i);

		sort($t);
		var_dump($t);
		
    	if ($n % 2 != 0) {
			$median = (double)$t[$n / 2];
		} else {
			$median = (double)($t[($n - 1) / 2] +
                    $t[$n / 2]) / 2.0;
		}
		
		echo "media: ".$median."\n";

		if ( $array[$i] >= 2 * $median ) {
			$result++;
		} 
		
      
	}
}
var_dump($result);

