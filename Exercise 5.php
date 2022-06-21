<?php

//Exercise #5
/**Make an array of strings of the names.*/

$array = [];

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

array_push($array, $person->name, $person1->name, $person2->name, $person3->name, $person4->name);
echo implode(", ", $array);