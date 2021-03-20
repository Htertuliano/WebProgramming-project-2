<?php 
include("header.html"); 

$user = $_POST["user"];
$file = "users.txt";

if(strpos(file_get_contents($file),$user)) {
    setcookie("user", $user);
    echo "<h1> Welcome to the game" . $_COOKIE["user"] . " </h1>";
?>
<p> If you are ready to play select a dificulty </p>
<p> Insert image difculties below <p>

<?php
}
else {
?>

<h1> ERROR! </h1>
<p> Username not found </p>
<p> Insert signin button </p>

<?php
}
include("footer.html")
?>