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














// function generatePassword($length) {
//     // Define the character sets for each category
//     $lowercase = 'abcdefghijklmnopqrstuvwxyz';
//     $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $numbers = '0123456789';
//     $specialChars = '!@#$%^&*()_+';

//     // Combine all character sets
//     $allChars = $lowercase . $uppercase . $numbers . $specialChars;

//     // Initialize the password variable
//     $password = '';

//     // Generate random characters for the password
//     for ($i = 0; $i < $length; $i++) {
//         $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
//         $password .= $randomChar;
//     }

//     return $password;
// }

// // Generate a password with a length of 12 characters
// $password = generatePassword(12);

// // Print the generated password
// echo "Generated Password: " . $password . "\n";
// ?>