<?php
/*5-write a script that removes any duplicates from an array. */

$myArr = [0,7,0,1,5,8,1,8,9];
$arr = [];
/*the first roll for the foreach $value=0 then enter to second foreach and its loops the empty #arr then it out
from second foreach and put 0 in $arr then back to the first foreach and now $value=7; then enter to second foreach
and now $arr=[0] it has a value inside, then go to if(0==7) no? then put 7 in $arr then back to the first foreach and now $value=0; again
then go to second foreach it have now $arr=[0,7]; , if(0==0) yes? the continue 2 which used to exit from the second foreach only and back to first foreach and so on*/
foreach($myArr as $value) { 
    foreach($arr as $data) {
        if($value == $data) {
            continue 2;
            /*continue 2 used to exit from the second foreach only and back to first for each without
            put value in $arr because if we use break it will stop the all process */
        }
    }
    $arr[] = $value;
}
print_r($arr);
echo "<hr>";

/* another solution using bult-in functions */
$players = array('cr7','messi','cr7','salah','ramos','kroos','messi');
var_dump($players);
echo "<br>";
$players = array_unique($players); //array_unique used to removes any duplicates from an array
$players = array_values($players); //array_values used to fix index of array after using array_unique which removes any duplicates element with its own index 
var_dump($players);
echo "<hr>";
/*5-write a script that removes any duplicates from an array. */
?>