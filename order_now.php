<?php
    $p_id = $_POST['p_id'];
    $CusId = $_POST['c_id'];
    
    require 'mysqli_connect.php';
        // echo $d;

        $sql = "INSERT INTO orders(c_id, p_id) VALUES('$CusId', '$p_id')";
        if($conn->query($sql) == true){
            $sql = "UPDATE products SET p_quantity = (p_quantity-1) WHERE p_id='$p_id'";
            $conn->query($sql);
        }
    $conn->close();
?>