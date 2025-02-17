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

// Print each key and value:
foreach ($soups as $day => $soup)
{
	print "<p>$day: $soup</p>\n";
}

?>
</body>
</html>