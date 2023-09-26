<?php
// Define the multidimensional array with student grades
$studentGrades = [
    ['Math' => 85, 'English' => 92, 'Science' => 78],
    ['Math' => 88, 'English' => 95, 'Science' => 90],
    ['Math' => 75, 'English' => 86, 'Science' => 89],
];

// Function to calculate the average grade for each student
function calculateAverageGrades($gradesArray)
{
    foreach ($gradesArray as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;

        echo "Student " . ($student + 1) . " - Average Grade: " . $average . "\n";
    }
}

// Call the function passing the argument
calculateAverageGrades($studentGrades);
