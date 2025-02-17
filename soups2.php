<!doctype html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm... soups</h1>
<?php // Script 7.1 - soups1.php
// This script creates and prints out an array

// Error handling addressed =D
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create the array:
$soups =
[
	'Monday' => 'Clam Chowder',
	'Tuesday' => 'White Chicken',
	'Wednesday' => 'Vegetarian'
];

// Count and print the current number of elements:
$count1 = count($soups);
print "<p>The soups array originally had $count1 elements.</p>";

// Add four items to the array
$soups['Thursday'] = '3D Printed Chunks';
$soups['Friday'] = 'Nuts N Bolts';
$soups['Saturday'] = 'Excessively Viscous Soup';
$soups['Sunday'] = 'The Three Course Dinner Soup';

// Count and print the number of elements again:
$count2 = count($soups);
print "<p>After adding 4 more soups, the array now has $count2 elements.</p>";

// Print the contents of the array:
print_r($soups);

?>
</body>
</html>