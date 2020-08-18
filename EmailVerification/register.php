<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container" style="width: 27rem;">

            <h4 class="text-center">Create A new Account</h4>
            <p class="text-center">Create your free account now!</p>
            <button class="btn btn-danger rounded-0 btn-block font-weight-bold">Login with Google</button>
            <button class="btn btn-primary rounded-0 btn-block font-weight-bold">Login with Facebook</button>
            <hr>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control rounded-0" placeholder="Your Email" name="email" aria-label="email" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
                    </div>
                    <input type="text" class="form-control rounded-0" placeholder="Your Username" name="username" aria-label="username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="text" class="form-control rounded-0" placeholder="Your Password" name="password" aria-label="password" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="text" class="form-control rounded-0" placeholder="Confirm Password" name="cpassword" aria-label="cpassword" aria-describedby="basic-addon1">
                </div>


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text rounded-0" id="basic-addon1"><i class="fas fa-mobile"></i></span>
                    </div>
                    <input type="number" class="form-control rounded-0" placeholder="Your Mobile Number" name="mobile" aria-label="mobile" aria-describedby="basic-addon1">
                </div>

                <button type="submit" name="submit" class="btn btn-success rounded-0 btn-block">Register Now</button>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>