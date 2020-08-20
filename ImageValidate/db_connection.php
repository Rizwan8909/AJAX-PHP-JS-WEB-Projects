<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'login';

    $conn = mysqli_connect($servername, $username, $password, $db_name) or die("can't connect to database");
?>