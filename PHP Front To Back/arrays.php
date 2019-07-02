<?php 
#Array - Variable that holds multiple values
/*
Indexed
Associative
Multi-dimensional
*/

//Indexed
$people = ['Kevin', 'Jeremy', 'Sarah'];
$ids = [1, 2, 3, 4, ];
$cars = ['Honda', 'Toyota'];
$cars[] = 'Mazda';

//print second value in array
echo $people[1];

echo '<br>';

//count values in arrays

echo count($cars);

echo '<br>';

//print out whole array
print_r($cars);

echo '<br>';

//print out whole array with datatypes
var_dump($cars);

echo '<br>';

//Associative arrays
$listOfPeople = ['Kevin' => 35, 'Jeremy' => 16, 'Sarah' => 10];
$listOfIds = [1 => 'Kevin', 2 => 'Jeremy', 3 => 'Sarah'];

$listOfPeople['Jill'] = 34;
$listOfIds[4]= 'Jill';

echo $listOfPeople['Jill'];
echo '<br>';

print_r($listOfPeople);
echo '<br>';
print_r($listOfIds);

echo '<br>';

var_dump($listOfPeople);
echo '<br>';
var_dump($listOfIds);


//Multi-Dimensional

$listOfCars = array(
    array('Honda',1989, 350),
    array('Toyota', 2019, 3),
    array('Nissan', 1995, 300),
    array('Mazda', 2000, 340),
    array('Mitsubishi', 1970, 500)
);

echo '<br>';

echo $listOfCars[3][0];