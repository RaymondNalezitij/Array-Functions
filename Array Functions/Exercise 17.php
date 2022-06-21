<?php

//Exercise #17
/** Given an array of strings, return a new array that only includes those that are 5 characters or fewer in length */

function checkIfFiveOrLessLetter($arr)
{
    if (strlen($arr) <= 5) {
        return $arr;
    }
}

$arr = ["dog", "wolf", "by", "family", "eaten", "camping"];
$arr2 = array_filter($arr, 'checkIfFiveOrLessLetter');
print_r($arr2);