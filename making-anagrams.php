<?php

function makeAnagram($a,$b) 
{
	$a = str_split($a);
	$b = str_split($b);
	$count = 0;
	$count2 = 0;

	$idx_a = [];
	$idx_b = [];
	for ($i=0; $i < count($a); $i++) { 
		echo $a[$i]."\n";
		for ($j=0; $j < count($b); $j++) { 
			echo "- ".$b[$j]."\n";
			
			if( $a[$i] == $b[$j] ) {
				if( !array_key_exists($j, $idx_b) ){
					echo "--- ".$b[$j]."\n";
					$idx_b[$j] = $b[$j];
					$idx_a[$i] = $a[$i];
					break;
				}

			} 

		}

	}
	var_dump($idx_a);
	var_dump($idx_b);

	$result_a = count($a) - count($idx_a);
	$result_b = count($b) - count($idx_b);
	$result = $result_a + $result_b;

	var_dump($result);

	
}

$a = 'fcrxzwscanmligyxyvym';
$b = 'jxwtrhvujlmrpdoqbisbwhmgpmeoke';

makeAnagram($a,$b);