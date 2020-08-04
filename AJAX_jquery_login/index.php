<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("location:home.php");
    }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>AJAX LOGIN!</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
</head>

<body class="bg-light">

    <div class="container">
        <div class="card mx-auto my-5 border-0 shadow" id="box" style="width: 25rem;">
            <div class="card-header">
                <h5>Login</h5>
            </div>
            <div class="card-body p-4">
                <form class="needs-validation" method="post" novalidate>
                    <div class="form-row my-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please fill the username field!
                        </div>
                    </div>

                    <div class="form-row my-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div class="invalid-feedback">
                            Please fill the password field.
                        </div>
                    </div>

                    <input type="button" class="btn btn-primary" id="login" name="login" value="Login">
                    <div id="error"></div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script> -->

    <script>
        $(document).ready(function(){
            $('#login').click(function(){
                var userName = $('#username').val;
                var pass = $('#password').val;

                if($.trim(userName).length > 0 && $.trim(pass).length > 0){
                    $.ajax({
                        url: "login.php",
                        method: "POST",
                        data: {username: userName, password: pass},
                        cache: false,
                        beforeSend: function(){
                            $('#login').val('Connecting.....');
                        },
                        success: function(data){
                            if(data){
                                $('body').load('home.php').hide().fadeIn(1500);
                            }
                            else{
                                var options = {
                                    distance: '40',
                                    direction: 'left',
                                    times: '3',
                                }
                                $('#box').effect("shake", options, 800)
                                $('#login').val("Login");
                                $('#error').html('<span class="text-danger">Invaled username or password</span>')
                            }
                        }                        
                    });
                }
                else{
                    return false;
                }
            });
        });
    </script>

</body>

</html>