<?php
/**
 * Built for codefights
 * Challenge: Find out how long of a call I can make
 * 
 * @param int $min1 cost of the first minute of a call
 * @param int $min2_10 cost of minutes 2-10
 * @param int $min11 cost of minutes after 10
 * @param int $s money on account
 *
 * @return int number of minutes I can be on call for
 */

function phoneCall($min1, $min2_10, $min11, $s) {
    $minutes = 1;
    $s -= $min1;
    while ($s>0 && $minutes < 10) {
        $s -= $min2_10;
        $minutes++;
    }

    while ($s>0) {
        $s -= $min11;
        $minutes++;
    }

    if ( $s < 0 ) {
        return $minutes - 1;
    } else {
        return $minutes;
    }

}