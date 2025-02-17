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

/*	The "isset()" function checks to see if the object has any value
	at all, including 0, False and empty string. If it finds anything
	then it returns true, otherwise it returns False.
	
	The "empty()" function checks to see if the argumented object has
	either no value, 0 or False; if it does it returns True, otherwise
	it returns false.
	
	The "is_numeric()" function returns True if the argumented object is
	a valid integer, decimal or string*; otherwise returning False.
			*(if the string is either valid integer/decimal)		*/

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

// If there were no errors, print a success message:
if ($okay)
{
	print '<p>You have been registered (but not really).</p>';
}
?>
</body>
</html>