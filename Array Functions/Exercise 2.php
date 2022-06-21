<?php

//Exercise #2
/**Make an array of numbers that are doubles of the first array.*/

$singleNumbers = [2, 5, 100];

function doubleArray($arr)
{
    return ($arr * 2);
}

$doubleNumbers = array_map("doubleArray", $singleNumbers);
echo implode(" ", $doubleNumbers);