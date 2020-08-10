<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Chat</title>
</head>

<body>
    <!-- As a link -->
    <nav class="navbar body-class navbar-dark">
        <a class="navbar-brand" href="#">Chat</a>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <!-- Left side -->
            <div class="col-md-3">

                <div class="card rounded-0">
                    <div class="card-body">

                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <img src="images/default-user.jpg" alt="" style="width: 40px; height:40px">
                                <h4 class="my-2">Chats</h4>
                            </div>

                            <div>
                                <a href="include/find_friends.php">
                                    <button class="btn btn-outline-secondary border-0 round-border" data-toggle="tooltip" data-placement="bottom" title="Find new friends" type="button" id="find_friends">
                                        <i class="fas fa-user-friends"></i>
                                    </button>
                                </a>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="card rounded-0 left-chat">
                    <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item border-0"><h6 class="text-muted">FRIENDS</h6></li>
                        <a href="" class="list-group-item list-group-item-action border-0 round-border">Dapibus ac facilisis in</a>
                        <li class="list-group-item list-group-item-action border-0 round-border">Morbi leo risus</li>
                        <li class="list-group-item list-group-item-action border-0 round-border">Porta ac consectetur ac</li>
                        <li class="list-group-item list-group-item-action border-0 round-border">Vestibulum at eros</li>
                        <!-- <?php //include "include/get_user_data.php"?> -->
                    </ul>

                    </div>


                </div>
            </div>

            <!-- Left side ends -->

            <div class="right-chat col-md-9">
                df
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