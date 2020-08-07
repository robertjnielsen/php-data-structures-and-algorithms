<?php
declare(strict_types=1);

namespace DSA\Challenges\InsertShiftArray;

class InsertShiftArray
{
    /**
     * Inserts an element into the middle index of an array, and shifts the remaining elements forward one index.
     *
     * @param array $array   The array to insert the element into.
     * @param mixed $element The element to insert into the middle of the array.
     *
     * @return array The original array with the new element inserted into the middle.
     */
    public static function InsertShiftArray(array $array, $element): array
    {
        // Locate middle index of array.
        $half = (count($array) / 2);

        // Initiate $previous variable as the element to insert.
        $previous = $element;

        // Iterate through the array, shifting the element values for each subsequent
        // index starting at the halfway (new element insertion) index.
        for ($i = $half; $i < count($array); $i++)
        {
            $current = $array[$i];
            $array[$i] = $previous;
            $previous = $current;
        }

        // Push the final element to the end of the array.
        $array[] = $previous;

        // Return original, but modified array.
        return $array;
    }
}