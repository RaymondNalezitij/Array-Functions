<?php

//Exercise #10
/** Write a method, that will get an integer array as parameter and will process every number from this array.
 * Return a new array with processing every number of the input-array like this:
 * [4, 3, 9, 7, 2, 1]; // => [2,9,3,49,4,1]
 * If the number has an integer square root, take this, otherwise square the number.
 * The input array should not be modified!
 */

function toSquareOrNotToSquare($arr)
{
    if (fmod(sqrt($arr), 1) == 0.00) {
        return sqrt($arr);
    } else {
        return $arr * $arr;
    }
}

$arr = [4, 3, 9, 7, 2, 1];
echo implode(" ", $arr);
$arr = array_map('toSquareOrNotToSquare', $arr);
echo implode(" ", $arr);