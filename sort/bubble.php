<?php namespace Bubble;

/**
 * Bubble Sort in php
 * (On^2)
 *
 * http://en.wikipedia.org/wiki/Bubble_sort
 */

$sort = array(13, 3, 4, 5, 1, 6, 7, 0, 1, 5, 8, 10, 12);

$sorting = true;

while($sorting){
	$sorting = false;
	for($x = 0; $x < count($sort) - 1; $x++){
		if($sort[$x] > $sort[$x + 1]){
			$temp = $sort[$x];
			$sort[$x] = $sort[$x + 1];
			$sort[$x + 1] = $temp;
			$sorting = true; 
		}
	}
}

var_dump($sort);