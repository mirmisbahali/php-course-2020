<?php

// What is a variable

// Variable types


// Declare variables
$name = 'Zura';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;
// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';

echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable

// Change the value of the variable

// Print type of the variable

// Variable checking functions
is_string($name);
is_int($age);
is_bool($isMale);
is_double($height);
// Check if variable is defined
isset($name); // true
isset($address) // false
// Constants

// Using PHP built-in constants
