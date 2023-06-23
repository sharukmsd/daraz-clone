<?php

    $conn = new mysqli("localhost", "root", "", "daraz_db");

    if ($conn->connect_error) {
        die("connect fail" . $conn->connect_error);
    }
        
    // echo "conn success";
    // for($i = 9; $i < 39; $i++){
        // $sql = "INSERT INTO customer VALUES (1, 'Ali', '03032098765', 'email@edu.com', 'myPass', '12-12-12')";

        // if($conn->query($sql) == true){
        //     echo "HEllo";
        // }else{
        //     echo "hello";
        // }
    // }
?>