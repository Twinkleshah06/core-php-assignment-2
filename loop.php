<?php
//--------- For Loop: Write a script that displays numbers from 1 to 10 on a single line  ----------

for($i == 0; $i<=10; $i++){
    echo $i . " ";

}

// ---------  For Loop (Addition): Add all integers from 0 to 30 and display the total.  ----------

$total = 0;
for($i = 0; $i <= 30; $i++){
    $total += $i;
}
echo 'Total of all integers from 0 to 30 is ' . $total;

?>