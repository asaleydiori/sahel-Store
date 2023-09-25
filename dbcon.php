<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "sahel";


    $con = mysqli_connect($host,$username,$password,$db);

    if(!$con)
    {
        die("la connection a echoué : ".mysqli_connect_error());
    }
?>
