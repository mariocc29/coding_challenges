<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that efficiently finds the non-repeating characters in a given string. The function should return the unique sorted characters.
 */

/**
 * ## Constraints
 * * Do not use precompiled function array_unique
 * 
 * ## Expected Result
 * * 'aabbcc' => 'abc'
 * * 'aabccd' => 'abcd'
 */

## Code

function removeDuplicated(array $chars): array {
  $uniqueChars = array_flip($chars);
  ksort($uniqueChars);
  return array_keys($uniqueChars);
}

## Unit Test

use PHPUnit\Framework\TestCase;

class RemoveDuplicated extends TestCase {

    public function testRemoveDuplicated() {
      $this->assertEquals(['a','b','c'], removeDuplicated(['a','a','b','b','c','c']));
      $this->assertEquals(['a','b','c', 'd'], removeDuplicated(['b','a','d','c','a', 'c']));
    }
}