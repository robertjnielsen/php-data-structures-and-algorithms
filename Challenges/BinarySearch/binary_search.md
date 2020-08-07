# Binary Search
**Author:** Robert James Nielsen
- [GitHub](https://github.com/robertjnielsen)
- [LinkedIn](https://linkedin.com/in/robertjnielsen)

## Table Of Contents
1. [Problem Domain](#problem-domain)
2. [Inputs & Expected Outputs](#inputs--expected-outputs)
3. [Big O / Efficiency](#big-o--efficiency)
4. [Whiteboard Visual](#whiteboard-visual)

## Problem Domain
Write a function called `binarySearch` which takes a sorted array, and a search key as arguments.

Without utilizing any of the built-in methods available to your language, return the index of the element that matches the search key, or `-1` if the element does not exist.

## Inputs & Expected Outputs
|Input|Output|
|:---:|:---:|
|[1, 2, 3, 4, 5], 2|1|
|[2, 4, 6, 8, 10, 12], 10|4|
|[1, 3, 5, 7, 9], 4|-1|

## Big O / Efficiency
|Time|Space|
|:---:|:---:|
|O(n log n)|O(1)|

**Time** is considered _O(n log n)_ because the time it takes to search for the given element is reduced in half each time, as half the array is removed from the search each iteration.

**Space** is considered _O(1)_ because nothing new is being instantiated into memory beyond temporary variables that will serve as references during the execution of the operation.

## Whiteboard Visual
Did not complete for this challenge.