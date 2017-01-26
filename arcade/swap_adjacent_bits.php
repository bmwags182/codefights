<?php
// Built for codefights
// Challenge

/*
    You're given an arbitrary 32-bit integer n. Swap each pair of adjacent bits in its binary representation and return the result as a decimal number.
 */

/**
 * Take in a 32 bit integer and swap the pairs of bits to return the resulting int
 * @param  int $n 32-bit number for bit swapping
 * @return int Resulting int after swapping bits
 */
function swapAdjacentBits($n) {
  return (($n & 0b10101010101010101010101010101010) >> 1) | (($n & 0b01010101010101010101010101010101) << 1);
}