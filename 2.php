<?php
/* 2 - you have a variable that contains any digit from 0 to 9. write a script to display the   	
      english equivalent of this number. */

/*here i use match because we have:
only one variable ($num) ,
the condition is equality
and the block of code that repeat contain only one variable ($engNumber) */ 
$num=9;  
$engNumber=match($num) {
    0=>'zero', 
    1=>'One',
    2=>'Two',
    3=>'Three',
    4=>'Four',
    5=>'Five',
    6=>'Six',
    7=>'Seven',
    8=>'Eight',
    9=>'Nine',
    default=>'please enter only one digit',
};
echo "digit = $num >>> $engNumber"."<hr>";

/* 2 - you have a variable that contains any digit from 0 to 9. write a script to display the   	
      english equivalent of this number. */
      

?>