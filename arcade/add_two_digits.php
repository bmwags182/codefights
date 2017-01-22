<?php
/**
 * Built for codefghts.com
 * Goal was to create a function which would take the input of a 2 digit integer
 * and add the digits. 
 *
 * @param int $n The input for the function, should be two digits or it will fail
 *
 * @return int will return the sum of the digits from the input
 */

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
