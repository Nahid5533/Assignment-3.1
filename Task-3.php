<?php


$grades=[85, 92, 78, 88, 95];

function descendingOrder($grades){

    rsort($grades);

    return $grades;
}
 $sorted=descendingOrder($grades);
 print_r ($sorted);