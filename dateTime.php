<?php
// -----------  Write a script to display the current date and time in different formats.  -----------

echo "Current date and time (y-m-d h:i:s) " . date("y-m-d h:i:s"). "\n";

echo "Current Date (y/m/d): " . date('Y/m/d')."\n";

echo "Current Date (d/m/Y): " . date("d/m/Y") . "\n";

echo "Current Time (h:i A): " . date("h:i A") . "\n";

echo "Day of the Week: " . date("l") . "\n";

echo "Month Name: " . date("F") . "\n";

// Prints something like (May 4, 2022, 7:13 pm)
echo date("F j, Y, g:i a")."\n";

//Prints something like (05.04.22)
echo date("m.d.y")."\n";

//Prints something like (05,4,2001)
echo date("j,n,Y")."\n";
?>