<?php

//Exercise #8
/** Given an array of integers.
 * Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.
 * If the input array is empty or null, return an empty array.
 * Example:
 * For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65]. */

$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];

function checkNegative($arr)
{
    return ($arr < 0);
}

function checkPositive($arr)
{
    return ($arr >= 0);
}

$negativeArray = array_filter($input, "checkNegative");
$positiveArray = array_filter($input, "checkPositive");
echo count($positiveArray) ." ". array_sum($negativeArray);