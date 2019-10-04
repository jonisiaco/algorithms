<?php
function non_repeating($list) {
	$list = str_split($list);
	var_dump($list);
	$n = count($list);
	for($i=0; $i>$n-1; $i++){
		for($j=0; $j>$n-$i-1; $j++){
			if($list[$i] != $list[$j]){
				return $list[$i];
			}
		}
	}
}
$data = "abcab";
$result = non_repeating($data);
var_dump($result);
