<?php

$foodCategory = readline("Enter the food category. eg, 1 for starter, 2 for main course, 3 for dessert");

switch($foodCategory){
    case 1: echo "Category : Starter. ";
            echo "Dish : Manchow Soup";
            break;
    
    case 2: echo "Category : Main Course. ";
            echo "Dish : Kadai Paneer with roti";
            break;
        
    case 3: echo "Category : Dessert. ";
            echo "Dish : Chocolate cake";
            break;

            default : echo "Invalid selection";
}


?>