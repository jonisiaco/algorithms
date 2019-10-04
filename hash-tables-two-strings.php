<?php

$s1 = 'aardvark';
$s2 = 'apple';

echo twoStrings($s1, $s2);

function twoStrings($s1, $s2) {

    $s1 = str_split($s1);

    $counter = 0;
    $match = 0;

    for ( $i=0; $i < count($s1); $i++ ) {

        if ( strpos($s2, $s1[$i]) === false ) {
            
        } else {
            $match++;
        }
    }
    return $match > 0 ? 'YES' : 'NO';
}
