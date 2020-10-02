<?php

if(isset($_POST['btnSignup'])){
    require 'dbh.php';

    $username = $_POST['email'];
    $password = $POST['password'];
    if(empty($username) || empty($password)){
        header("Location: ../signup.php?error=emptyfields&".$username);
    }

}
?>