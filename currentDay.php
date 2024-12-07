<?php
$currentDay = date('l');
if($currentDay == 'sunday'){
    echo 'Happy Sunday';
} else {
    echo 'Today is ' . $currentDay;
}