<?php

namespace DSA\Challenges\InsertShiftArray;

use PHPUnit\Framework\TestCase;

class InsertShiftArrayTest extends TestCase
{

    public function testInsertShiftArray()
    {
        // Arrange
        $testArray = [1, 3, 5, 9, 11, 13];
        $testElement = 7;
        $expectedresult = [1, 3, 5, 7, 9, 11, 13];

        // Act
        $result = InsertShiftArray::InsertShiftArray($testArray, $testElement);

        // Assert
        $this->assertEquals(
            $expectedresult,
            $result
        );
    }
}
