<?php
    echo "<h1>Connection Checking</h1>";
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($servername, $username, $password);
    echo "Congratulations Database has been connected";

    if(!$conn){
        die("Failed to Connect" .mysqli_connect_error());
    }


?>