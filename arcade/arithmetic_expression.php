<?php
/**
 * Built for codefights
 * Challenge:
 * Consider an arithmetic expression of the form A#B=C. Check whether it is 
 * possible to replace # with one of the four signs: +, -, * or / to obtain a correct expression.
 *
 * @param int $A first number
 * @param int $B second number
 * @param int $C third number
 *
 * @return boolean can the first two numbers be combined to make the third
 */

function arithmeticExpression($A, $B, $C) {
    if($A+$B == $C || $A-$B == $C || $A*$B == $C || $A/$B == $C) {
        return true;
    } else {
        return false;
    }
}