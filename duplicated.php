<?php

function duplicated($list) {
	$duplicated = [];
	for( $i=0; $i<count($list); $i++ ) {
		for( $j=$i+1; $j<count($list); $j++ ) {
			if( $list[$i] == $list[$j] ) {
				$duplicated[] = $list[$i]; 
			}
		}
	}
	return $duplicated;
}
$data= [1,2,3,6,4,5,6,44,1,1,5];
$output = duplicated($data);
var_dump( $output );
