<?php

//Exercise #24
/** Write a function that takes a string and returns an object representing the character count for each letter. */

function countLetters($word)
{
    return array_count_values(str_split($word));
}

$word = "abbcccddddeeeee";
$wordArr2 = countLetters($word);
print_r($wordArr2);