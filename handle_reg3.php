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

// validate the birth year:
if (is_numeric($_POST['year']))
{
	$age = 2025 - $_POST['year'];
}
else
{
	print '<p class="error">Please enter the year you were born as four digits.</p>';
	$okay = false;
}

// If there were no errors, print a success message:
if ($okay)
{
	print '<p>You have been registered (but not really).</p>';
	print '<p>You will turn $age this year.</p>';
}
?>
</body>
</html>
