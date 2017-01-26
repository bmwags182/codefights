<?php
// Built for codefights
// Challenge
/*
    Reverse the order of the bits in a given integer.
 */

/**
 * Reverse the order of the bits in the input and return the decimal
 * @param  int $a    First number
 * @return int       Return the bits reversed
 */
function mirrorBits($a) {
    return bindec(strrev(decbin($a)));
}
