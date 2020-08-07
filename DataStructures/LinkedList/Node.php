<?php
declare(strict_types=1);

namespace DSA\DataStructures\LinkedList;

class Node
{
    /**
     * @var mixed $value The value the Node holds.
     */
    public $value;

    /**
     * @var ?Node $next The next Node in the LinkedList.
     */
    public ?Node $next;

    /**
     * Node constructor.
     *
     * @param mixed $value The value the new Node will hold.
     */
    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}