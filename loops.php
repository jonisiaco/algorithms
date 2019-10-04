<?php
//buble sort
$arr = array(64, 34, 25, 12, 22, 11, 90); 

for ($i=0; $i < count($arr); $i++) { 
	
	for ($j=0; $j < count($arr)- $i - 1; $j++) { 
		if ($arr[$j] > $arr[$j+1]) {
			echo $arr[$j]." > ".$arr[$j+1]."\n";
			$t = $arr[$j]; 
            $arr[$j] = $arr[$j+1]; 
            $arr[$j+1] = $t; 
		}
	}
	echo "_____\n";

}
echo implode(' ', $arr);

echo "\n\n";

echo "+++++++++++++\n";

//count repeat
$arr = array(64, 32, 128, 64, 256, 64, 156, 32); 
$count = 0;
$repeated = [];
for ($i=0; $i < count($arr); $i++) { 
	
	for ($j=$i +1; $j < count($arr); $j++) { 
		if ($arr[$j] == $arr[$i]) {
			if(!array_key_exists($arr[$i], $repeated)){
				echo $arr[$j]." == ".$arr[$i]."\n";
				$repeated[ $arr[$i] ] += 1;
				$count++;
			}
			
		}
	}
	echo "_____\n";

}
var_dump($repeated);
echo $count;
echo "\n";