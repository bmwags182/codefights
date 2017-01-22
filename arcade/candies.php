<?php
/**
 * Built for codefights
 * Challenge was to take $n people and $m candies and divide the candies evenly
 * candy cannot be split into pieces. Output the number of candies used.
 *
 * @param int $n number of people splitting the candy
 * @param int $m number of pieces of candy to divide
 *
 * @return int number of pieces of candy which will be eaten
 */

function candies($n, $m) {
    $result = 0;    
    $result = intval($m/$n);    
    $result = $n * $result;    
    return $result;
}