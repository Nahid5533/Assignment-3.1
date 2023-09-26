<?php

$studentGrades = [
    ["Math" => 87, "English" => 82, "Science" => 78],
    ["Math" => 89, "English" => 81, "Science" => 80],
    ["Math" => 97, "English" => 83, "Science" => 91]
];

// Function to calculate and print average grades for each student
function  calculateGrades($studentGrades){


    foreach ($studentGrades as $student) {
        $total = array_sum($student);
        $average = $total / count($student);
        echo "Average grade for each student: " . $average . "\n";
    }
}

// Call the function to calculate and print average grades
calculateGrades($studentGrades);
?>