<?php

//Exercise #6
/**Make an array of the names in h1s, and the ages in h2s.*/

$person = new stdClass();
$person->name = "Angelina Jolie";
$person->age = 80;
$person1 = new stdClass();
$person1->name = "Eric Jones";
$person1->age = 2;
$person2 = new stdClass();
$person2->name = "Paris Hilton";
$person2->age = 5;
$person3 = new stdClass();
$person3->name = "Kayne West";
$person3->age = 16;
$person4 = new stdClass();
$person4->name = "Bob Ziroll";
$person4->age = 100;

function h1(stdClass $arr): string
{
    return "<h1>" . $arr->name . "</h1>";
}

function h2(stdClass $arr): string
{
    return "<h2>" . $arr->age . "</h2>";
}

function mergeArray(string $arr1, string $arr2): string
{
    return $arr1 . $arr2;
}

$arr = [];
array_push($arr, $person, $person1, $person2, $person3, $person4);
$arr1 = array_map('h1', $arr);
$arr2 = array_map('h2', $arr);
$resultArray = array_map('mergeArray', $arr1, $arr2);
echo var_dump($resultArray);