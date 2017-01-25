<?php
// Built for codefights
// Chalenge

/*
    In order to stop the Mad Coder evil genius you need to decipher the encrypted message he sent to his minions. The message contains several numbers that, when typed into a supercomputer, will launch a missile into the sky blocking out the sun, and making all the people on Earth grumpy and sad.

    You figured out that some numbers have a modified single digit in their binary representation. More specifically, in the given number n the kth bit from the right was initially set to 0, but its current value might be different. It's now up to you to write a function that will change the kth bit of n back to 0.

    restrictions:
    Uour code may only take one line making an if statement with ternary operators
 */

/**
 * This function will convert an int to decimal, then change the $kth bit to 0 and return the result
 *
 * @param int $n inteter which will be converted to binary
 * @param int $k bit which will be changed
 */

function killKthBit($n, $k) {
  return (decbin($n)[strlen(decbin($n)) - $k] == 1) ? $n - 2**($k -1) : $n ;
}

