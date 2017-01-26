<?php
// Built for codefights
// Challenge
/*
	You are given two numbers a and b where 0 ≤ a ≤ b. Imagine you construct an array of all the integers from a to b inclusive. You need to count the number of 1s in the binary representations of all the numbers in the array.
 */

/**
 * @param int $a first number
 * @param int $b second number
 *
 * @return int count of the number of 1's in the final binary string
 */

function rangeBitCount($a, $b) {
    while ($a <= $b) {
        $diffArray[] = $a;
        $a++;
    }
    foreach ($diffArray as $count) {
        $binArray[] = $count;
    }
    foreach ($binArray as $digit) {
        $binary[] = decbin($digit);
    }
    
    foreach ($binary as $number) {
        $string .= strval($number);
    }
    return substr_count($string, "1");
}
