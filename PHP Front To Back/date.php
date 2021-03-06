<?php

echo date('d'); //Day
echo '<br>';
echo date('m'); //Month
echo '<br>';
echo date('Y'); //Year
echo '<br>';
echo date('l'); //Day of the week
echo '<br>';
echo date('d.m.Y'); //Today date
echo '<br>';

echo date('m-d-Y'); //Today date

echo date('h'); //Hour
echo '<br>';
echo date('i'); //Minutes
echo '<br>';
echo date('s'); //Seconds
echo '<br>';
echo date('a'); //AM or PM
echo '<br>';

//Set timezone
date_default_timezone_set('Europe/Prague');
echo date('h:i:s a'); //Current time

echo '<br>';

//Timestamps

$timestamp = mktime(6,30,00,1,1,2000);
echo $timestamp;
echo '<br>';
echo date('m-d-Y h:i:s-a', $timestamp); 

echo '<br>';

$timestamp2 = strtotime('6:30am January 1 2000');
echo '<br>';
echo $timestamp2;
echo '<br>';
echo date('m-d-Y h:i:s-a', $timestamp2); 

echo '<br>';
$timestamp3 = strtotime('tomorrow');
echo date('m-d-Y h:i:s-a', $timestamp3); 

echo '<br>';
$timestamp4 = strtotime('next Sunday');
echo date('m-d-Y h:i:s-a', $timestamp4); 

echo '<br>';
$timestamp5 = strtotime('+2 Months');
echo date('m-d-Y h:i:s-a', $timestamp5); 