<?php

//Exercise #1
$array = ["h", "o", "l", "a"];
echo implode(",", $array);


//Exercise #2
//Make an array of numbers that are doubles of the first array.
echo "\n";

$singleNumbers = [2, 5, 100];

function doubleArray($arr)
{
    return ($arr * 2);
}

$doubleNumbers = array_map("doubleArray", $singleNumbers);
echo implode(" ", $doubleNumbers);


//Exercise #3
//Take an array of numbers and make them strings.
echo "\n";

$stringItUp = [2, 5, 100];
$stringArr = array_map('strval', $stringItUp);
var_dump($stringArr);


//Exercise #4
//Capitalize each of an array of names.
echo "\n";

$capitalizeNames = ["john", "JACOB", "jinGleHeimer", "schmidt"];
$capitalizeNames = array_map('ucfirst', array_map('strtolower', $capitalizeNames));
echo implode(" ", $capitalizeNames);


//Exercise #5
//Make an array of strings of the names.
echo "\n";

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


//Exercise #6
//Make an array of the names in h1s, and the ages in h2s.
echo "\n";

function h1($arr)
{
    return "<h1>" . $arr->name . "</h1>";
}

function h2($arr)
{
    return "<h2>" . $arr->age . "</h2>";
}

function mergeArray($arr1, $arr2)
{
    return $arr1 . $arr2;
}

$arr = [];
array_push($arr, $person, $person1, $person2, $person3, $person4);
$arr1 = array_map('h1', $arr);
$arr2 = array_map('h2', $arr);
$resultArray = array_map('mergeArray', $arr1, $arr2);
echo var_dump($resultArray);


//Exercise #7
//You get an array of numbers, return the sum of all of the positives ones.
echo "\n";

function arrSum($var)
{
    if ($var > 0) {
        return ($var);
    }
}

$numbers = [1, -4, 7, 12];
$sumPositive = 0;
$sumPositive = array_filter($numbers, 'arrSum');
print_r(array_sum($sumPositive));


//Exercise #8
echo "\n";
/**
 * Given an array of integers.
 * Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.
 * If the input array is empty or null, return an empty array.
 * Example:
 * For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
 */

$input = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15];

function checkNegative($arr)
{
    return ($arr < 0);
}

function checkPositive($arr)
{
    return ($arr >= 0);
}

$negativeArray = array_filter($input, "checkNegative");
$positiveArray = array_filter($input, "checkPositive");
echo count($positiveArray) . array_sum($negativeArray);

//Exercise #9
//Complete the square sum function so that it squares each number passed into it and then sums the results together.
echo "\n";

function squareArr($arr)
{
    return $arr * $arr;
}

$arr = [1, 2, 2];
echo array_sum(array_map('squareArr', $arr));


//Exercise #10
echo "\n";
/** Write a method, that will get an integer array as parameter and will process every number from this array.
 * Return a new array with processing every number of the input-array like this:
 * [4, 3, 9, 7, 2, 1]; // => [2,9,3,49,4,1]
 * If the number has an integer square root, take this, otherwise square the number.
 * The input array should not be modified!
 */

function toSquareOrNotToSquare($arr)
{
    if (fmod(sqrt($arr), 1) == 0.00) {
        return sqrt($arr);
    } else {
        return $arr * $arr;
    }
}

$arr = [4, 3, 9, 7, 2, 1];
echo implode(" ", $arr);
$arr = array_map('toSquareOrNotToSquare', $arr);
echo implode(" ", $arr);

//Exercise #11
echo "\n";
/**We want an array, but not just any old array, an array with contents!
 * Write a function that produces an array with the numbers 0 to N-1 in it.
 * For example, the following code will result in an array containing the numbers 0 to 4:
 * arr(5); // => [0,1,2,3,4] */

$number[] = range(0, 5);
print_r($number);

//Exercise #12
echo "\n";
/** Given a random non-negative number, you have to return the digits of this number within an array in reverse order.*/

$number = 348597;
$arr = array_reverse(str_split(348597));
print_r($arr);

//Exercise #13
echo "\n";
/** Turn an array of numbers into a total of all the numbers. */

$total = [1, 2, 3];
echo array_sum($total);

//Exercise #14
echo "\n";
/** Turn an array of numbers into a long string of all those numbers. */
$stringConcat = [1, 2, 3];
$string = implode('', $stringConcat);
echo $string;

//Exercise #15
echo "\n";
/** Given an array of numbers, return a new array that has only the numbers that are 5 or greater. */
function fiveAndGreaterOnly($arr)
{
    if ($arr >= 5) {
        return $arr;
    }
}

$arr = [3, 6, 8, 2];
$arr2 = array_filter($arr, 'fiveAndGreaterOnly');
print_r($arr2);

//Exercise #16
echo "\n";
/** Given an array of numbers, return a new array that only includes the even numbers. */

function checkIfEven($arr)
{
    if ($arr % 2 == 0) {
        return $arr;
    }
}

$arr = [3, 6, 8, 2];
$arr2 = array_filter($arr, 'checkIfEven');
print_r($arr2);

//Exercise #17
echo "\n";
/** Given an array of strings, return a new array that only includes those that are 5 characters or fewer in length */

function checkIfFiveOrLessLetter($arr)
{
    if (strlen($arr) <= 5) {
        return $arr;
    }
}

$arr = ["dog", "wolf", "by", "family", "eaten", "camping"];
$arr2 = array_filter($arr, 'checkIfFiveOrLessLetter');
print_r($arr2);

//Exercise #18
echo "\n";
/** Turn an array of voter objects into a count of how many people voted. */

function checkIfVoted($voters)
{
    if ($voters["voted"] == true) {
        return true;
    }
}

$count = 0;

$voters = [
    ["name" => "Bob", "age" => 30, "voted" => true],
    ["name" => "Jake", "age" => 32, "voted" => true],
    ["name" => "Kate", "age" => 25, "voted" => false],
    ["name" => "Sam", "age" => 20, "voted" => false],
    ["name" => "Phil", "age" => 21, "voted" => true],
    ["name" => "Ed", "age" => 55, "voted" => true],
    ["name" => "Tami", "age" => 54, "voted" => true],
    ["name" => "Mary", "age" => 31, "voted" => false],
    ["name" => "Becky", "age" => 43, "voted" => false],
    ["name" => "Joey", "age" => 41, "voted" => true],
    ["name" => "Jeff", "age" => 30, "voted" => true],
    ["name" => "Zack", "age" => 19, "voted" => false],
];
$x = array_filter($voters, 'checkIfVoted');
echo count($x);

//Exercise #19
echo "\n";
/** Given an array of all your wishlist items, figure out how much it would cost to just buy everything at once. */

function sumWish($wishlist)
{
    return $wishlist["price"];
}

$wishlist = [
    ["title" => "Tesla Model S", "price" => 90000],
    ["title" => "4 carat diamond ring", "price" => 45000],
    ["title" => "Fancy hacky Sack", "price" => 5],
    ["title" => "Gold fidgit spinner", "price" => 2000],
    ["title" => "A second Tesla Model S", "price" => 90000],
];

echo array_sum(array_map('sumWish', $wishlist));

//Exercise #20
echo "\n";
/** Given an array of arrays, flatten them into a single array */

$arrays = [["1", "2", "3"], [true], [4, 5, 6]];
$arrays2 = call_user_func_array('array_merge', $arrays);
print_r($arrays2);

//Exercise #21
echo "\n";
/** Given an array of potential voters, return an object representing the results of the vote
 * Include how many of the potential voters were in the ages 18-25,
 * how many from 26-35, how many from 36-55, and how many of each of those age ranges actually voted.
 * The resulting object containing this data should have 6 properties. See the example output at the bottom.
 */

function checkYoungVotes($voters)
{
    if ($voters["age"] >= 18 && $voters["age"] <= 25 && $voters["voted"] == true) {
        return true;
    }
}

function checkYoung($voters)
{
    if ($voters["age"] >= 18 && $voters["age"] <= 25) {
        return true;
    }
}

function checkMidVotes($voters)
{
    if ($voters["age"] >= 26 && $voters["age"] <= 35 && $voters["voted"] == true) {
        return true;
    }
}

function checkMid($voters)
{
    if ($voters["age"] >= 26 && $voters["age"] <= 35) {
        return true;
    }
}

function checkOldVotes($voters)
{
    if ($voters["age"] >= 36 && $voters["age"] <= 55 && $voters["voted"] == true) {
        return true;
    }
}

function checkOld($voters)
{
    if ($voters["age"] >= 36 && $voters["age"] <= 55) {
        return true;
    }
}

$voters = [
    ["name" => "Bob", "age" => 30, "voted" => true],
    ["name" => "Jake", "age" => 32, "voted" => true],
    ["name" => "Kate", "age" => 25, "voted" => false],
    ["name" => "Sam", "age" => 20, "voted" => false],
    ["name" => "Phil", "age" => 21, "voted" => true],
    ["name" => "Ed", "age" => 55, "voted" => true],
    ["name" => "Tami", "age" => 54, "voted" => true],
    ["name" => "Mary", "age" => 31, "voted" => false],
    ["name" => "Becky", "age" => 43, "voted" => false],
    ["name" => "Joey", "age" => 41, "voted" => true],
    ["name" => "Jeff", "age" => 30, "voted" => true],
    ["name" => "Zack", "age" => 19, "voted" => false]
];

$information = new stdClass();
$information->numYoungVotes = array_filter($voters, 'checkYoungVotes');
$information->numYoungPeople = array_filter($voters, 'checkYoung');
$information->numMidVotesPeople = array_filter($voters, 'checkMidVotes');
$information->numMidsPeople = array_filter($voters, 'checkMid');
$information->numOldVotesPeople = array_filter($voters, 'checkOldVotes');
$information->numOldsPeople = array_filter($voters, 'checkOld');

//print_r($information);

//Exercise #22
echo "\n";
/** Write a new function called swapCase that takes a string of words and
 * capitalizes every second word starting from the first one.
 * swapCase("hey gurl, lets javascript together sometime"); // => "HEY gurl, LETS javascript TOGETHER sometime"
 */

$case = "hey gurl, lets javascript together sometime";
$caseArray = explode(" ", $case);
list($array1,$array2,$array3,$array4,$array5,$array6) = array_chunk($caseArray, 1);

$array1 = array_flip($array1);
$array3 = array_flip($array3);
$array5 = array_flip($array5);
$array1 = array_change_key_case($array1, CASE_UPPER);
$array3 = array_change_key_case($array3, CASE_UPPER);
$array5 = array_change_key_case($array5, CASE_UPPER);
$array1 = array_flip($array1);
$array3 = array_flip($array3);
$array5 = array_flip($array5);

$caseArray2 = array_merge($array1,$array2,$array3,$array4,$array5,$array6);

echo implode(" ",$caseArray2);

//Exercise #23
echo "\n";
/** Write a function shiftLetters that takes a string and uses .map to return an
 * encoded string with each letter shifted down the alphabet by one.
 * Hint: Use Look up the JS functions String.fromCharCode() and String.CharCodeAt()
 * and see if you can use Ascii code to acomplish this.
 */

function shiftByOne($array){
    $array = ord($array)+1;
    $array = chr($array);
    return $array;
}

$word = "hello";
$wordArr = str_split($word,1);
$wordArr = array_map("shiftByOne", $wordArr);

echo implode('',$wordArr);

//Exercise #24
echo "\n";
/** Write a function that takes a string and returns an object representing the character count for each letter. */

function countLetters($array){
    if ($array !== 0){
        return $array;
    }
}

function translateLetterToNumber($array){
    return chr($array);
}

$word = "abbcccddddeeeee";
$wordArr = count_chars($word);
$wordArr = array_filter($wordArr,"countLetters");
$wordArr2 = array_map("translateLetterToNumber", array_flip($wordArr));

echo implode('',$wordArr2);
echo "\n";
echo implode('',$wordArr);

//Exercise #25
echo "\n";
/** Write a function that takes a string and a target, and
 * returns true or false if the target is present in the string.
 */

function containLetter($word,$needle){
    if (strpos($word, $needle)){
        return true;
    } else {
        return false;
    }
}

$word = "hello";
$needle = "e";

echo containLetter($word, $needle);

//Exercise #26
echo "\n";
/** Consider an array/list of sheep where some sheep may be missing from their place.
 * We need a function that counts the number of sheep present in the array (true means present).
 */

$sheepArray = [true, true, true, false, true, true, true, true, true, false, true, false,
    true, false, false, true, true, true, true, true, false, false, true, true];

echo count(array_filter($sheepArray));

//Exercise #27
echo "\n";
/** Can you find the needle in the haystack?
 * Write a function findNeedle() that takes an array full of junk but containing one "needle"
 * After your function finds the needle it should return a message (as a string) that says:
 * "found the needle at position " plus the index it found the needle, so:
 */

$findNeedle = ['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'];
echo array_search('needle',$findNeedle);

//Exercise #28
echo "\n\n";
/** The first input array is the key to the correct answers to an exam, like ["a", "a", "b", "d"].
 * The second one contains a student's submitted answers.
 * The two arrays are not empty and are the same length.
 * Return the score for this array of answers, giving +4 for each correct answer, -1 for each incorrect answer,
 * and +0 for each blank answer, represented as an empty string (in C the space character is used).
 * If the score < 0, return 0.
 */

function examResult($exam){
    $examResult = array_diff_assoc($exam[0],$exam[1]);
    $result = (4-count($examResult))*4 - (count($examResult));
    if ($result < 0) {
        return 0;
    }
    if (in_array(null,$exam[1])){
        $result = $result + 1;
        return $result;
    }
    return $result;
}

$checkExam1 = [["a", "a", "b", "b"], ["a", "c", "b", "d"]]; // => 6
$checkExam2 = [["a", "a", "c", "b"], ["a", "a", "b", ""]]; // => 7
$checkExam3 = [["a", "a", "b", "c"], ["a", "a", "b", "c"]]; // => 16
$checkExam4 = [["b", "c", "b", "a"], ["", "a", "a", "c"]]; // => 0

echo examResult($checkExam1);
echo "\n";
echo examResult($checkExam2);
echo "\n";
echo examResult($checkExam3);
echo "\n";
echo examResult($checkExam4);

//Exercise #29
echo "\n\n";
/** Wolves have been reintroduced to Great Britain. You are a sheep farmer, and are now plagued by wolves which
 * pretend to be sheep. Fortunately, you are good at spotting them. Warn the sheep in front of the wolf that it is
 * about to be eaten. Remember that you are standing at the front of the queue which is at the end of the array.
 * If the wolf is the closest animal to you, return "Pls go away and stop eating my sheep".
 * Otherwise, return "Oi! Sheep number N! You are about to be eaten by a wolf!"
 * where N is the sheep's position in the queue.
 */

$array = ["sheep", "sheep", "sheep", "sheep", "wolf", "sheep", "sheep", "sheep"];

$wolfPos = array_search("wolf", $array);
if ($wolfPos == count($array)-1){
    echo "Pls go away and stop eating my sheep\n";
} else {
    echo "Oi! Sheep number " . ($wolfPos) ."! You are about to be eaten by a wolf!\n";
    echo "Oi! Sheep number " . ($wolfPos + 2) ."! You are about to be eaten by a wolf!\n";
}

//Exercise #30
/** You take your son to the forest to see the monkeys. You know that there are a certain number there (n), but your
 * son is too young to just appreciate the full number, he has to start counting them from 1.
 * As a good parent, you will sit and count with him. Given the number (n), populate an array
 * with all numbers up to and including that number, but excluding zero.
 */

$n = 10;

$array = range(1, $n);
print_r($array);