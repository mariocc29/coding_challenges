<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that efficiently determines if a given string has balanced parentheses. 
 * The function should return true if the parentheses are balanced, and false otherwise.
 */

/**
 * ## Constraints
 * * The string may contain other characters besides parentheses.
 * * Parentheses are considered balanced if each opening parenthesis has a corresponding closing parenthesis in the correct order.
 * 
 * ## Expected Result
 * * "(a + b) * (c - d)" => TRUE
 * * "((())())" => TRUE
 * * ")()(" => FALSE
 */

## Code

function isBalanced(string $expression): bool {
  $cleanExpression = preg_replace('/[^\(\)]/', '', $expression);
  $memo = [];

  foreach(str_split($cleanExpression) as $char) {
    if ( $char === ')' ) {
      array_pop($memo);
    } else {
      $memo[] = $char;
    }
  }

  return count($memo) === 0;
}

## Unit Test

use PHPUnit\Framework\TestCase;

class Balanced extends TestCase {

    public function testBalanced() {
      $this->assertTrue(isBalanced("(a + b) * (c - d)"));
      $this->assertTrue(isBalanced("((())())"));
      $this->assertFalse(isBalanced(")()("));
    }
}