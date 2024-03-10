<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that determines whether a given string is a palindrome or not. A palindrome is a word, phrase, or sequence of characters 
 * that reads the same forward and backward (ignoring spaces, punctuation, and capitalization).
 */

/**
 * ## Constraints
 * * The input string will consist only of printable ASCII characters.
 * * The function should be case-insensitive and ignore spaces.
 * 
 * ## Expected Result
 * * 'radar' => TRUE
 * * 'Hello' => FALSE
 * * 'A man a plan a canal Panama' => TRUE
 */

## Code

function isPalindrome(string $string): bool {
  $cleanString = preg_replace('/[^a-z]/', '', strtolower($string));
  return strrev($cleanString) == $cleanString;
}

## Unit Test

use PHPUnit\Framework\TestCase;

class Palindrome extends TestCase {

    public function testPalindrome() {
      $this->assertTrue(isPalindrome('radar'));
      $this->assertFalse(isPalindrome('Hello'));
      $this->assertTrue(isPalindrome('A man a plan a canal Panama'));
    }
}