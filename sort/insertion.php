<?php namespace Insertion;

/**
 * Insertion Sort in php
 * (On^2)
 *
 * http://en.wikipedia.org/wiki/Insertion_sort
 */

//Create and sort list
$sort = array();

for($x = 0; $x < 100; $x++)
	$sort[$x] = rand(0, 100);

for($x = 1; $x < count($sort); $x++){
	$t = $sort[$x];
	for($y = $x - 1; $y >= 0 && $sort[$y + 1] < $sort[$y]; $y--){
		$sort[$y + 1] = $sort[$y];
		$sort[$y] = $t;
	}
}

// Test Array is correct
print_r($sort);