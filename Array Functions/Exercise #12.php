<?php

//Exercise #12
/** Given a random non-negative number, you have to return the digits of this number within an array in reverse order.*/

$number = 348597;
$arr = array_reverse(str_split(348597));
print_r($arr);