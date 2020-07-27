<?php
    include_once "db_connect.php";

    $sql = "SELECT * FROM `student`";
    $result = $conn->query($sql);
    $count = $result->num_rows;
    
    if($count>0){
        $data = array(); //Array for creating json to send to js file
        while($row = $result->fetch_assoc()){
            $data[] = $row;
    
        }   
    }

    // Converting array into json
    echo json_encode($data);
?>
