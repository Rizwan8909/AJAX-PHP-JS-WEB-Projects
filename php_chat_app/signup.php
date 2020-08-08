<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Create a new account</title>
</head>

<body class="body-class">
    <div class="container" style="width: 28rem;">
        <div class="card round-border border-0 shadow-lg my-5">

            <div class="card-header">
                <h5>Sign Up</h5>
                <small>Already have an account? <a href="signin.php">sign in</a></small>
            </div>

            <div class="card-body signin-form">
                <form method="POST">
                    <div class="form-group">
                        <label for="username" class="ml-2 mb-0">
                            <h6>Username</h6>
                        </label>
                        <input type="text" class="form-control round-border border-0 bg-light" id="user_name" name="user_name" placeholder="Enter your username" aria-describedby="emailHelp" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="ml-2 mb-0">
                            <h6>Email</h6>
                        </label>
                        <input type="text" class="form-control round-border border-0 bg-light" id="user_email" name="user_email" placeholder="Enter your Email" aria-describedby="emailHelp" required>
                    </div>

                    <div class="form-group">
                        <label for="user_pass" class="ml-2 mb-0">
                            <h6>Password</h6>
                        </label>
                        <input type="password" class="form-control round-border border-0 bg-light" id="user_pass" name="user_pass" placeholder="Enter your Password" required>
                    </div>

                    <div class="form-group">
                        <label for="user_country" class="ml-2 mb-0">
                            <h6>Country</h6>
                        </label>
                        <select name="user_country" id="user_country" class="form-control round-border border-0 bg-light">
                            <option value="">Pakistan</option>
                            <option value="">India</option>
                            <option value="">Bangladesh</option>
                            <option value="">Afghanistan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="user_country" class="ml-2 mb-0">
                            <h6>Gender</h6>
                        </label>
                        <select name="user_gender" id="user_gender" class="form-control round-border border-0 bg-light">
                            <option value="">Male</option>
                            <option value="">Female</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary round-border my-2" id="sign_up" name="sign_in">Sign Up</button>
                </form>

                <!-- <?php //include "signin_user.php";
                        ?> -->
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>