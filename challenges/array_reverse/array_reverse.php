<?php
declare(strict_types=1);

/**
 * Array to be reversed.
 */
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

/**
 * Reverses a given array.
 *
 * @param array $array The array to reverse.
 *
 * @return array The reversed array.
 */
function reverseArray(array $array) : array
{
    $arrCount = count($array) - 1;

    for ($i = 0; $i < count($array) / 2; $i++)
    {
        $tmp = $array[$i];
        $array[$i] = $array[$arrCount];
        $array[$arrCount] = $tmp;
        $arrCount--;
    }

    return $array;
}

$arr = reverseArray($arr);

// Dump the original array after being reversed to confirm.
var_dump($arr);