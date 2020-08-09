<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Sign in</title>
</head>

<body class="body-class">
    <div class="container" style="width: 28rem;">
        <div class="card round-border border-0 shadow-lg my-5">

            <div class="card-header">
                <h5>Sign In</h5>
                <small>don't have an account? <a href="signup.php">sign up</a></small>
            </div>

            <div class="card-body signin-form">
                <form method="POST">
                    <div class="form-group">
                        <label for="email" class="ml-2 mb-0"><h6>Email</h6></label>
                        <input type="text" class="form-control round-border border-0 bg-light" id="email" name="email" placeholder="Enter your Email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="ml-2 mb-0"><h6>Password</h6></label>
                        <input type="password" class="form-control round-border border-0 bg-light" id="pass" name="pass" placeholder="Enter your Password" required>
                    </div>
                   
                    <button type="submit" class="btn btn-primary round-border my-2" id="sign_in" name="sign_in">Sign In</button>
                </form>

                <?php include "user_signin.php";?>
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