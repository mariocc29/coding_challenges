<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that takes an array of integers and returns the average of all the even numbers in the array.
 */

/**
 * ## Constraints
 * * The input array can have both even and odd integers.
 * * You can assume that the array will not be empty.
 * 
 * ## Expected Result
 * * [1, 2, 3, 4, 5] => 3
 * * [10, 15, 20, 25, 30] => 20
 * * [7, 9, 13, 17] => 0
 */

## Code

function averageEven(array $numbers): float {
    $evenNumbers = array_filter($numbers, fn($number) => $number % 2 == 0 );
    return count($evenNumbers) ? array_sum($evenNumbers) / count($evenNumbers) : 0;
}

## Unit Test

use PHPUnit\Framework\TestCase;

class AverageEven extends TestCase {

    public function testAverageEven() {
      $this->assertEquals(3, averageEven([1, 2, 3, 4, 5]));
      $this->assertEquals(20, averageEven([10, 15, 20, 25, 30]));
      $this->assertEquals(0, averageEven([7, 9, 13, 17]));
    }
}