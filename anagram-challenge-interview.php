<?php

$arr = [
	0 => "pear",
	1 => "amleth",
	2 => "dormitory",
	3 => "tinsel",
	4 => "dirty room",
	5 => "hamlet",
	6 => "listen",
	7 => "silnet"
];

sort($arr);
$swap = [];
$data = [];

for ($i=0; $i < count($arr); $i++) { 

	$w1 = str_replace(' ', '', $arr[$i]);
	$w1 = strtolower($w1);
	$data[$i][] = $w1;
	for ($j=$i +1; $j < count($arr); $j++) { 

		$w2 = str_replace(' ', '', $arr[$j]);
		$w2 = strtolower($w2);

		$a = str_split($w1);
		$b = str_split($w2);

		if ( count($a) == count($b) ) {

			if ( anagram($a,$b) ) {

				if (!array_key_exists($j, $swap)) {
					$data[$i][] = $w2;
					$swap[$j] = $arr[$j];
				}

			}
		}
	}

}

$var = [];
for ($i=0; $i  < count($data); $i++) { 
	for ($j=0; $j < count($data); $j++) { 
		if (!empty($data[$i][$j])) {
			if (!array_key_exists($data[$i][$j], $var)) {
				$var[$data[$i][$j]] = 1;
				echo $data[$i][$j];
				if ( !isset($data[$i][$j+1]) ) {
					echo "\n";
				} else {
					echo ",";
				}
			}
		}
	}
}

function anagram($a,$b) {

	sort($a);
	sort($b);

	for ($i=0; $i < count($a); $i++) { 

		if ( $a[$i] != $b[$i] ) {
			return false;
		}

	}
	return true;

}

