<?php

$numbers = [3,3,3];
$numbers = [3];
$numbers = [10,5,9];
$numbers = [100,88,77];
$numbers = [3,2,5];
$numbers = [100,90,200];

$numbers = [3,5,4]; 

echo triangles($numbers);
echo "\n";

function triangles ($numbers) {

	if ( count($numbers) != 3 ){
		return 0;
	}

	for ($i=0; $i < count($numbers) ; $i++) { 
		if ($numbers[$i] < 0) {
			return 0;
		}
	}

	$a = $numbers[0];
	$b = $numbers[1];
	$c = $numbers[2];

	if ( $a === $b && $b === $c ) {
		return 1;
	}
/*
	 if ($a + $b <= $c || 
         $a + $c <= $b ||  
         $b + $c <= $a) {
	 		return 0;
	 } else {
	 	return 2;
	 }

	return -1;
	*/

	if ($a + $b > $c && 
         $a + $c > $b &&  
         $b + $c > $a) {
	 	return 2;
	 }

	 return -1;
}



