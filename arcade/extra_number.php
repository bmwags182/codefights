<?php
/**
 * Built for codefights
 * Challenge:
 * You're given three integers, a, b and c. It is guaranteed that two 
 * of these integers are equal to each other. What is the value of the third integer?
 *
 * @param int $a first number
 * @param int $b second number
 * @param int $c thrid number
 *
 * @return int the number that doesn't match
 */

function extraNumber($a, $b, $c) {
    if($a == $b && $b != $c) {
        return $c;
    } elseif ($a == $c && $b != $c) {
        return $b;
    } elseif ($b == $c && $a != $c) {
        return $a;
    } elseif ($a == $b && $b == $c) {
        return 0;
    } else {
        return 0;
    }
}
