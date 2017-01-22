<?php 

/**
 * Built for codefights
 * Challenge was to figure out how many people will be disturbed
 * in a full theater if I get up and leave the room. disturbed people 
 * will be equal to everyone behind me and to my left on the way out
 *
 * Personal note: if I'm that concerned I would be concerned about the people in my row as well
 *
 * @param int $nCols number of total columns of seats in the theater
 * @param int $nRows number of total rows of seats in the theater
 * @param int $col column number I am sitting in
 * @param int $row row number I am sitting in
 *
 * @return int number of total people I disturb
 */

function seatsInTheater($nCols, $nRows, $col, $row) {
    $disturbed_cols = $nCols - $col + 1;
    $disturbed_rows = $nRows - $row;
    // add a +1 above when I start caring about people in my row
    
    $disturbed_people = $disturbed_cols * $disturbed_rows;
    
    return $disturbed_people;
}
