<?php
function palindromeIndex($s) {

    $list = str_split($s);    
    $n = count($list);
    $swap = [];

    for($i=0; $i < $n - 1; $i++,$j--){

    	if($list[$i] != $list[$j]){
    		if(isPalindrome($list, $i)){
    			return $i;
    		} else if (isPalindrome($list,$j)) {
    			return $j;
    		}
    	}

    	return -1;
   
    }

}

function isPalindrome($s,$index) {

	for($i =$index + 1 , $j = count($s) - $index - 1; $i<$j; $i++, $j--) {

		if ( $s[$i] != $s[$j] ) {
			return false;
		}
		return true;

	}
}

palindromeIndex('aaab');
palindromeIndex('baa');
echo palindromeIndex('aaa');
palindromeIndex('tatatat');


/*
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
}*/

