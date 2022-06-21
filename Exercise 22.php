<?php

//Exercise #22
/** Write a new function called swapCase that takes a string of words and
 * capitalizes every second word starting from the first one.
 * swapCase("hey gurl, lets javascript together sometime"); // => "HEY gurl, LETS javascript TOGETHER sometime"
 */

function swapCase(string $text)
{
    $text = explode(" ", $text);

    $text = array_map(function ($i, $word) {
        if ($i % 2 == 0){
            return strtoupper($word);
        }
        return $word;
    }, array_keys($text), $text);

return implode(' ', $text);
}

echo swapCase("hey gurl, lets javascript together sometime");