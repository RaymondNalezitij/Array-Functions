<?php

//Exercise #3
/**Take an array of numbers and make them strings.*/

$stringItUp = [2, 5, 100];
$stringArr = array_map('strval', $stringItUp);
var_dump($stringArr);