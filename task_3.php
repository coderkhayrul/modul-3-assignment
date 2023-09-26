<?php
// Define the array
$grades = [85, 92, 78, 88, 95];

// Function to sort the array in descending order
function sortGradesDescending($inputArray)
{
    arsort($inputArray);

    // Print the sorted grades as an array
    print_r($inputArray);
}

// Call the function passing the argument
sortGradesDescending($grades);
