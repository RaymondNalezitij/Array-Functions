<?php

//Exercise #15
/** Given an array of numbers, return a new array that has only the numbers that are 5 or greater. */

function fiveAndGreaterOnly($arr)
{
    if ($arr >= 5) {
        return $arr;
    }
}

$arr = [3, 6, 8, 2];
$arr2 = array_filter($arr, 'fiveAndGreaterOnly');
print_r($arr2);