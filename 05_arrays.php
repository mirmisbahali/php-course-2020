<?php

// Create array
$fruits = ['Banana', 'Apple', 'Orange'];
// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>'; 
// Get element by index
echo $fruits[2].'<br>';
// Set element by index
$fruits[0] = 'Mango';
echo '<pre>';
var_dump($fruits);
echo '</pre>'; 
// Check if array has element at index 2
isset($fruits[5]);
// Append element
$fruits[] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>'; 
// Print the length of the array
echo count($fruits).'<br>';
// Add element at the end of the array
array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>'; 
// Remove element from the end of the array
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>'; 
// Add element at the beginning of the array
array_unshift($fruits, 'first element');
echo '<pre>';
var_dump($fruits);
echo '</pre>'; 
// Remove element from the beginning of the array
array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>'; 
// Split the string into an array
$string = "Hello, world";
echo '<pre>';
var_dump(explode(',', $string));
echo '</pre>'; 
// Combine array elements into string

echo implode('&', $fruits);

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays