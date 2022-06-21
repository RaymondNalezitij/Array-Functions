<?php

//Exercise #14
/** Turn an array of numbers into a long string of all those numbers. */

$stringConcat = [1, 2, 3];
$string = implode('', $stringConcat);
echo $string;