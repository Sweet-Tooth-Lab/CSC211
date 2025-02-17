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
	'Wednesday' => 'Vegetarian',
	'Thursday' => '3D Printed Chunks',
	'Friday' => 'Nuts N Bolts',
	'Saturday' => 'Excessive Soup',
	'Sunday' => 'The Three Course Dinner Soup'
];

// Try to print the array:
print "<p>$soups</p>";

// Print the contents of the array:
print_r($soups);

?>
</body>
</html>