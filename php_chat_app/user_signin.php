<?php
    include "include/db_connection.php";
    session_start();
    if(isset($_POST['sign_in'])){
        $email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
        $password = htmlentities(mysqli_real_escape_string($conn, $_POST['pass']));
    
        $check_user = "SELECT * FROM `users` WHERE `user_email`='$email' AND `user_pass`='$password'";
        $run_user = mysqli_query($conn, $check_user);
        $count = mysqli_num_rows($run_user);
    
        if($count == 1){
            // Starting the session
            $_SESSION['user_email'] = $email;
    
            // Showing user online
            $show_online = "UPDATE `users` SET `login` = 'Online' WHERE `user_email` = '$email'";
            $run_show = mysqli_query($conn, $show_online);
    
            // Retrieving user details
            $user = $_SESSION['user_email'];
            $get_user = "SELECT * FROM `users` WHERE `user_email` = '$user'";
            $run = mysqli_query($conn, $get_user);
            $row = mysqli_fetch_assoc($run);
            $user_name = $row['user_name'];

            // Redirecting user to home page
            echo "<script>window.open('home.php', '_self')</script>";
        }
        else{
            echo "<small class='text-danger'>*Invalid email or password</small>";
        }

        
    }
