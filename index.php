<!DOCTYPE html>
<html>
    <!----meta name="viewport" content="width=device-width, initial-scale=1"---->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="navbar.css">
    <script src="https://kit.fontawesome.com/486ebc0d41.js" crossorigin="anonymous"></script>

<head><title>Books-R-Us</title></head>
<body>
    <nav>
        <ul>
            <li class="logo"><a class="active" href="./index.html"><img src="images/smiley_books.png" height="40" width="60"></a></li>
    
            <li class="dropdown"><a href="catalog_page.html" class="dropbtn">Catalog</a>
                <div class="dropdown-content">
                    <a href="#">Popular</a>
                    <a href="#">Best Selling</a>
                    <a href="#">All</a>
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
                <!-- <div>
                    <form action="./logoutAction.php">
                        <button type="submit" id="btnLogout">Logout</button>
                    </form>
                </div> -->
                <div class="login" id="btnLogin">
                    <div id="btnSignup" style="display:inline;">
                        <button ><a href="./signup.html">Signup</a></button>
                    </div>
                    <form action="./loginAction.php" style="display:inline;" method="post">
                        <input type="text" name="emailLogin" id="emailLogin" placeholder="Username">
                        <input type="text" name="passwordLogin" id="passwordLogin" placeholder="Password">
                        <button id="btnLogin" name="btnLogin">Login</button>
                    </form>
                </div>
                
            </li>
        </ul>
    </nav>

    <header>
        <marquee><p><i>Coming soon to locations near you</i></p></marquee>
    </header>
     
    <img src="images/shelved_books.png" style="float:right;">
    <div class="jumbotron">
                <h1>Books-R-Us</h1>
                <hr>
                <p>Books for everyone! The one stop book store for you. Browse our special catalogs to view our books. Read an excerpt and add to cart!</p>
    </div>


    <div class="container">
        <div class="row row-content align-items-center">
            <div>
                <h3>This Month's Promotions</h3>
            </div>
            <div>
                <h2>September Discounts!</h2>
                <p>Browse these catalogs for September Discounts</p>
            </div>
        </div>


        <div class="row row-content align-items-center">
            <div>
                <h3>Best Sellers</h3>
            </div>
            <div >
                <h2></h2>
                <p>Featuring the best sellers list, from fantasies to horrors, from romances to action, find the best of them all here! Check out which books are selling like hotcakes!</p>
            </div>
        </div>

        <div class="row row-content align-items-center">
            <div>
                <h3>Highest Rated</h3>
                <p>Check out the most popular of books that take YOU to your wildest dreams </p>
            </div>
        </div>
    </div>
    <iframe width="780" height="427" src="https://www.youtube.com/embed/4R8CB0QqTA8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <footer class="footer">
        <div class="row">
            <div class="column" >
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./signup.html">Sign Up</a></li>
                    <li><a href="./catalog_page.html">Catalog</a></li>
                    <li><a href="./aboutus.html">About</a></li>
                    <li><a href="./contactus.html">Contact</a></li>
                </ul>
            </div>
            <div class="column" >
                <h5>Our Address</h5>
                  121, Clear Water Bay Road<br>
                  Chennai, Tamil Nadu<br>
                  India<br>
                  <i class="fa fa-phone fa-lg"></i>: +852 1234 5678<br><br>
                  <i class="fa fa-fax fa-lg"></i>: +852 8765 4321<br><br>
                  <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:books.r.us@gmail.com">books.r.us@gmail.com</a><br><br>
            </div>
        </div>        
        <center><p>© Copyright 2019 Books-R-Us</p></center>
    </footer>
   

</body>  
</html>