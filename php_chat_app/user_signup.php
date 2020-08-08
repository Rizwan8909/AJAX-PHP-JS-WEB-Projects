<?php
    include "/include/db_connection.php";
    if(isset($_POST['sign_up']) && $_SERVER['REQUEST_METHOD'] == "POST"){
        $username = htmlentities(mysqli_real_escape_string($conn, $_POST['user_name']));
        $email = htmlentities(mysqli_real_escape_string($conn, $_POST['user_email']));
        $password = htmlentities(mysqli_real_escape_string($conn, $_POST['user_pass']));
        $country = htmlentities(mysqli_real_escape_string($conn, $_POST['user_country']));
        $gender = htmlentities(mysqli_real_escape_string($conn, $_POST['user_gender']));
        $rand = rand(1,2);
    }
?>