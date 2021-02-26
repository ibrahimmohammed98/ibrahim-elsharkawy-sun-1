<?php

/*3- write a script to display this shape */
/*this for (if $i=1 and check less than 5 then enter to the second for and check if v<=i then print * and increase v by 1 check agian it is not equal
then print <br> and back to first for and make i=2 and check i<=5 then enter to the second fro and check if v<=i then print * and increase v by 1
check agian its equal then print another * then check agian and its not equal then print <br> and back to first for 
and so on until i=6 greater than 5 then get out of the for)
*/
for ($i=1; $i<=5; $i++) {   
    for ($v=1; $v<=$i; $v++) {   
        echo "*";   
    }  
    echo '<br>';   
}
/*this for (if $i=5 and check i greater than 1 then enter to the second for and check if v<=i then print * and increase v by 1 check agian that v<+i then print
another * and check agian until $v not <= $i then print <br> and back to first for and decrease i with 1 and go to
second for to check and print 4 * until $v=5 and $i=4 then out of second for and print <br> 
and so on until i=0 less than 1 then get out of the for */
for ($i=5; $i>=1; $i--) {
    for ($v=1; $v<=$i; $v++) {
        echo "*"; 
    }
    echo '<br>';  
}
echo "<hr>";
/*3- write a script to display this shape */


?>