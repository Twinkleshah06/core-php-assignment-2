<?php
// ---------  Write a script to perform various string operations like concatenation, substringextraction, and string length determination.  ----------------


// concatenation
$str1 = "Hello";
$str2 = "World";
$concatenated_str = $str1 . $str2;

echo "Concatenated String is :  " . $concatenated_str . "\n";


// substringextraction
$str3 = "Welcome to the PHP Website!!";
$substring = substr($str3, 10, 5);

echo "Extracted substring is : " . $substring . "\n";

// string length
$str4 = readline("Enter the srting");
$str_len = strlen($str4);
echo "the length of string is " . $str_len . "\n";

?>