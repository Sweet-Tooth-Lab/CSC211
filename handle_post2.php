<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting2</title>
</head>
<body>
<?php // Script 5.2 - handle_post2.php
/* This script recieves five values from posting.html:
first_name, last_name, email, posting, submit*/

// Get the values from the $_POST array:
$_first_name = $_POST['first_name'];
$_last_name = $_POST['last_name'];
$_posting = nl2br($_POST['posting'], false);

// Create a full name variable:
$_name = $_first_name . ' ' . $_last_name;

// Print a message:
print "<div>Thank you, $_name, for your Posting
<p>$_posting</p></div>";

?>
</body>
</html>