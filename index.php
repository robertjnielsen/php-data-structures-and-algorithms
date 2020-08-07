<?php
declare(strict_types=1);

require("vendor/autoload.php");
use DSA\Challenges\ArrayReverse\ArrayReverse;


/**
 * Challenges are below in various sections.
 * To run a specific challenge, simply un-comment
 * out the var_dump function call within that section
 * to verify it works.
 */



/**
 * Array Reverse Challenge
 */

// The array to reverse.
$arr = [1, 2, 3, 4, 5, 6, 7];

// The challenge action.
$arr = ArrayReverse::reverseArray($arr);

// Dump the array to verify.
var_dump($arr);