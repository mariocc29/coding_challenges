<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that prints the numbers from 1 to n. But for multiples of 3, print "Fizz" instead of the number, 
 * and for multiples of 5, print "Buzz". For numbers which are multiples of both three and five, print "FizzBuzz".
 */

/**
 * ## Constraints
 * * The input, n, will be a positive integer.
 * 
 * ## Expected Result
 * * 5 => 1, 2, Fizz, 4, Buzz
 * * 10 => 1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz
 * * 15 => 1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz
 */

## Code

function fizzBuzz(int $number): array {
  $result = [];

  for ($i = 1; $i <= $number; $i++) {
    $output = ($i % 3 === 0 ? 'Fizz' : '') . ($i % 5 === 0 ? 'Buzz' : '');
    $result[] = ($output !== '' ? $output : $i);
  }

  return $result;
}

## Unit Test

use PHPUnit\Framework\TestCase;

class FizzBuzz extends TestCase {

    public function testFizzBuzz() {
      $this->assertEquals([1, 2, 'Fizz', 4, 'Buzz'], fizzBuzz(5));
      $this->assertEquals([1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz'], fizzBuzz(10));
      $this->assertEquals([1, 2, 'Fizz', 4, 'Buzz', 'Fizz', 7, 8, 'Fizz', 'Buzz', 11, 'Fizz', 13, 14, 'FizzBuzz'], fizzBuzz(15));
    }
}