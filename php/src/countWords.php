<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that takes a sentence (string) as input and returns an array containing the count of each unique word in the sentence.
 */

/**
 * ## Constraints
 * * Words are case-insensitive (e.g., "Hello" and "hello" should be considered the same word).
 * Ignore punctuation marks and consider only alphanumeric characters as part of the words.
 * 
 * ## Expected Result
 * * "Hello world. Hello PHP!" => ['hello' => 2, 'world' => 1, 'php' => 1]
 * * "This is a sentence. Another sentence!" => ['this' => 1, 'is' => 1, 'a' => 1, 'sentence' => 2, 'another' => 1]
 * * "PHP PHP PHP" => ['php' => 3]
 */

## Code

function countWords(string $string): array {
  $result = [];
  $cleanString = preg_replace('/[^a-z ]/', '', strtolower($string));
  foreach (explode(' ', $cleanString) as $value) {
    $result[$value] = in_array($value, array_keys($result)) ? $result[$value] + 1 : 1;
  }
  return $result;
}

## Unit Test

use PHPUnit\Framework\TestCase;

class CountWords extends TestCase {

    public function testCountWords() {
      $this->assertEquals(['hello' => 2, 'world' => 1, 'php' => 1], countWords("Hello world. Hello PHP!"));
      $this->assertEquals(['this' => 1, 'is' => 1, 'a' => 1, 'sentence' => 2, 'another' => 1], countWords("This is a sentence. Another sentence!"));
      $this->assertEquals(['php' => 3], countWords("PHP PHP PHP"));
    }
}