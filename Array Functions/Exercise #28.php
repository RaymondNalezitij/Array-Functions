<?php

//Exercise #28
/** The first input array is the key to the correct answers to an exam, like ["a", "a", "b", "d"].
 * The second one contains a student's submitted answers.
 * The two arrays are not empty and are the same length.
 * Return the score for this array of answers, giving +4 for each correct answer, -1 for each incorrect answer,
 * and +0 for each blank answer, represented as an empty string (in C the space character is used).
 * If the score < 0, return 0.
 */

function examResult($exam)
{
    $examResult = array_diff_assoc($exam[0], $exam[1]);
    $result = (4 - count($examResult)) * 4 - (count($examResult));
    if ($result < 0) {
        return 0;
    }
    if (in_array(null, $exam[1])) {
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