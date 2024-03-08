<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that will find all the anagrams of a word from a list. You will be given two inputs a word and an array with words. 
 * You should return an array of all the anagrams or an empty array if there are none.
 */

/**
 * ## Constraints
 * * 
 * 
 * ## Expected Result
 * * 'abba', ['aabb', 'abcd', 'bbaa', 'dada'] => ['aabb', 'bbaa']
 * * 'racer', ['crazer', 'carer', 'racar', 'caers', 'racer'] => ['carer', 'racer']
 * * 'laser', ['lazing', 'lazy',  'lacer'] => []
 */

## Code

function anagrams(string $string, array $words): array {
  
  $toArray = function($word) { $w = str_split($word); sort($w); return $w;};
  $reference = $toArray($string);
  
  $anagrams = [];

  foreach ($words as $word) {
    if ( $toArray($word) === $reference ) {
      $anagrams[] = $word;
    }
  }

  return $anagrams;
}

## Unit Test

use PHPUnit\Framework\TestCase;

class Anagrams extends TestCase {

    public function testAnagrams() {
      $this->assertEquals(['aabb', 'bbaa'], anagrams('abba', ['aabb', 'abcd', 'bbaa', 'dada']));
      $this->assertEquals(['carer', 'racer'], anagrams('racer', ['crazer', 'carer', 'racar', 'caers', 'racer']));
      $this->assertEquals([], anagrams('laser', ['lazing', 'lazy',  'lacer']));
    }
}