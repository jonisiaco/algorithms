<?php
$words = "breakfast beach citycenter location metro view staff price";
$words_arr = explode(" ",$words);

$reviews = [
	0 => [ 'id' => 1, 'comment' => 'This hotel has a nice view of the citycenter. The location is perfect.' ],
	1 => [ 'id' => 2, 'comment' => 'The breakfast is ok. Regarding location, it is quite far from citycenter but price is cheap so it is worth.' ],
	2 => [ 'id' => 1, 'comment' => 'Location is excellent, 5 minutes from citycenter. There is also a metro station very close to the hotel.'],
	3 => [ 'id' => 1, 'comment' => "They said I couldn't take my dog and there were other guests with dogs! That is not fair."  ],
	4 => [ 'id' => 2, 'comment' => 'Very friendly staff and good cost-benefit ratio. Its location is a bit far from citycenter.'  ]
];

$count = 0;
$result = [];
$mayorid = 0;
foreach ($words_arr as $value) {
	

	foreach ($reviews as $r) {

		$word = str_replace('.','', $r['comment']);
		$word = str_replace(',', '', $word);
		$word = strtolower($word);

		$split_string = explode(" ", $word);

		$count = 0;
	
		foreach ($split_string as $w) {
			
			if( !empty($w) ){

				if( $w == strtolower($value) ) {

					$id = $r['id'];
					echo $w.' : '.$id."\n";

					$count++;					
					$result[$id] += $count ;

					if ($id > $mayorid)	{				
						$mayorid = $id;
					}
				}
					
			}
		}
			
	}
	
}
//rsort($result);
var_dump($result);


//var_dump($mayorid);

for ($i=$mayorid; $i >= 0; $i--) { 
	echo $i."\n";
	echo "++++\n";
	for ($j=0; $j < count($result); $j++) { 
		if ($result[$j] == $i) {
			echo $i."\n";
			echo $result[$j]."\n";
			echo "_____\n";
		}
	}
	
	
}


die();
for ($i=0; $i < count($result); $i++) { 
	if( $result[$i] == $result[$i+1] ){
		ksort($result);
		break;
	}
 	
 } 
foreach ($result as $key => $value) {
	echo $key." ";
}

