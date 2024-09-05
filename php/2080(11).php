<?php
// Function to concatenate two strings
function concatenateStrings($string1, $string2) {
    // Concatenate the two strings
    $result = $string1 . " " . $string2;

    // Print the concatenated string
    echo "Concatenated String: " . $result;
}

// Example usage of the function
$string1 = "Hello";
$string2 = "World";

concatenateStrings($string1, $string2);
?>
