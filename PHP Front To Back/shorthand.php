<?php

$loggedIn = false;

if($loggedIn){
    echo 'You are logged in';
}else{
    echo 'Your are NOT logged in';
}

echo '<br>';

//Ternary
echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';
$isRegistered = ($loggedIn == true) ? true : false;

echo '<br>';
echo $isRegistered;
echo '<br>';




//another Ternanry
$age = 17;
$score = 10;

echo 'Your score is:' .($score > 10 ? ($age >10 ? 'Average': 'Exeptional'):($age >10 ? 'Horribble': 'You can do better'));