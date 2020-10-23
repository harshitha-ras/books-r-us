<?php

if(isset($_POST['btnSignupAction'])){
    require 'dbAction.php';

    $email = $_POST['newEmail']; 
    $username = $_POST['newUsername'];
    $password = $_POST['newPassword'];
    $passwordRepeat = $_POST['retypePassword'];
    $course = $_POST['course'];
    $dept = $_POST['dept'];
    $gradYear = $_POST['gradYear'];
    if(empty($email) || empty($username) || empty($password) || empty($course) || empty($dept)
        || empty($gradYear)){
        header("Location: ../signup.php?error=emptyfields&newEmail=".$email."&newUsername".$username
        ."&password=".$password."&course=".$course."&dept=".$dept."&gradYear=".$gradYear);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-0]*$/", $username)){
        header("Location: ../signup.php?error=invalidmailusername&newEmail=".$email."&newUsername".$username
        ."&password=".$password."&course=".$course."&dept=".$dept."&gradYear=".$gradYear);
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidemail&newEmail=".$email."&newUsername".$username
        ."&password=".$password."&course=".$course."&dept=".$dept."&gradYear=".$gradYear);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-0]*$/", $username)){
        header("Location: ../signup.php?error=invalidusername&newEmail=".$email."&newUsername".$username
        ."&password=".$password."&course=".$course."&dept=".$dept."&gradYear=".$gradYear);
        exit();
    }
    else if($password !== $passwordRepeat){
        header("Location: ../signup.php?error=passwordcheck&newEmail=".$email."&newUsername".$username
        ."&password=".$password."&course=".$course."&dept=".$dept."&gradYear=".$gradYear);
        exit();
    }
    else{
        $sql ="SELECT usernameCol FROM usertable WHERE usernameCol=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../signup.php?error=sqlerrorprepare");
            exit();
        } else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../signup.php?error=usernametaken&newEmail=".$email."&newUsername".$username
                ."&password=".$password."&course=".$course."&dept=".$dept."&gradYear=".$gradYear);
                exit();
            } else{
                //$sql = "INSERT INTO usertable (usernameCol, emailCol, passwordCol) VALUES (?, ?, ?);";
                $hashPwd = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO usertable (usernameCol, emailCol, passwordCol) VALUES ('".$username."','".$email."','".$hashPwd."');";
                //$sql = "select * from usertable;";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    $smth = var_dump($stmt);
                    header("Location: ../signup.php?error=sqlerrorinsert".$smth);
                    exit();
                } else{
                    //$hashPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signupresult=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else{
    header("Location: ../signup.php");
    exit();
}
?>