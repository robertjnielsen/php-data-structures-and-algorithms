<?php
declare(strict_types=1);

namespace DSA\DataStructures\LinkedList;

use Exception;

class LinkedList
{
    /**
     * @var ?Node $head The HEAD (or first Node) of the LinkedList.
     */
    public ?Node $head;

    /**
     * LinkedList constructor.
     */
    public function __construct()
    {
        $this->head = null;
    }

    /**
     * Create a new Node, and insert it as the LinkedList $head.
     *
     * @param mixed $value The value the new Node to insert should hold.
     */
    public function insert($value): void
    {
        $newNode = new Node($value);

        $newNode->next = $this->head;

        $this->head = $newNode;
    }

    /**
     * Inserts a new Node with a given value, before another Node in the Linked List with a given value.
     *
     * @param mixed $value The value of the Node to insert before.
     * @param mixed $newValue The new Node value to insert into the Linked List.
     *
     * @throws Exception Thrown when the given value to insert before does not exist within the Linked List.
     */
    public function insertBefore($value, $newValue): void
    {
        // Check if the value even exists within the Linked List.
        if (! $this->includes($value)) {
            throw new Exception("{$value} is not a value contained within the Linked List.");
        }

        $newNode = new Node($newValue);
        $current = $this->head;

        if ($current->value === $value) {
            $newNode->next = $current;
            $this->head = $newNode;
        } else {
            while ($current->next->value !== $value) {
                $current = $current->next;
            }

            $newNode->next = $current->next;
            $current->next = $newNode;
        }
    }

    /**
     * Inserts a new Node into the Linked List directly after an existing Node.
     *
     * @param mixed $existingValue The value of the Node to insert after.
     * @param mixed $newValue The new Node value to insert into the Linked List.
     *
     * @throws Exception Thrown when the given value to insert after does not exist within the Linked List.
     */
    public function insertAfter($existingValue, $newValue): void
    {
        // Check if the value even exists within the Linked List.
        if (! $this->includes($existingValue)) {
            throw new Exception("{$existingValue} is not a value contained within the Linked List.");
        }

        $newNode = new Node($newValue);
        $current = $this->head;

        if ($current->value === $existingValue) {
            $current->next = $newNode;
        } else {
            while ($current->value !== $existingValue) {
                $current = $current->next;
            }

            $newNode->next = $current->next;
            $current->next = $newNode;
        }
    }

    /**
     * Appends a new Node to the end of the Linked List.
     *
     * @param mixed $value The given value that the new Node to append to the Linked List should hold.
     */
    public function append($value): void
    {
        $newNode = new Node($value);
        $currentNode = $this->head;

        if ($currentNode === null) {
            $this->head = $newNode;
        } else {
            while ($currentNode->next !== null) {
                $currentNode = $currentNode->next;
            }

            $currentNode->next = $newNode;

            $newNode->next = null;
        }
    }

    /**
     * Removes a given Node value from the Linked List.
     *
     * @param mixed $existingValue The Node value to remove from the Linked List.
     *
     * @throws Exception Thrown when the given value to remove does not exist within the Linked List.
     */
    public function removeNode($existingValue): void
    {
        // Check if the value even exists within the Linked List.
        if (! $this->includes($existingValue)) {
            throw new Exception("{$existingValue} is not a value contained within the Linked List.");
        }

        $current = $this->head;

        if ($current->value === $existingValue) {
            $this->head = $current->next;
        } else {
            while ($current->next->value !== $existingValue) {
                $current = $current->next;
            }

            $current->next = $current->next->next;
        }
    }

    /**
     * Checks if the LinkedList contains a given value.
     *
     * @param mixed $value The value to check for within the LinkedList.
     *
     * @return bool Whether the value exists in the LinkedList or not.
     */
    public function includes($value): bool
    {
        $currentNode = $this->head;

        // Iterate through each Node checking for the value.
        while ($currentNode != null) {

            // Check if the current Node contains the value.
            if ($currentNode->value === $value) {
                return true;
            }

            $currentNode = $currentNode->next;
        }

        // Return false if the value is never found.
        return  false;
    }

    /**
     * Returns a string containing all Node values in the LinkedList.
     *
     * @return string The values of all Nodes in the LinkedList, as a string.
     */
    public function toString(): string
    {
        $result = "";

        $current = $this->head;

        while ($current != null) {
            $result = $result . "{ {$current->value} } -> ";

            $current = $current->next;
        }

        $result = $result . "NULL";

        return $result;
    }
}