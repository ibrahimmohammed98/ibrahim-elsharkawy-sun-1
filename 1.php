<?php
/* 	1 - you have an array of numbers. write a script to find minimum and maximum numbers in the array. */

$numbers=[5,33,-6,8,9,20,70,2,122,10];
$min = $numbers[0];  
$max = $numbers[0];  
foreach ($numbers as $value) {  
    if ($value < $min) {  
        $min = $value;  
    }  
    if ($value > $max) {  
        $max = $value;  
    }  
}
echo $min;
echo "<br>";
echo $max;
echo "<hr>";
//another way using built-in functions (min-max)
echo min($numbers) . "<br>"; //min is a used to get minimum number in array
echo max($numbers) . "<hr>"; //max is a used to get maximum number in array

/* 	1 - you have an array of numbers. write a script to find minimum and maximum numbers in the array. */


?>