<?php

# substr()
# Return a portion of a string

$output = substr('Arrivederci', 1, 3);
$hello = substr('Hello', -2);

echo $output;
echo '<br>';
echo $hello ;
echo '<br>';

# strlen()
# Returns the length of a string

$output = strlen('Arrivederci');
echo $output;
echo '<br>';

# strpos()
# Finds the position of the first occurence of a sub string

$output = strpos('Arrivederci', 'c');
echo $output;
echo '<br>';

# trim()
# Strips whitespace

$output = 'Arrivederci        ';
var_dump($output);
echo '<br>';

$trimmed = trim($output);
var_dump($trimmed);
echo '<br>';

# strtoupper()
# Makes everything uppercase

$output = strtoupper('Arrivederci');
echo $output;
echo '<br>';

# strtolower()
# Makes everything lowecase

$output = strtolower('Arrivederci');
echo $output;
echo '<br>';

# ucwords()
# Capitalize every word

$output = ucwords('a b c');
echo $output;
echo '<br>';

# str_replace()
# Replace all occurences of a search string with a replacement

$greeting = 'Hello World';
$output = str_replace('World', 'Everyone', $greeting);
echo $output;
echo '<br>';

# is_string()
# Check if string

$greeting = 'Hello World';
$output = is_string($greeting);
echo $output;
echo '<br>';









