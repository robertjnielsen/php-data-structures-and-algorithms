<?php
declare(strict_types=1);

namespace DSA\Challenges\BinarySearch;

class BinarySearch
{
    public static function binarySearch(array $arr, int $key): int
    {
        // Declare left and right limit values.
        $left = 0;
        $right = (count($arr) - 1);

        // Loop through the array, altering the left and right
        // values based on the key value.
        while ($left < $right) {
            // Declare middle value.
            $middle = ($left + $right) / 2;

            if ($key > $arr[$middle]) {
                // Middle index + 1 becomes $left.
                $left = $middle + 1;
            } elseif ($key < $arr[$middle]) {
                // Middle index - 1 becomes $right.
                $right = $middle - 1;
            } else {
                // The key was found!
                return (int) $middle;
            }
        }

        // The key is not an element in the array.
        return (int) -1;
    }
}