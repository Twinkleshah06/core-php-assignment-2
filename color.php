<?php

$color = readline('Enter color : ');
$color = strtolower($color);

switch($color){
    case "red" : 
        echo "You choose Red color";
    break;

    case "green" : 
        echo "You choose Green color";
    break;

    case "blue" :
        echo "You choose Blue color";
        break;

        default : echo "Invalid color";
}




?>