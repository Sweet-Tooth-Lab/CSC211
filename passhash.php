<?php

$password = "helloclass";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo  $hashed_password;

// Can you think of how to use this as a password verification?
/* This can be used for password validation as the password gets encrypted before sending
than it can be compaired to the recorded encrypted password in the website server to see if
they are an exact match of eachother without the plain text getting exposed.*/

?>