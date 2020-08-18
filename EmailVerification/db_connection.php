<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "login";

    $conn = mysqli_connect($servername, $username, $password, $databasename);
    
    if(!$conn){
        die("Due to some issued can't connect to database --> " .mysqli_connect_error());
    }
?>