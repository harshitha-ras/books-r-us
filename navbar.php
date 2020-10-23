<?php
    session_start();
?>

<nav>
    <ul>
        <li class="logo"><a class="active" href="./index.php"><img src="images/smiley_books.png" height="20" width="40"></a></li>

        <li class="dropdown"><a href="#" class="dropbtn">Catalog</a>
            <div class="dropdown-content">
                <a href="#">Popular</a>
                <a href="#">Top</a>
                <a href="./allCommunities.php">All</a>
            </div>
        </li>
        <li><a href="./profile.html" id="profileTab" style="display:none;">Cart</a></li>
        <li><a href="./contactus.html">Contact Us</a></li>
        <li class="navbar-item"><a href="./aboutus.html">About</a></li>
        <li>
        <div class="login">
                <input type="text" name="search" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </li>
        
        <li>
        <?php
            if(isset($_SESSION['userID'])){
               echo '<div>
                        <form action="./logoutAction.php">
                            <button type="submit" id="btnLogout">Logout</button>
                        </form>
                    </div>';
            } else{  
            echo '<div class="login" id="btnLogin">
                    <div id="btnSignup" style="display:inline;">
                        <button ><a href="./signup.php">Signup</a></button>
                    </div>
                    <form action="./loginAction.php" style="display:inline;" method="post">
                        <input type="text" name="emailLogin" id="emailLogin" placeholder="Username">
                        <input type="text" name="passwordLogin" id="passwordLogin" placeholder="Password">
                        <button id="btnLogin" name="btnLogin">Login</button>
                    </form>
                  </div>';
            }
            ?>
        </li>
    </ul>
</nav>
<script>
    // function removeElement() {
    //     document.getElementById("btnLogin").style.display = "none";
    //     document.getElementById("btnSignup").style.display = "none";
    //     document.getElementById("btnLogout").style.display = "block";
    // }

    // function resetElement() {
    //     document.getElementById("btnLogin").style.display = "block";
    //     document.getElementById("btnSignup").style.display = "block";
    //     document.getElementById("btnLogin").style.display = "inline";
    //     document.getElementById("btnSignup").style.display = "inline";
    //     document.getElementById("btnLogout").style.display = "none";
    // }
    </script>