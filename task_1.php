<?php

// Define the string variable
$text = "The quick brown fox jumps over the lazy dog.";

// Function to modify the text
function modifyText($inputText)
{
    // Convert to all lowercase
    $lowercaseText = strtolower($inputText);

    // Replace "brown" with "red" in the string
    $modifiedText = str_replace("brown", "red", $lowercaseText);

    echo $modifiedText;
}

// Call the function passing the argument
modifyText($text);
