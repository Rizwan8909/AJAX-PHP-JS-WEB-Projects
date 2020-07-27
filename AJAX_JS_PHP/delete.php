<?php
     include_once "db_connect.php";

    //  Getting JSON data
    $data = file_get_contents("php://input");

    // Converting JSON to array
    $mydata = json_decode($data, true);
    $stu_id = $mydata['sid'];

    // Deleting Query
    if(!empty($stu_id)){
        $sql = "DELETE FROM `student` WHERE `ID` = '$stu_id'";
        $result = $conn->query($sql);
    
        if($result){
            echo "Deleted Successfully";
        }
        else{
            echo "Something went wrong in Server";
        }
    }
    else{
        echo "Empty Field";
    }
?>