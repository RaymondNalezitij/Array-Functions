<?php

//Exercise #29
/** Wolves have been reintroduced to Great Britain. You are a sheep farmer, and are now plagued by wolves which
 * pretend to be sheep. Fortunately, you are good at spotting them. Warn the sheep in front of the wolf that it is
 * about to be eaten. Remember that you are standing at the front of the queue which is at the end of the array.
 * If the wolf is the closest animal to you, return "Pls go away and stop eating my sheep".
 * Otherwise, return "Oi! Sheep number N! You are about to be eaten by a wolf!"
 * where N is the sheep's position in the queue.
 */

$array = ["sheep", "sheep", "sheep", "sheep", "wolf", "sheep", "sheep", "sheep"];

$wolfPos = array_search("wolf", $array);
if ($wolfPos == count($array) - 1) {
    echo "Pls go away and stop eating my sheep\n";
} else {
    echo "Oi! Sheep number " . ($wolfPos) . "! You are about to be eaten by a wolf!\n";
    echo "Oi! Sheep number " . ($wolfPos + 2) . "! You are about to be eaten by a wolf!\n";
}