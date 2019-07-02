<?php

function simpleFunction(){
    echo "Hello World"."<br>";
}

simpleFunction();


function sayHello($name){

    echo "Hi $name<br>";
}
sayHello('Donald');
sayHello('Mickey');

function addNumbers($num1, $num2){
 return $num1 + $num2;
}
echo addNumbers(5,3);

echo '<br>';


$myNum = 10;
$anyNum = 3015;
function addFive($num){
  //$num = $num + 5;
    $num +=5;
}

function addTen(&$num){
    //$num = $num + 10;
     $num +=10;
}
  
addFive($anyNum);
echo "Value: $anyNum<br>";
echo addTen($myNum);
echo "Value: $myNum<br>";
