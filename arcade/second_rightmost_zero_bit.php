<?php
// Built for codefights
// Challenge
/*
	Presented with the integer n, find the 0-based position of the second rightmost zero bit in its binary representation (it is guaranteed that such a bit exists), counting from right to left.

	Return the value of 2position_of_the_found_bit.
 */

/**
 * @param int $n number to convert to binary
 *
 * @return int 2 to the power of the bit found
 */

function secondRightmostZeroBit($n) {
  return 2 ** strpos(strrev(decbin($n)), "0", strpos(strrev(decbin($n)), "0") + 1);
}