<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="./navbar.css">
    <script src="https://kit.fontawesome.com/486ebc0d41.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    require "navbar.php";
    ?>
    <br>
    <div class="box" style="border: 15px solid #9575CD">
        <center>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error']=="emptyfields"){
                        echo '<p class="signuperror">Fill in all fields!';
                    } else if($_GET['error'] == "invalidmailusername"){
                        echo '<p class="signuperror">Invalid username and email!</p>';
                    }else if($_GET['error'] == "invalidemail"){
                        echo '<p class="signuperror">Invalid email!</p>';
                    }else if($_GET['error'] == "invalidusername"){
                        echo '<p class="signuperror">Invalid username!</p>';
                    }else if($_GET['error'] == "passwordcheck"){
                        echo '<p class="signuperror">Your password does not match!</p>';
                    }else if($_GET['error'] == "usernametaken"){
                        echo '<p class="signuperror">Username is already taken</p>';
                    }
                 }else if (isset($_GET['signupresult'])) {
                    if($_GET['signupresult'] == "success"){
                        echo '<p class="signupsuccess">Sign up successful!</p>';
                    }
                }
            ?>
            <form action="signup.inc.php" method=post>
                <input type="text" name="newEmail" placeholder="Email" style="font-size:20px;"><br><br>
                <input type="text" name="newUsername" placeholder="Username" style="font-size:20px;"><br><br>
                <input type="text" name="newPassword" placeholder="Password" style="font-size:20px;"><br><br>
                <input type="text" name="retypePassword" placeholder="Retype Password" style="font-size:20px;"><br><br>
                <input type="text" name="course" placeholder="Country" style="font-size:20px;"><br><br>
                <input type="text" name="dept" placeholder="State" style="font-size:20px;"><br><br>
                <input type="text" name="gradYear" placeholder="DOB" style="font-size:20px;"><br><br>
                <button type="submit" id="btnSignupAction" name="btnSignupAction" style="font-size: 20px;">Signup</button>
            </form>
        </center>
    </div>


</body>
</html>