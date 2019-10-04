<?php

$rotations = 4;
$arr = [1,2,3,4,5];

$new_arr = [];

for ($i=$rotations; $i < count($arr); $i++) { 
    $new_arr[] = $arr[$i];
}

for ($i=0; $i < $rotations; $i++) { 
    $new_arr[] = $arr[$i];
}
	
echo implode(' ',$new_arr);
echo "\n";