<?php
/**
 * Built for codefights
 * Challenge:
 * Once Mary heard a famous song, and a line from it stuck in her head. 
 * That line was "Will you still love me when I'm no longer young and beautiful?". 
 * Mary believes that a person is loved if and only if he/she is both young 
 * and beautiful, but this is quite a depressing thought, so she wants to put 
 * her belief to the test.
 *
 * @param boolean $young is the person young
 * @param boolean $beautiful is the person beautiful
 * @param boolean $loved is the person loved
 *
 * @return boolean does this contradict Mary's belief
 */

function willYou($young, $beautiful, $loved) {
    if ($young && $beautiful && $loved) {
        return false;
    } elseif ($loved && (!$young || !$beautiful)) {
        return true;
    } elseif (!$loved && !$young && !$beautiful) {
        return false;
    } elseif (!$loved && $young && $beautiful) {
        return true;
    } else {
        return false;
    }
}
