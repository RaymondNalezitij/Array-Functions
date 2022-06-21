<?php

//Exercise #23
/** Write a function shiftLetters that takes a string and uses .map to return an
 * encoded string with each letter shifted down the alphabet by one.
 * Hint: Use Look up the JS functions String.fromCharCode() and String.CharCodeAt()
 * and see if you can use Ascii code to acomplish this.
 */


function shiftByOne($array)
{
    return chr(ord($array) + 1);
}

$word = "hello";
$wordArr = str_split($word, 1);
$wordArr = array_map("shiftByOne", $wordArr);

echo implode('', $wordArr);