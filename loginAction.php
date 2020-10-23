<?php //"or 1=1 --"
    if(isset($_POST['btnLogin'])){
        require 'dbAction.php';
        $username = $_POST['emailLogin'];
        $password = $_POST['passwordLogin'];
        if(empty($username || empty($password))){
            header("Location: ../index.php?error=emptyfields&emailLogin=".$username."&passwordLogin=".$password);
            exit();
        } else{
            $sql = "SELECT * FROM usertable WHERE usernameCol=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){ //checks if connection ran
                header("Location: ../index.php?error=sqlerror");
                exit();
            } else{
                mysqli_stmt_bind_param($stmt, "s", $username); //pass parameters from users from login data to db to see if we can get a result from the sql stmt. ss means 2 strings
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);
                if(!empty($row)){ //check if we have a result
                    $passwordCheck = password_verify($password, $row['passwordCol']); //hash's user password, compares with password in DB
                    if($passwordCheck == false){
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    } else if($passwordCheck==true){
                        session_start();
                        $_SESSION['userID'] = $row['idCol'];
                        $_SESSION['usernameID'] = $row['usernameCol'];
                        header("Location: ../index.php?loginresult=success");
                        exit();
                    } else{
                        header("Location: ../index.php?error=wrongpassword");
                        exit();
                    }
                } else{
                    header("Location: ../index.php?error=nouser");
                    exit();
                }
            }
        }
    } else{
        header("Location: ../index.php");
        exit();
    }
?>