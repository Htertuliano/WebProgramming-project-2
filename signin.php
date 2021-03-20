<?php include("header.html"); ?>

<div id="signin">
    <form action="signin-submit.php" method="post">
        <fieldset>
            <legend> Sign In: </legend>
            <h1> Username: </h1>

            <input required type="text" name="user" size="32" maxlength="32" pattern="([a-zA-Z\s]){2,}">
            <br>
            <input class="button" type="submit" value="Sign Up">
        </fieldset>
    </form>
</div>

<?php include("footer.html"); ?>