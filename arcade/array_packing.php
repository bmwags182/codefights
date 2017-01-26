<?php
// Built for codefights
// Challenge
/*
    You are given an array of up to four non-negative integers, each less than 256.

    Your task is to pack these integers into one number M in the following way:

    The first element of the array occupies the first 8 bits of M;
    The second element occupies next 8 bits, and so on.
    Return the obtained integer M.

    Note: the phrase "first bits of M" refers to the least significant bits of M - the right-most bits of an integer. For further clarification see the following example.
 */

/**
 * Take in an array of ints, convert to binary 8 bit blocks, reverse the array, return in decimal
 * @param int $a array of numbers
 * @return int decimal form or the array reversed and converted to binary
 */


function arrayPacking($a) {
    foreach(array_reverse($a) as $decimal) {
        $binary = decbin($decimal);
        $i = 0;
        $diff = 8 - strlen($binary);
        while ($diff > 0) {
            $binstring .= 0;
            $diff--;
        }
        $binstring .= $binary;
    }
    echo $binstring;
    return bindec($binstring);
}
