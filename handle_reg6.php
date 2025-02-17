<!doctype html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<style type="text/css"
	media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Registration Results</h1>
<?php // Script 6.2 - handle_reg.php
/* This script receives seven values from register.html:
email, password, confirm, year, terms, color, submit */

// Error handling addressed =D
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Flag to track success:
$okay = true;

// validate the email address:
if (empty($_POST['email']))
{
	print '<p class="error">Please enter your email address</p>';
	$okay = false;
}

// validate the password:
if (empty($_POST['password']))
{
	print '<p class="error">Please enter your password</p>';
	$okay = false;
}

// validate the two passwords for equality:
if ($_POST['password'] != $_POST['confirm'])
{
	print '<p class="error">Your confirmed password does not match the origanal password.</p>';
	$okay = false;
}

// validate the year:
if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) )
{
	// check that they were born before the current year:
	if ($_POST['year'] < 2025)
	{
	$age = 2025 - $_POST['year'];
	}
	else
	{
		print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
		$okay = false;
	}
}
else // for the 1st conditional
{
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = false;
}

// Validate the terms:
if ( !isset($_POST['terms']))
{
	print '<p class="error">You must accept the terms.</p>';
	$okay = false;
}

// Validate the color:
if ($_POST['color'] == 'red')
{
	$color_type = 'primary';
}
else if ($_POST['color'] == 'yellow')
{
	$color_type = 'primary';
}
else if ($_POST['color'] == 'green')
{
	$color_type = 'secondary';
}
else if ($_POST['color'] == 'blue')
{
	$color_type = 'primary';
}
else if ($_POST['color'] == 'purple')
{
	$color_type = 'secondary';
}
else if ($_POST['color'] == 'pink')
{
	$color_type = 'secondary';
}
else
{
	print '<p class="error">Please select your favorite color.</p>';
	$okay = false;
}

// If there were no errors, print a success message:
if ($okay)
{
	print '<p>You have been registered (but not really).</p>';
	print "<p>You will turn $age this year.</p>";
	print "<p>Your favorite color is a $color_type color.</p>";
}
?>
</body>
</html>