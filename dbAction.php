<?php

    $servername ="localhost";
    $dbUser="root";
    $dbPassword="";
    $db="plzdb";

    
    $conn = mysqli_connect($servername ,$dbUser, $dbPassword, $db);
    if(!$conn){
        die("Connection failed ".mysqli_connect_error());
    }
    //mysql_select_db($db);
?>