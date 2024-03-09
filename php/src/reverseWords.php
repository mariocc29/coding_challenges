<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that takes a string as input and returns the same string with the words in reverse order.
 */

/**
 * ## Constraints
 * * Do not use precompiled function array_reverse
 * 
 * ## Expected Result
 * * 'Hello, how are you today?' => 'today? you are how Hello,'
 * * 'The quick brown fox jumps over the lazy dog.' => 'dog. lazy the over jumps fox brown quick The'
 */

## Code

function reverseWords(string $string): string {
  $stringSplit = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
  
  $left = 0;
  $right = count($stringSplit) - 1;

  while ($left < $right) {
    [$stringSplit[$left], $stringSplit[$right]] = [$stringSplit[$right], $stringSplit[$left]];
    $left++;
    $right--;
  }

  return implode(' ', $stringSplit);
}

## Unit Test

use PHPUnit\Framework\TestCase;

class ReverseWords extends TestCase {

    public function testReverseWords() {
      $this->assertEquals('today? you are how Hello,', reverseWords('Hello, how are you today?'));
      $this->assertEquals('dog. lazy the over jumps fox brown quick The', reverseWords('The quick brown fox jumps over the lazy dog.'));
    }
}