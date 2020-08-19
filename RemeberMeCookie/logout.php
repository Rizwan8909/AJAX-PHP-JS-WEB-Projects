<?php
    session_start();
    session_unset();
    session_destroy();
    $_SESSION['msg'] = "You are now logged out";
    header("location: login.php");
?>