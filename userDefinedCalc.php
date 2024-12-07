<?php
// -------------  Create a calculator using user-defined functions  -------------
// 1. Create a function to add two numbers
function addition($num1, $num2) {
    return $num1 + $num2;
}

function subtraction($num1, $num2){
    return $num1 - $num2;
}

function multiplication($num1, $num2){
    return $num1 * $num2;
}

function division($num1, $num2){
    if ($num2 == 0) {
        return "Division by zero is not allowed.";
    }
    return $num1 / $num2;
}

$operation = readline("Enter operation (+, -, *, /): ");
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");

$result = null;

switch ($operation) {
    case '+':
        $result = addition($num1, $num2);
        break;
    case '-':
        $result = subtraction($num1, $num2);
        break;
    case '*':
        $result = multiplication($num1, $num2);
        break;
    case '/':
        $result = division($num1, $num2);
        break;
    default:
        echo "Invalid operation selected.\n";
        exit;
}

echo "The result of $num1 $operation $num2 is: $result\n";


?>