<?php 
include("header.html"); 

$user = $_POST["user"];
$file = "./users.txt";

if(strpos(file_get_contents($file),$user) !== false) {
    setcookie("user", $user);

?>

<div class="landing">
<?php
    echo "<h2> Welcome to the game " . $_COOKIE["user"] . " </h2>";
?>
    <p> If you are ready to play select a dificulty </p>
    <p> Insert image difculties below <p>
</div>
<?php
}
else {
?>
<div class="landing">
    <center><img src="logo.png" alt="logo" height="75" width="75"></center>

    <h2> ERROR! </h2>
    <p style="color:white;"> Username not found </p>
    <p style="color:white;"> Insert signin button </p>

<div>
<?php
}
include("footer.html")
?>