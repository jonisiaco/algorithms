<?php

$magazine = 'a give me one grand today night';
$note = 'give one grand today';

$magazine = explode(' ', $magazine);
$note = explode(' ', $note);

checkMagazine($magazine, $note);

function checkMagazine($magazine, $note) {

    $count_m = count($magazine);
    $count_n = count($note);

    sort($magazine);
    sort($note);

    $counter = 0;
    $match = 0;

    while ( $counter < $count_m && $match < $count_n) {
        
        if ($note[$match] == $magazine[$counter]) {
            $match++;
        }
        $counter++;
    }

    echo $match == $count_n ? 'Yes' : 'No';

}


