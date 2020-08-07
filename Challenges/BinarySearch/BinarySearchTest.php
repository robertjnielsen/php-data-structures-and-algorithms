<?php

namespace DSA\Challenges\BinarySearch;

use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    public function testBinarySearchCanReturnTheCorrectIndex()
    {
        // Arrange
        $testArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $testKey = 4;
        $expectedResult = 3;

        // Act
        $result = BinarySearch::binarySearch($testArray, $testKey);

        // Assert
        $this->assertEquals(
            $expectedResult,
            $result
        );
    }

    public function testBinarySearchCanReturnNegativeIndex()
    {
        // Arrange
        $testArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $testKey = 17;
        $expectedResult = -1;

        // Act
        $result = BinarySearch::binarySearch($testArray, $testKey);

        // Assert
        $this->assertEquals(
            $expectedResult,
            $result
        );
    }
}
