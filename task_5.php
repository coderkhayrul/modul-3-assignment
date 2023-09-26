<?php
// Function to generate a random password
function generatePassword($length)
{
    // Define character sets for different types of characters
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine character sets
    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    // Initialize the password variable
    $password = '';

    // Generate random characters for the password
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($allChars) - 1);
        $password .= $allChars[$randomIndex];
    }

    return $password;
}

// Generate a password with a length of 12 characters
$generatedPassword = generatePassword(12);

// Print the generated password
echo "Generated Password: " . $generatedPassword;
