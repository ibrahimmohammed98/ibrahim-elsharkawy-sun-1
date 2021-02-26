<?php
/* 7-trace the code & discuss of each statement of value of x and y */
$x = 3 ;
$y=$x++;
$y+= ++$x;
/*$x=3;
$y=x++;
    $y=3; $x=4; // because x++ return its value then increment the value of x by 1
$y+=++$x; 
    $y=$y+(++$x); // ++x increment the value of x by 1 , x will be 5 then return its value
    (so here $x increase to 5 first then return its value)
    $y=3+(5)
    $x=5; $y=8;
*/
if ($y == 7) {
 	$x++;
 	echo $x ."<br>";
} else if ($y == 8){ //so when $y==8 then decrament 1 from $x 
 	$x--; //(and if we echo $x-- it well be ((5)) beacease it return then decrament)
 	echo $x ."<hr>"; // so $x well be ((4)) after decrementation process  
} else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
} else { 
	$x= 0;
    echo $x ."<br>";
}
// so the result is $y=8; and $x=4;
/* 7-trace the code & discuss of each statement of value of x and y */


?>