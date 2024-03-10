<?php

/**
 * # Challenge Notebook
 *
 * ## Problem: Write a function that a limit and generate a Fibonacci sequence until the limit.
 */

/**
 * ## Constraints
 * *
 *
 * ## Expected Result
 * * 10 => [0, 1, 1, 2, 3, 5, 8]
 * * 1 => [0, 1]
 */

## Code

function fibonacci(int $number): array {
  if($number < 2) {
    return range(0, $number);
  }

  $series = [0, 1];
  $cursor = 2;

  while ( $series[$cursor - 1] < $number ) {
    $series[$cursor] = $series[$cursor - 2] + $series[$cursor - 1];
    $cursor++;
  }

  unset($series[$cursor - 1]);
  
  return $series;
}

## Unit Test

use PHPUnit\Framework\TestCase;

class Fibonacci extends TestCase {

    public function testFibonacci() {
      $this->assertEquals([0, 1, 1, 2, 3, 5, 8], fibonacci(10));
      $this->assertEquals([0, 1, 1, 2, 3], fibonacci(5));
      $this->assertEquals([0], fibonacci(0));
      $this->assertEquals([0, 1], fibonacci(1));
      $this->assertEquals([0, 1, 1], fibonacci(2));
    }
}