<?php
include "db_connection.php";
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid mx-auto">
        <div class="container my-5 " style="width: 27rem;">

            <h4 class="text-center">Login</h4>
            <p class="text-center">Login Here!</p>
            <button class="btn btn-danger rounded-0 btn-block font-weight-bold">Login with Google</button>
            <button class="btn btn-primary rounded-0 btn-block font-weight-bold">Login with Facebook</button>
            <hr>

            <?php
            if (isset($_SESSION['msg'])) {
                echo "<p class='text-success'>" . $_SESSION['msg'] . "</p>";
            } else {
                echo "";
            }
            ?>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control rounded-0" placeholder="Your Email" name="email" aria-label="email" aria-describedby="basic-addon1" required>
                </div>


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" class="form-control rounded-0" placeholder="Your Password" name="password" aria-label="password" aria-describedby="basic-addon1" required>
                </div>

                <button type="submit" name="submit" class="btn btn-success rounded-0 btn-block my-2">Login Now</button>
            </form>


            <?php
            if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

                $email = htmlentities(mysqli_real_escape_string($conn, $_POST['email']));
                $password = htmlentities(mysqli_real_escape_string($conn, $_POST['password']));

                $check_email = "SELECT * FROM `users` WHERE `email` = '$email'";
                $run_check = mysqli_query($conn, $check_email);
                $count = mysqli_num_rows($run_check);

                if ($count == 1) {
                    $row = mysqli_fetch_assoc($run_check);
                    $email = $row['email'];
                    $pass_db = $row['password'];
                    $pass_decode = password_verify($password, $pass_db);

                    if ($pass_decode) {
                        $login = "SELECT * FROM `users` WHERE `email` = '$email' AND `password`='$pass_decode' AND `status`='active'";
                        $run_login = mysqli_query($conn, $login);

                        if($run_login){
                            echo "<script>location.replace('home.php')</script>";
                        }
                    } else {
                        echo "<small class='text-danger'>Incorrect Password</small>";
                    }
                } else {
                    echo "<small class='text-danger'>Invalid Email</small>";
                }
            }
            ?>
            <p class="text-center">Don't have an account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>