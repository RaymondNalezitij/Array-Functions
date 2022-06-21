<?php

//Exercise #7
/**You get an array of numbers, return the sum of all of the positives ones.*/

function arrSum($var)
{
    if ($var > 0) {
        return ($var);
    }
}

$numbers = [1, -4, 7, 12];
$sumPositive = 0;
$sumPositive = array_filter($numbers, 'arrSum');
print_r(array_sum($sumPositive));