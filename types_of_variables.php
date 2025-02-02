<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Types of PHP Variables</title>
</head>
<body>
<pre>
<?php // Script 2.1 - predefined.php

// Setting up line breaks
const BR = '<br />';

// Uploading this as a file to github as well

//Two examples of Integer Variables
$_first_integer = -1;
$_second_integer = 1;
print $_first_integer;
print BR;
print $_second_integer;
print BR;

//Two examples of String Variables
$_first_string = "He1l0";
$_second_string = "W0r1d!! =D";
print $_first_string;
print BR;
print $_second_string;
print BR;

//Two examples of Array Variables

// Using array index as key variable name
// the variable key name also represents the distance from the sun
$_planet_array = array(0 => 'Sun',
					   1 => 'Mercury',
					   2 => 'Venus',
					   3 => 'Earth',
					   4 => 'Mars',
					   5 => 'Jupiter',
					   6 => 'Saturn',
					   7 => 'Uranus',
					   8 => 'Neptune'
					   );

// The key variable for the month array is the numeric value of each month in order

$_month_array = array(1 => 'January',
					  2 => 'February',
					  3 => 'March',
					  4 => 'April',
					  5 => 'May',
					  6 => 'June',
					  7 => 'July',
					  8 => 'August',
					  9 => 'September',
					  10 => 'October',
					  11 => 'November',
					  12 => 'December'
					  );

print_r($_planet_array);
print_r($_month_array);

?>
</pre>
</body>
</html>