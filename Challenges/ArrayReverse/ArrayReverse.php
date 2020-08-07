<?php
declare(strict_types=1);

namespace DSA\Challenges\ArrayReverse;

class ArrayReverse
{
    /**
     * Reverses an array.
     *
     * @param array $array The array to reverse.
     *
     * @return array The reversed array.
     */
    public static function reverseArray(array  $array): array
    {
        $arrCount = (count($array) - 1);

        for ($i = 0; $i < count($array) / 2; $i++) {
            $tmp = $array[$i];
            $array[$i] = $array[$arrCount];
            $array[$arrCount] = $tmp;
            $arrCount--;
        }

        return $array;
    }
}