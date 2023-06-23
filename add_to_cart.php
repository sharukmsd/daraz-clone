<?php
    $IdsArray = json_decode($_POST['IdsArray']);
    $CusId = json_decode($_POST['CusId']);
    
    require 'mysqli_connect.php';
    foreach($IdsArray as $d){
        // echo $d;

        $sql = "INSERT INTO cart VALUES('$CusId','$d')";
        if($conn->query($sql) == true){
            echo 'record inserted';
            $conn->close();
        }
    }
?>