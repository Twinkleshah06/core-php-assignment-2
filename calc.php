<?php
$number1 = readline('Enter 1st number');
$number2 = readline('Enter 2nd number');
$operation = readline('Enter which type of operation you want to do, like +, -, * or /');

if($operation == '+'){
    echo 'Result is : '. $number1 + $number2;
} elseif($operation == '-'){
    echo 'Result is : '. $number1 - $number2;
} elseif($operation == '*'){
    echo 'Result is : '. $number1 * $number2;
} elseif($operation == '/'){
    if($number2 != 0){
        echo 'Result is : '. $number1 / $number2;
    } else{
        echo "Division by 0 is not allowed.";
    }
} else{
    echo "Invalid operation";
}




?>