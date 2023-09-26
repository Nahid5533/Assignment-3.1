<?php



$numbers=[1,2,3,4,5,6,7,8,9,10];


function removeEvenNum($numbers){

     return $numbers%2 !=0;

}

$result=array_filter($numbers,"removeEvenNum");
print_r($result);