<?php
/**
 * Built for codefights
 * Challenge was to find the highest possible number which is divisible
 * given a number and what we are dividing by
 *
 * @param int $divisor this will be the number we are dividing by
 * @param int $bound the number which will be divided
 *
 * @return int highest number which divides evenly by the divisor
 */

function maxMultiple($divisor, $bound) {
    $result = $bound / $divisor;
    while ( !is_int($result) ) {
        $bound--;
        $result = $bound / $divisor;
    }
    return $bound;
}