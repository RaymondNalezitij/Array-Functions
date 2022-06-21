<?php

//Exercise #21
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

print_r($information);