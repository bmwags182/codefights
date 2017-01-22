<?php
/**
 * Built for codewars
 * Challenge: 
 * Given integers a and b, determine whether the following 
 * pseudocode results in an infinite loop
 * 
 *     while a is not equal to b do
 *         increase a by 1
 *         decrease b by 1
 * 
 * Assume that the program is executed on a virtual machine 
 * which can store arbitrary long numbers and execute forever.
 *
 * @param int $a first number - increases
 * @param int $b second number - decreases
 *
 * @return boolean determins if the given numbers will cause an infinite loop
 */

function isInfiniteProcess($a, $b) {
    if ($a > $b || abs($a - $b) % 2 != 0) {
        return true;
    } else  {
        return false;
    }
}