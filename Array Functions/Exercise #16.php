<?php

//Exercise #16
/** Given an array of numbers, return a new array that only includes the even numbers. */

function checkIfEven($arr)
{
    if ($arr % 2 == 0) {
        return $arr;
    }
}

$arr = [3, 6, 8, 2];
$arr2 = array_filter($arr, 'checkIfEven');
print_r($arr2);