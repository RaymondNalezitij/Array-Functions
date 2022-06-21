<?php

//Exercise #4
/**Capitalize each of an array of names.*/

$capitalizeNames = ["john", "JACOB", "jinGleHeimer", "schmidt"];
$capitalizeNames = array_map('ucfirst', array_map('strtolower', $capitalizeNames));
echo implode(" ", $capitalizeNames);