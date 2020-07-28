<?php
    include_once "db_connect.php";
    
    $data = file_get_contents("php://input");

    // Covert JSON into php array
    $mydata = json_decode($data, true);
    $stu_id = $mydata['sid'];

    $sql = "SELECT * FROM `student` WHERE `ID` = '$stu_id'";
    $result = $conn->query($sql);

    // No loop because of only one data or row
    $row = $result->fetch_assoc();

    // Now encding again
    echo json_encode($row);
    
?>