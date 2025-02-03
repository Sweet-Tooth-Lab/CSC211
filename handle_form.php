<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Feedback</title>
</head>
<body>
<pre>
<?php // Script 3.3 - handle_form.php

ini_set('display_errors', 1); // Let me learn from my mistakes!

// This page receives the data from feedback.html.
// It will receive: title, first name, last name, email, response, comments, and submit in $_POST. 

// Create shorthand versions of the variables:
$_title = $_POST['title'];
$_first_name = $_POST['first_name'];
$_last_name = $_POST['last_name'];
$_response = $_POST['response'];
$_comments = $_POST['comments'];

print "<p>Thank you, $_title $_first_name $_last_name, for your comments.</p>
<p>You have stated that you found this example to be '$_response' and added:<br>$_comments</p>";

?>
</pre>
</body>
</html>