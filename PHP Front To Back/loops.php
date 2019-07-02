<?php


#Loops - Execute code set number of times
/*
For
While
Do..While
Foreach
*/

#For Loop
#@params - init, condition, increment

for ($i = 0; $i <= 10; $i += 2) {
    echo 'Number ' . $i;
    echo '<br>';
};

echo '<br>';

#While Loop
#params = condition
$i  = 0;
while ($i < 10) {
    echo $i;
    echo '<br>';
    $i++;
}

echo '<br>';

$i  = 0;
while ($i <= 10) {
    echo 'Odd Numbers ' . $i;
    echo '<br>';
    $i += 2;
}

echo '<br>';

$i = 0;
while ($i <= 10) {
    echo 'Multiples of three ' . $i;
    echo '<br>';
    $i += 3;
}

echo '<br>';

$i = 1;
while ($i <= 10) {
    echo 'Even Numbers ' . $i;
    echo '<br>';
    $i+=2;
}
echo '<br>';

#Do...While Loop
#params = condition

$i = 0;
do{
   echo $i;
   echo '<br>';
   $i++;
}
while($i<=10);

echo '<br>';

#Foreach Loop - for arrays
$people = ['Kevin', 'Jeremy', 'Sarah'];
foreach($people as $person){
    echo $person . '<br>';
}

echo '<br>';

$emailOfPeople = ['Kevin' => 'kevin@gmail.com', 'Jeremy' =>'jeremy@hotmail.com', 'Sarah' => 'sarah@yahoo.com'];
foreach($emailOfPeople as $key=>$value){
    echo $key .' : ' .$value .'<br>';
}






