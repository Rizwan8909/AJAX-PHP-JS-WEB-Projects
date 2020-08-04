<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "login");
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        $sql = "SELECT * FROM `user124` WHERE `username`='$username' AND `password`='$password'";
        $result = mysqli_query($connect, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            echo $row['username'];
        }
    }
?>