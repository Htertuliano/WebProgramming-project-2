<?php 
include("header.html"); 

$user = $_POST["user"];
$file = "./users.txt";

if(strpos(file_get_contents($file),$user) !== false) {
    setcookie("user", "", time() - 3600);
    setcookie("user", $user);

?>

<div class="landing">
<?php
    echo "<h2> Welcome to the game " . $user. " </h2>";
?>
    <p style="color:black;"> If you are ready to play click the logo above to go to the home page </p>
</div>
<?php
}
else {
?>
<div class="landing">
    <center><img src="logo.png" alt="logo" height="75" width="75"></center>

    <h2> ERROR! </h2>
    <p style="color:black;"> Username not found </p>
    <p style="color:black;"> Insert signin button </p>

<div>
<?php
}
include("footer.html")
?>