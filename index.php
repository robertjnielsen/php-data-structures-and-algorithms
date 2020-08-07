<?php
declare(strict_types=1);

require("vendor/autoload.php");
use DSA\Challenges\ArrayReverse\ArrayReverse;
use DSA\Challenges\InsertShiftArray\InsertShiftArray;
use DSA\Challenges\BinarySearch\BinarySearch;


/**
 * Challenges are below in various sections.
 * To run a specific challenge, simply un-comment
 * out the var_dump function call within that section
 * to verify it works.
 */

//////////////////////////////////////////////////////////////////////////////

/**
 * Array Reverse Challenge
 */

// The array to reverse.
$arr = [1, 2, 3, 4, 5, 6, 7];

// The challenge action.
$arr = ArrayReverse::reverseArray($arr);

// Dump the array to verify.
// var_dump($arr);

//////////////////////////////////////////////////////////////////////////////

/**
 * Insert Shift Array Challenge
 */

// The array to insert an element into.
$arr = [1, 3, 5, 9, 11, 13];

// The element to insert into the array.
$el = 7;

// The challenge action.
$arr = InsertShiftArray::InsertShiftArray($arr, $el);

// Dump the array to verify.
// var_dump($arr);

//////////////////////////////////////////////////////////////////////////////

/**
 * Binary Search Challenge
 */

// The array to iterate through.
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// The key to locate.
$key = 17;

// The challenge action.
$binaryResult = BinarySearch::binarySearch($arr, $key);

// Dump the result to verify.
var_dump($binaryResult);