<?php

//Exercise #25
/** Write a function that takes a string and a target, and
 * returns true or false if the target is present in the string.
 */

function containLetter($word, $needle)
{
    if (strpos($word, $needle)) {
        return true;
    } else {
        return false;
    }
}

$word = "hello";
$needle = "e";

echo containLetter($word, $needle);