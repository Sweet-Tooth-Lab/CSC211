<!doctype html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
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

// If there were no errors, print a success message:
if ($okay) {
	print '<p>You have been registered (but not really).</p>';
}
?>
</body>
</html>