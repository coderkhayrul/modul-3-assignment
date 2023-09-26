<?php
// Define the array
$numbers = range(1, 10);

// Function to remove even numbers from the array
function removeEvenNumbers($inputArray)
{
    // Use array_filter to keep only odd numbers
    $filteredArray = array_filter($inputArray, function ($value) {
        return $value % 2 != 0;
    });

    // Print the  array
    print_r($filteredArray);
}

// Call the function passing the argument
removeEvenNumbers($numbers);
