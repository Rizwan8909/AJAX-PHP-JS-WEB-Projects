<?php
    include "include/db_connection.php";
    if(isset($_POST['sign_up']) && $_SERVER['REQUEST_METHOD'] == "POST"){
        $username = htmlentities(mysqli_real_escape_string($conn, $_POST['user_name']));
        $email = htmlentities(mysqli_real_escape_string($conn, $_POST['user_email']));
        $password = htmlentities(mysqli_real_escape_string($conn, $_POST['user_pass']));
        $country = htmlentities(mysqli_real_escape_string($conn, $_POST['user_country']));
        $gender = htmlentities(mysqli_real_escape_string($conn, $_POST['user_gender']));
        $rand = rand(1,2);

        if(empty($username)){
            echo "Please insert a username";
        }
        if(strlen($password)>8){
            echo "<small class='text-danger'>*Password must be less than or equal to 8 characters</small>";
            exit();
        }
        
        // Checking email if it is already exists in the database
        $check_email = "SELECT * FROM `users` WHERE `user_email` = '$email'";
        $run_email = mysqli_query($conn, $check_email);
        $count = mysqli_num_rows($run_email);
        if($count == 1){
            echo "<small class='text-danger'>*This email already exists please try with another one</small>";
            exit();
        }

        // Inserting a new user
        $insert_user = "INSERT INTO `users` (`user_name`, `user_email`, `user_pass`, `user_country`, `user_gender`, `user_profile`, `time`) VALUES 
                        ('$username', '$email', '$password', '$country', '$gender', '$rand', current_timestamp())";
        $run_user = mysqli_query($conn, $insert_user);

        if($run_user){
            // echo "<script>window.open('signin.php', '_self')</script>";
            echo "<small class='text-success'>*Your account has successfully created you can now <a href='signin.php'>login</a></small>";
        }
        else{
            echo "Something went wrong";
        }

    }
    
?>