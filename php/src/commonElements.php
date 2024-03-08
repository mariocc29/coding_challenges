<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that takes two arrays of integers and returns a new array containing the common elements between them.
 */

/**
 * ## Constraints
 * * The function should handle arrays of different sizes.
 * * The order of elements in the resulting array does not matter.
 * 
 * ## Expected Result
 * * [1, 2, 3, 4, 5], [3, 4, 5, 6, 7] => [3, 4, 5]
 * * [10, 20, 30, 40], [30, 40, 50, 60] => [30, 40]
 * * [5, 10, 15], [20, 25, 30] => []
 */

## Code

function commonElements(array $array1, array $array2): array {
  return array_values(array_intersect($array1, $array2));
}

## Unit Test

use PHPUnit\Framework\TestCase;

class CommonElements extends TestCase {

    public function testCommonElements() {
      $this->assertEquals([3, 4, 5], commonElements([1, 2, 3, 4, 5], [3, 4, 5, 6, 7]));
      $this->assertEquals([30, 40], commonElements([10, 20, 30, 40], [30, 40, 50, 60]));
      $this->assertEquals([], commonElements([5, 10, 15], [20, 25, 30]));
    }
}