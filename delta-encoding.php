<?php

$numbers = '25626 25757 24367 24267 16 100 2 7277';
$numbers = explode(' ', $numbers);
//var_dump($numbers);

for ($i=0; $i < count($numbers); $i++) { 
	
	if ($i == 0) {
		echo $numbers[$i];
		echo " ";
	 	continue; 
	}
	$diff = $numbers[$i] - $numbers[$i-1];
	if ( $diff < -127 || $diff > 127 ) {
		echo '-128';
		echo " ";
	}
	echo $diff;		
	echo " ";
}
echo "\n";