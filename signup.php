<?php include("header.html"); ?>

<div id="signup">
    <form action="signup-submit.php" method="post"><</form>
    <fieldset>
        <legend> New User Signup: </legend>
        <h1> Username: </h1>

        <input required type="text" name="user" size="32" maxlength="32" pattern="([a-zA-Z\s]){2,}">
        <br>
        <input class="button" type="submit" value="Sign Up">
    </fieldset>
</div>

<?php include("footer.html"); ?>