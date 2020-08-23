<?php
    $send = false;
    $showError = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];


        $to = "rizwan.ahmed8909@gmail.com";
        $message = "Name: " . $name  . "\nMessage: " . $msg;  
        $headers = "From: " . $email;

        if(mail($to, $subject, $message, $headers)){
            $send = true;
        }
        else{
            $send = false;
            $showError = "Can't send your message due to some issues"; 
        }
    }

  
        if($send){
            echo '<div class=" container alert bg-success alert-dismissible fade show text-white rounded-0 shadow " role="alert" style="max-width: 1000px;">
                    <strong>Success!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }

        if(!$send){
            echo '<div class=" container alert bg-danger alert-dismissible fade show text-white rounded-0 shadow " role="alert" style="max-width: 1000px;">
                    <strong>Failed!</strong>' . $showError .'.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }

?>