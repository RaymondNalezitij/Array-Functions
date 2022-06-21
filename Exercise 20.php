<?php

//Exercise #20
/** Given an array of arrays, flatten them into a single array */

$arrays = [["1", "2", "3"], [true], [4, 5, 6]];
$arrays2 = call_user_func_array('array_merge', $arrays);
print_r($arrays2);