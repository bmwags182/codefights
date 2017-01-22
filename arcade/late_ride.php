<?php
/**
 * Built for codefights
 * Challenge: given that a timer started at 00:00, find the sum of the digits on
 * the face of a clock after $n minutes have passed
 *
 * @param int $n number of minutes that have passed since timer started
 *
 * @return int some of the digits on a clock face at a time
 */

function lateRide($n) {
    $minutes = $n % 60;
    $hours = intval($n / 60);
    
    // no reason for this block below other than to see what time it is
    // I still don't understand why I am solving for the sum of the digits
    // on the clock, I'm more concerned what time it is
    $minStr = strval($minutes);
    $hrsStr = strval($hours);
    $time = $hrsStr . ":" . $minStr;
    echo $time;
    
    if ( $minutes >= 10 ) {
        $minutes = addTwoDigits($minutes);
    }
    if ( $hours >= 10 ) {
        $hours = addTwoDigits($hours);
    }
    return $hours + $minutes;
}

function addTwoDigits($n) {
    $sum = 0;
    if ( 10 <= $n && 100 >= $n ) {
        $digits = str_split($n);
        foreach ( $digits as $digit ) {
            $sum += $digit;
        }
    } 
    
    return $sum;
}