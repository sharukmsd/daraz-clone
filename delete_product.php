<?php
    require 'mysqli_connect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $sql= "DELETE FROM products WHERE p_id='$_POST[p_id]'";

        if($conn->query($sql) != true){
            echo "ERROR";
        }
    }
?>