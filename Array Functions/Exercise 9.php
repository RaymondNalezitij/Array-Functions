<?php

//Exercise #9
/**Complete the square sum function so that it squares each number passed into it and then sums the results together.*/

function squareArr($arr)
{
    return $arr * $arr;
}

$arr = [1, 2, 2];
echo array_sum(array_map('squareArr', $arr));