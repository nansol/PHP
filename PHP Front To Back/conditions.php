<?php
#Conditionals 
/*
 == equal value, no datatype
 === equal value, also datatype
 > value is more
 < value is less 
 >= value is more or equal
 <= value is less or equal
 !=  value is not equal
 !== value is not equal, not the same datatype
*/

$num = 5;

if($num == 5){
    echo '5 is equal';
} elseif($num == 6){
    echo '6 is equal';
}else{
   echo 'not equal';
}
echo '<br>';

/*
#Logical Operators
and &&
or ||
*/

$a = 5;
if($a >4 || $a < 10){
    echo "$a passed";
}

echo '<br>';
#Switch
$favColor = 'red';

switch($favColor){
    case 'red':
        echo "Red is not my favorite color";
        break;
    case 'blue':
        echo "Blue is not my favorite color";
        break;  
    case 'green':
        echo "Correct green is my favorite color";
        break; 
    default:
        echo "Choose the color";    
}