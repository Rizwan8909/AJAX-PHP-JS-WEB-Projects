
<?php
include "include/db_connection.php";
session_start();
// Getting the data of user who is logged in
$current_user = $_SESSION['user_email'];
$get_curr_user = "UPDATE `users` SET `login` = 'Offline' WHERE `user_email`='$current_user'";
$run_curr_user = mysqli_query($conn, $get_curr_user);

if ($run_curr_user) {
    session_unset();
    echo "Logging you out....";
    session_destroy();
    header("Location:signin.php");
}



?>