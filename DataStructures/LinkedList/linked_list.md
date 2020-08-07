# Linked Lists
**Author:** Robert James Nielsen
- [GitHub](https://github.com/robertjnielsen)
- [LinkedIn](https://linkedin.com/in/robertjnielsen)

## Table Of Contents
1. [Problem Domain](#problem-domain)
2. [Inputs & Expected Outputs](#inputs--expected-outputs)
3. [Big O / Efficiency](#big-o--efficiency)
4. [Whiteboard Visual](#whiteboard-visual)

## Problem Domain
Create a `Node` class that has properties for the value stored in the `Node`, and a pointer to the next `Node`.

Create a `LinkedList` class, include a `head` property. Upon instantiation, an empty Linked List should be created.
- Define a method called `insert` which takes any value as an argument and adds a new Node with that value to the `head` of the list with an O(1) Time performance.
- Define a method called `includes` which takes any value as an argument and returns a boolean result depending on whether that value exists as a Node’s value somewhere within the list.
- Define a method called `toString` which takes in no arguments and returns a string representing all values in the Linked List, formatted as:
    - `"{ a } -> { b } -> { c } -> NULL"`

## Inputs & Expected Outputs

Inputs and outputs are method dependant.

- Inputs generally consist of integer values to represent Node values.
- Outputs are generally the instantiation of new Node objects being added to the Linked List in most methods.
    - `includes()` outputs a boolean value if a Node with a given value exists in the Linked List.
    - `toString()` outputs a string representing the values contained within the Linked List.

## Big O / Efficiency

#### insert() Method
|Time|Space|
|:---:|:---:|
|O(1)|O(n)|

**Time** is considered _O(1)_ because the method points the Linked List's `head` property to the Node to insert, regardless of the number of Nodes currently existing within the List.

**Space** is considered _O(n)_ because the method will create and insert one new Node object into the Linked List, as defined in the method parameters.

#### includes() Method
|Time|Space|
|:---:|:---:|
|O(n)|O(1)|

**Time** is considered O(n) because it doesn't matter if the Linked List contains 1 or 100 Node objects, the method will have to traverse through each of those objects within the List sequentially until it finds a matching value (if the value exists).

**Space** is considered O(1) because the method is not instantiating or adding any new data to memory.

#### toString() Method
|Time|Space|
|:---:|:---:|
|O(n)|O(1)|

**Time** is considered O(n) because it doesn't matter if the Linked List contains 1 or 100 Node objects, the method will have to traverse through each of those objects within the List sequentially to append all values to the returned string.

**Space** is considered O(1) because the method is not adding anything new to memory.

## Whiteboard Visual
Did not complete for this challenge.