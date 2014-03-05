<?php namespace Insertion;

/**
 * Insertion Sort in php
 * (On^2)
 *
 * http://en.wikipedia.org/wiki/Insertion_sort
 */

//List to sort
$sort = array(13, 3, 4, 5, 1, 6, 7, 0, 1, 5, 8, 10, 12);

for($x = 1; $x < count($sort); $x++){
	$t = $sort[$x];
	for($y = $x - 1; $y >= 0 && $sort[$y + 1] < $sort[$y]; $y--){
		$sort[$y + 1] = $sort[$y];
		$sort[$y] = $t;
		
	}
}

// Test Array is correct
foreach($sort as $int){
	echo $int . ' ';
}