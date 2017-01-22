<?php
/**
 * Built for codefights
 * Challenge:
 * You found two items in a treasure chest! The first item weighs 
 * weight1 and is worth value1, and the second item weighs weight2 
 * and is worth value2. What is the total maximum value of the items
 * you can take with you, assuming that your max weight capacity is 
 * maxW and you can't come back for the items later?
 *
 * @param int $value1 value of the first item
 * @param int $weight1 weight of the first item
 * @param int $value2 value of the second item
 * @param int $weight2 weight of the second item
 * @param int $maxW max weight you can carry
 *
 * @return int the value of the item you get to take home
 */

function knapsackLight($value1, $weight1, $value2, $weight2, $maxW) {
    $weights = [$weight1, $weight2];
    $values = [$value1, $value2];
    
    if($weight1 > $maxW && $weight2 > $maxW) {
        return 0;
    } elseif ($weight1 + $weight2 <= $maxW) {
        return $value1 + $value2;
    } elseif ($value1 >= $value2 && $weight1 <= $maxW) {
        return $value1;
    } elseif ($value1 < $value2 && $weight2 <= $maxW) {
        return $value2;
    } elseif ($value1 < $value2 && $weight2 >= $maxW) {
        return $value1;
    } elseif ($value1 == $value2 && $weight1 <= $maxW) {
        return $value1;
    }
}
