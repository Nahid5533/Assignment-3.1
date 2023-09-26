<?php



function generatePassword($length){

     $allchar="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+ ";

     $password=" ";

     for($i=0;$i<$length; $i++){

        $random=$allchar[rand(0,strlen($allchar)-1)];
        $password .= $random;
     }

     return $password;


}

$length=12;
$password=generatePassword($length);

echo "Generated Password:"  .  $password .  "\n";