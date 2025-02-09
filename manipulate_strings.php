<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Manipulate Strings =D</title>
</head>
<body>
<?php 

$_words_example="<p>This is a large block of text that is also unnecessarily big and humongous, 
such that if given any more descriptions, it could start looking like a run-on sentence! 
Thank goodness it isn’t though, as that would be extremely silly indeed, because ~imagine~
that this WHOLE paragraph of a sentence was written for the entire purpose of what I had just
clearly stated as the opposite of what it would be in that completely fake and hypothetical
scenario. Thank goodness that isn’t the case because otherwise I’d have to go back and edit
this to be factually correct and that would take more than 3 minutes of effort, 3 minutes more
than I’m willing to spend on fixing it.</p>";

echo $_words_example;

$_word_count = str_word_count($_words_example);
print "word count: $_word_count";

$_es2threes = str_replace("e","3","$_words_example");
print "<br><br>Every 'e' has been replaced with '3': $_es2threes";

// have an extra one for fun! =D
print "There's half of it gone now:<br><br>";
print substr("$_es2threes", (strlen("$_es2threes")/2));

?>
</body>
</html>