<?php
$total = 66;
$arr = [18, 11, 21, 28, 31, 38, 40, 55, 60, 62];
//$arr = [1, 11, 21, 90, 5, 12, 40, 20, 66, 62, 60, 6];

echo _sum($arr,$total);

function _sum($arr,$total) {
	$n = count($arr);

	for ($i=0; $i < $n; $i++) { 

		for ($j=$i + 1; $j < $n; $j++) { 
			
			$sum = $arr[$i] + $arr[$j];
			if ($sum == $total) {
				echo $arr[$i].'+'.$arr[$j]."\n";
				return 1;
			}

		}

	}
	return 0;
}
