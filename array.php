<?php
// ------------  Display the value of an array  --------------
 $fruits_arr = ["Apple", "Banana", "Orange", "Mango"];

 foreach($fruits_arr as $fruit){
    echo $fruit . "\n";
 }

//  ----------  Find and display the number of odd and even elements in an array  -----------

$number_arr = [1,2,3,4,5,6,7,8,9,10,19,21,66,78,15,36,51,97];
$odd_count = 0;
$even_count = 0;

foreach($number_arr as $number){
    if($number % 2 == 0){
        $even_count++;
    } else{
        $odd_count++;
    }
}

echo "Total even elements are : " . $even_count;
echo "Total odd elements are : " . $odd_count;


// -----------  Create an associative array for user details (name, email, age) and display them.  --------------
$user_details = ["name" => "Smita shah", "email" => "smita@gmail.com", "age" => 23 ];

 echo "Name : " .$user_details["name"] . "\n";
 echo "Email : " .$user_details["email"] . "\n";
 echo "Age : " .$user_details["age"] . "\n";


//  ----------  Write a script to shift all zero values to the bottom of an array.  ----------

$all_num_arr = [8,5,74,0,60,0,0,12,0,3,0];

$nonzero_num = [];
$zero_num = [];

foreach($all_num_arr as $individual_num){
    if($individual_num != 0){
        $nonzero_num[] = $individual_num;
    } else{
        $zero_num[] = $individual_num;
    }
}

echo $result_arr = array_merge($nonzero_num, $zero_num);
echo "Final Array " . implode( ", " , $result_arr);

?>