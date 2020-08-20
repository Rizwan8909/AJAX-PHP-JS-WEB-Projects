<?php
include "db_connection.php";
// session_start();
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
    <title>Image Validation</title>
</head>

<body>


    <div class="container-fluid mx-auto">
        <div class="container my-5 " style="width: 27rem;">

            <?php
            $error = false;
            $error_msg = '';
            if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

                $name = htmlentities(mysqli_real_escape_string($conn, $_POST['name']));
                $image = $_FILES['img'];

                $file_name = $image['name'];
                $file_path = $image['tmp_name'];
                $fileerror = $image['error'];

                // From here validation work is started

                // Explode function will break the name into two when it will find '.' [it will seperate extension from the name] {will convert it into array after it will find '.'}
                $break = explode('.', $file_name);

                // It will check the exension by checking the last item of the array that is created on top and convert string into lower case
                $extension_check = strtolower(end($break));

                // Following are the array of valid extensions
                $valid_extensions = array('png', 'jpg', 'jpeg');




                if ($fileerror == 0) {
                    // Now checking wether the inserted file has valid extension or not
                    if (in_array($extension_check, $valid_extensions)) {
                        $dest_file = 'images/' . $file_name;
                        move_uploaded_file($file_path, $dest_file);

                        $insert = "INSERT INTO `img_validate` (`name`, `image`) VALUES ('$name', '$dest_file')";
                        $run = mysqli_query($conn, $insert);

                        if ($run) {
                            echo "<h5 class='text-success text-center'>Successfully inserted</h5>";
                        }
                    }
                    else{
                        $error = true;
                        $error_msg = "<small class='text-danger'>*Invalid image (only jpg, png , jpeg are allowed)</small>";
                    }
                }
            }
            ?>
            <h4 class="text-center">Image Validation</h4>
            <p class="text-center">It will allow only png, jpg, jpeg</p>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">


                <input type="text" class="form-control rounded-0 my-4" placeholder="Name" name="name" required>
                <input type="file" class="form-control rounded-0 my-4 p-1" name="img" required>
                <?php
                    if($error){
                        echo $error_msg;
                    }
                ?>
                <button type="submit" name="submit" class="btn btn-success rounded-0 btn-block my-2">Submit</button>
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