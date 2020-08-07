<?php

namespace DSA\Challenges\ArrayReverse;

use PHPUnit\Framework\TestCase;

class ArrayReverseTest extends TestCase
{

    public function testReverseArrayCanReverseAnArray()
    {
        // Arrange
        $testArray = [1, 2, 3, 4, 5];
        $expectedResult = [5, 4, 3, 2, 1];

        // Act
        $result = ArrayReverse::reverseArray($testArray);

        // Assert
        $this->assertEquals(
            $expectedResult,
            $result
        );
    }

    public function testReverseArrayCanReverseAnArrayWithASingleElement()
    {
        // Arrange
        $testArray = [1];
        $expectedResult = [1];

        // Act
        $result = ArrayReverse::reverseArray($testArray);

        // Assert
        $this->assertEquals(
            $expectedResult,
            $result
        );
    }

    public function testReverseArrayCanReverseAnEmptyArray()
    {
        // Arrange
        $testArray = [];
        $expectedResult = [];

        // Act
        $result = ArrayReverse::reverseArray($testArray);

        // Assert
        $this->assertEquals(
            $expectedResult,
            $result
        );
    }
}
