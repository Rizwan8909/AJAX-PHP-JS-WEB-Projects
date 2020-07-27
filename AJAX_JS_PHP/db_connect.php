<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'oop_practice';

    $conn = new mysqli($servername, $username, $password, $db_name);

    if($conn->connect_error){
        die("Can't connect to database");
    }
  
?>