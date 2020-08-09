<?php

namespace DSA\DataStructures\LinkedList;

use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    /**
     * @test Tests that an empty Linked List can be instantiated.
     */
    public function testCanInstantiateAnEmptyLinkedList()
    {
        // Arrange & Act
        $ll = new LinkedList();

        // Assert
        $this->assertTrue(
            $ll->head == null
        );
    }

    /**
     * @test Tests that a Node can be inserted to the beginning of a Linked List.
     */
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

    /**
     * @test Tests that multiple Nodes can be inserted to the beginning of a Linked List.
     */
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

    /**
     * @test Tests that a given value found within a Linked List returns true.
     */
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

    /**
     * @test Tests that a given value NOT found within a Linked List returns false.
     */
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

    /**
     * Tests that all Node values within a Linked List can be output in string format.
     */
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

    /**
     * @test Tests that a Node can be appended to the end of a Linked List.
     */
    public function testCanAppendANodeToTheEndOfALinkedList()
    {
        $ll = new LinkedList();
        $expected = "{ 9 } -> { 3 } -> { 19 } -> NULL";

        $ll->insert(3);
        $ll->insert(9);
        $ll->append(19);

        $this->assertTrue(
            $ll->includes(19)
        );

        $this->assertEquals(
            $expected,
            $ll->toString()
        );
    }

    /**
     * @test Tests that multiple Node objects can be appended to the end of a Linked List.
     */
    public function testCanAppendMultipleNodesToTheEndOfALinkedList()
    {
        $ll = new LinkedList();
        $expected = "{ 9 } -> { 3 } -> { 19 } -> { 42 } -> { 101 } -> NULL";

        $ll->insert(3);
        $ll->insert(9);
        $ll->append(19);
        $ll->append(42);
        $ll->append(101);

        $this->assertEquals(
            $expected,
            $ll->toString()
        );
    }
}
