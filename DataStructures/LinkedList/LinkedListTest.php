<?php

namespace DSA\DataStructures\LinkedList;

use phpDocumentor\Reflection\DocBlock\Tags\Link;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    public function testCanInstantiateAnEmptyLinkedList()
    {
        // Arrange & Act
        $ll = new LinkedList();

        // Assert
        $this->assertTrue(
            $ll->head == null
        );
    }

    public function testCanProperlyInsertANodeIntoALinkedList()
    {
        // Arrange
        $ll = new LinkedList();
        $expected = 19;

        // Act
        $ll->insert(19);

        // Assert
        $this->assertEquals(
            $expected,
            $ll->head->value
        );
    }

    public function testCanProperlyInsertMultipleNodesIntoALinkedList()
    {
        // Arrange
        $ll = new LinkedList();
        $expected = 19;

        // Act
        $ll->insert(3);
        $ll->insert(9);
        $ll->insert(19);

        // Assert
        $this->assertEquals(
            $expected,
            $ll->head->value
        );
    }

    public function testCanReturnTrueWhenFindingAValueWithinALinkedList()
    {
        // Arrange
        $ll = new LinkedList();

        // Act
        $ll->insert(3);
        $ll->insert(9);
        $ll->insert(19);

        // Assert
        $this->assertTrue(
            $ll->includes(9)
        );
    }

    public function testCanReturnFalseWhenAValueIsNotPresentInALinkedList()
    {
        $ll = new LinkedList();

        $ll->insert(3);
        $ll->insert(9);
        $ll->insert(19);

        $this->assertFalse(
            $ll->includes(27)
        );
    }

    public function testCanOutputAllValuesExistingWithinALinkedList()
    {
        $ll = new LinkedList();
        $expected = "{ 19 } -> { 9 } -> { 3 } -> NULL";

        $ll->insert(3);
        $ll->insert(9);
        $ll->insert(19);

        $this->assertEquals(
            $expected,
            $ll->toString()
        );
    }
}
