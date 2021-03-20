<?php 
include("header.html"); 
// no need for input validation here since that is handled with the pattern or signup.php
$user = $_POST["user"];
$file = "users.txt";

//txt data storage
$output = $user . "," . array(0)."\n";
file_put_contents($file, $output, FILE_APPEND);
?>

<h1> Welcome to Insert Game Name Here </h1>
<p> So start the game sign in </p>

<p> put a signin button here to go to the signin page </p>

<?php include("footer.html"); ?>