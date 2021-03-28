<?php 
include("header.html"); 
// no need for input validation here since that is handled with the pattern or signup.php
$user = $_POST["user"];
 $file = "users.txt";

 //txt data storage
 $output = $user . ":0,0,0,0,0,0" ."\n";
 file_put_contents($file, $output, FILE_APPEND);
 ?>

 <div class="landing">
     <center><img src="logo.png" alt="logo" height="75" width="75"></center>

     <h2> Welcome to the Mensa Club</h2>
     <p> So start the game sign in below </p>

     <form action="signin-submit.php" method="post">    
             <label><b>User Name:</b></label>
             <br>
             <br> 
             <input required type="text" id="uname" name="user" size="32" maxlength="32" pattern="([a-zA-Z\s]){2,}">   
             <br>
             <br>
             <a href="signup.html" id="signup">Not on Mensa Club yet? Sign up</a>
             <br>
             <br>
             <br>
             <input class="button" type="submit" value="Sign In">
         </form>  
 </div>
 <?php include("footer.html"); ?>