<!doctype html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<title>Deleting & Merging Arrays</title>
</head>
<body>
<h1>This file was made for the "Deleting & Merging Arrays" assignmemt</h1>
<?php // Script 7.1 - soups1.php

// My favorite numbers on a D20 listed by Most to least favorite
$list =
[
	20,
	1,
	19,
	18,
	17,
	16,
	15,
	14,
	13,
	12,
	11,
	10,
	9,
	8,
	7,
	6,
	5,
	4,
	3,
	2
];

// Qualities of an orange in no paticular order
$orange =
[
	'Fruit',
	'Spherical',
	'Grows on trees',
	'Came before the color "Orange" ironically'
];

// printing both lists
print_r($list);
print "<br><br>";
print_r($orange);
print "<br><br>";

// Modifing the arrays

unset($list[3]);

$apple = array_merge($list, $orange);

// Print "$apple"

print_r($apple);

?>
</body>
</html>