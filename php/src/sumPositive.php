<?php

/**
 * # Challenge Notebook
 * 
 * ## Problem: Write a function that takes an array of integers and returns the sum of all positive integers in the array.
 */

/**
 * ## Constraints
 * * The input array can have both positive and negative integers.
 * * You can assume that the array will not be empty.
 * 
 * ## Expected Result
 * * [1, 2, 3, -4, 5] => 11
 * * [-1, -2, -3, -4, -5] => 0
 * * [10, 20, 30] => 60
 */

// Code
function sumPositive(array $numbers): int
{
    $positiveNumbers = array_filter($numbers, fn($number) => $number > 0);
    return array_sum($positiveNumbers);
}

// Unit Test

use PHPUnit\Framework\TestCase;

class SumPositive extends TestCase
{

    public function testSumPositive()
    {
        $this->assertEquals(11, sumPositive([1, 2, 3, -4, 5]));
        $this->assertEquals(0, sumPositive([-1, -2, -3, -4, -5]));
        $this->assertEquals(60, sumPositive([10, 20, 30]));
    }
}