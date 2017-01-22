<?php
/**
 * Built for codefights
 * Challenge was to take a given input and output the 
 * largest number possible with that number of digits
 *
 * @param int $n input for number of digits in the final answer
 *
 * @return int will output the largest number possible with $n digits
 */

function largestNumber($n) {
    $result = 0;
    if ( $n >= 1 && $n <= 7 ) {
        $maxnum = 10 ** $n;
        $result = $maxnum - 1;
    }
    
    return $result;
}
