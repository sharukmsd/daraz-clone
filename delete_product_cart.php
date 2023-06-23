<?php
    require 'mysqli_connect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $sql= "DELETE FROM cart WHERE p_id='$_POST[p_id]'";

        if($conn->query($sql) != true){
            echo "ERROR";
        }else {
            $conn->close();
        }
    }
?>