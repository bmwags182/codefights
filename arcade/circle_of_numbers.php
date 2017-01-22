<?php

/**
 * Built for codefights
 * Challenge was if numbers are placed around a circle evenly, 
 * find the number directly across from the selected number
 *
 * @param int $n the number of digits placed around a circle starting at 0
 * @param int $firstNumber we are finding the digit directly across from this one
 *
 * @return int the digit directly across from $firstNumber
 */

function circleOfNumbers($n, $firstNumber) {
    $half = intval($n / 2);
    if ( $firstNumber >= $half ) {
        $result = $firstNumber - $half;
    } else {
        $result = $firstNumber + $half;
    }
    return $result;
}