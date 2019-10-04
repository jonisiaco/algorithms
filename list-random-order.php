<?php

$arr = ["Raymond", "Nora", "Daniel", "Louie", "Peter", "Esteban"];
//Output: ["Peter", "Raymond", "Daniel", "Louie", "Esteban", "Nora"]
$result = [];

for ($i=0; $i < count($arr) ; $i++) { 
	for ($j=0; $j < count($arr); $j++) { 
		
		$index = strlen($arr[$i]) - 1;
		$char1 = strtolower($arr[$i][$index]);
		$char2 = strtolower($arr[$j][0]);
		//var_dump( $char1 );
		//var_dump( $char2 );
		//echo "\n";
		if ( $char1 == $char2  ) {
			if ( !array_key_exists($arr[$j], $result) ) {
				
			}

			echo $arr[$i];
			echo "--";
			echo $arr[$j];
			echo "\n";
		}
		
	}
}

var_dump($resul
	