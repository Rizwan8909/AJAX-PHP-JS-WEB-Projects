<?php
    include_once "db_connect.php";

    // Getting the from ajaxscript.js
    $data = stripslashes(file_get_contents("php://input"));

    // Converting JSOON to php array (json_decode) (Don't forget to type same object names)
    $mydata = json_decode($data, true);
    $name = $mydata['name'];
    $class = $mydata['class'];
    $marks = $mydata['marks'];

    // Insertion Process
    if(!empty($name) && !empty($class) && !empty($marks)){
        $sql = "INSERT INTO `student` (`name`, `class`, `marks`) VALUES ('$name', '$class', '$marks')";
        $result = $conn->query($sql);

        if($result){
            echo "Added Successfully";
        }
        else{
            echo "Something went wrong";
        }
    }
    else{
        echo "Please fill all the fields";
    }

?>