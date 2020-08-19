<?php
    include "db_connection.php";
    session_start();
    if(isset($_GET['token'])){
        $token = $_GET['token'];

        $update = "UPDATE `users` SET `status` = 'active' WHERE `token` = '$token'";
        $run_update = mysqli_query($conn, $update);

        if($run_update){
            $_SESSION['msg'] = "Your account is now activated.";
            header("location: login.php");
        }
        else{
            $_SESSION['msg'] = "You are now logged out";
            header("location: login.php");
        }
    }
    else{
        $_SESSION['msg'] = "Can't activate your account";
        header("location: login.php");
    }
?>