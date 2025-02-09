<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.4 - handle_post.php
/* This script recieves five values from posting.html:
first_name, last_name, email, posting, submit*/

// Get the values from the $_POST array:
$_first_name = $_POST['first_name'];
$_last_name = $_POST['last_name'];
$_posting = nl2br($_POST['posting'], false);

// Create a full name variable:
$_name = $_first_name . ' ' . $_last_name;

// Adjust for HTML tags:
$html_post = htmlentities($_POST['posting']);
$strip_post = strip_tags($_POST['posting']);

// Print a message:
print "<div>Thank you, $_name, for your Posting:
<p>Original: $_posting</p>
<p>Entity: $html_post</p>
<p>Stripped: $strip_post</p></div>";

?>
</body>
</html>