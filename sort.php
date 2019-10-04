<?php

function _sort($list) {
	$cycles = 0;	
	$end = false;
	
	while( $end === false ){
		for($i=0; $i<count($list); $i++) {

		   if(array_key_exists($i+1, $list)){

			$left = $list[$i];
                	$right = $list[$i+1];

			if( $left > $right ) {
				$list[$i] = $right;
                    		$list[$i+1] = $left;
				
			    	break;
			}

		   } else { 
			$end = true; 
		   }
		 
		   $cycles++;
		 
		}
	}
	return $list;
}

$sort = _sort([-1,5,6,-2,0,1,2,8,9,3,4,7,10]);
var_dump(implode(' ',$sort));
