<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.2 - handle_post.php
/* This script recieves five values from posting.html:
first_name, last_name, email, posting, submit*/

// Get the values from the $_POST array:
$_first_name = $_POST['first_name'];
$_last_name = $_POST['last_name'];
$_posting = $_POST['posting'];

// Create a full name variable:
$_name = $_first_name . ' ' . $_last_name;

// Get a word count:
$_words = str_word_count($_posting);

// Get a snippet of the posting:
$_posting = substr($_posting, 0 ,50);

// Print a message:
print "<div>Thank you, $_name, for your Posting:
<p>$_posting...</p>
<p>($_words words)</p></div>";

?>
</body>
</html>