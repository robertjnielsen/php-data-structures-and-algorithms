<?php
declare(strict_types=1);

namespace DSA\DataStructures\LinkedList;

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