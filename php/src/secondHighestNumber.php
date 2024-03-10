<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that finds the second highest number in an array.
 */

/**
 * ## Constraints
 * * Do not use any precompiled sorting functions, max, or min functions.
 * 
 * ## Expected Result
 * * [3, 4, 2, 1, 5] => 4
 * * [3, 7, 5, 5, 2, 8, 3] => 7
 * * [3, -7, -5, 5, 2, -8, -3] => 3
 */

## Code
function secondHighestNumber(array $numbers): int {
  
  $maxNumber = $numbers[0];
  $secondMaxNumber = PHP_INT_MIN;
  $cursor = count($numbers) - 1;
  
  while( $cursor > 0 ){

    if ($maxNumber < $numbers[$cursor]) {
      $secondMaxNumber = $maxNumber;
      $maxNumber = $numbers[$cursor];
    } elseif ($maxNumber > $numbers[$cursor] && $secondMaxNumber < $numbers[$cursor]) {
      $secondMaxNumber = $numbers[$cursor];
    }

    $cursor--;
  }

  return $secondMaxNumber;
}

## Unit Test

use PHPUnit\Framework\TestCase;

class SecondHighestNumber extends TestCase {

    public function testSecondHighestNumber() {
      $this->assertEquals(4, secondHighestNumber([3, 4, 2, 1, 5]));
      $this->assertEquals(7, secondHighestNumber([3, 7, 5, 5, 2, 8, 3]));
      $this->assertEquals(3, secondHighestNumber([3, -7, -5, 5, 2, -8, -3]));
    }
}