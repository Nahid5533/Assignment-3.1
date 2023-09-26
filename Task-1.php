<?php

$text="The quick brown fox jumps over the lazy dog";

function inLowercase($text){
    return strtolower($text);
}

$new=inLowercase($text);
echo $new . "\n";



$new2=strtr($text,[
    
     "brown" => "red"

]);

echo $new2;