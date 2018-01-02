<?php
/*
 * Basic Examples about Arrays in PHP:
 * Initializing Arrays and how to show results 
 * in browser.
 */

// First, Different options for initializing an array

$empty1 = [];
$empty2 = array();

// $empty1 and $empty2 are empty arrays

$names1 = ['Luke', 'Ben', 'Yoda'];
$names2 = array('Mace', 'Qui', 'Oppo');

// $names1 and $names2 are two ways with different notation.

$status1 = [
	'name' => 'Oppo',
	'status' => 'Dead',
	'name' => 'Mace',
	'status' =>'Dead',
	'name' => 'Luke',
	'status' => 'Live'
];

$status2 = array(
	'name' => 'Anakyn',
	'status' => 'Live'
);

/* And $status1 and $status2 are the two ways to create an array 
 * with two dimensions. For all the examples, we have now a set 
 * of lists handled like maps with a key as ordered numbers.
 */


// Then, we're going to show content in browser. Check the result.

print_r($names1);
print_r($names2);
print_r($status1);
var_dump($status2);

/*
 * Uh, what's the problem with $status1 in browser? There aren't all data
 * in screen...what's going on? Ok,ok...Really, we have saved data with
 * the same key, and finally, we only have the last value, because of this
 * we'are only seeing the last pair of values in browser. 
 * We need and array of arrays. 
 */

$books = [
	'1984' => [
		'author' => 'George Orwell',
		'finished' => true,
		'rate' => 9.5
	],
	'Romeo and Juliet' => [
		'author' => 'William Shakespeare',
		'finished' => false
	]
];

// Now, we have a new array with others arrays inside. 

print_r($books);

//  Array ( [1984] => Array ( [author] => George Orwell [finished] => 1 [rate] => 9.5 ) [Romeo and Juliet] => Array ( [author] => William Shakespeare [finished] => ) )
