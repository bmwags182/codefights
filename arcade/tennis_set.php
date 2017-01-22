<?php
/**
 * Built for codefights
 * Challenge:
 * Given 2 scores, can a set be won with this final
 * 
 * @param int $score1 first score
 * @param int $score2 second score
 *
 * @return booleean can a set be won with this score?
 */

function tennisSet($score1, $score2) {
    if($score1 == 6 && $score2 < 5) {
        return true;
    } elseif ($score2 == 6 && $score1 < 5) {
        return true;
    } elseif ($score1 == 7 && $score2 >= 5 && $score2 < 7) {
        return true;
    } elseif ($score2 == 7 && $score1 >= 5 && $score1 < 7) {
        return true;
    } else {
        return false;
    }
}
