<?php
/**
 * Built for codefights
 * Challenge: when gaming, given parameters, find out if killing the next enemy
 * will advance me to the next level
 *
 * @param int $experience amount of curent XP in game
 * @param int $threshold XP needed to advance to the next level
 * @param int $reward XP gained for killing next enemy
 *
 * @return boolean will I advance to the next level
 */

function reachNextLevel($experience, $threshold, $reward) {
    if($experience + $reward >= $threshold) {
        return true;
    } else {
        $more = 1;
        while ($experience + $reward < $threshold) {
            $experience += $reward;
            $more++;
        }
        return $more;
    }
}