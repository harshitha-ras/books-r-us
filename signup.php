<?php
    require "login.html";
?>

<main>
    <h1>Signup</h1>
    <form action ="signup.inc.php" method="post">
        Email:<input type="text" name="newEmail">
        Password:<input type="text" name="newPassword">
        Retype Password:<input type="text" name="retypePassword">
        <button type="submit" name="btnSignup">Signup</button>
    </form>
</main>