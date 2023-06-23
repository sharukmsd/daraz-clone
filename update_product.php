<?php
    require 'mysqli_connect.php';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

                // $target_dir = "uploads/";
                // $target_file = $target_dir . basename($_FILES["pPhoto"]["name"]);
                // $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
                // move_uploaded_file($_FILES["pPhoto"]["tmp_name"], $target_file);


                // $_pPhoto = $target_file;
                $_pName= $_POST['pName'];
                $_pPrice = $_POST['pPrice'];
                $_pQuantity = $_POST['pQuantity'];
                $_pDesc = $_POST['pDesc'];
                $p_id = (int)$_POST['proid'];
                $sql = "UPDATE products SET 
                            p_name ='$_pName', 
                            p_description='$_pDesc', 
                            p_price=$_pPrice, 
                            p_quantity=$_pQuantity
                            WHERE p_id=$p_id";

                if($conn->query($sql) != true){
                    echo $conn->error;
                }else{
                    header("Location: admin.php");
                    echo $p_id;
                }
            }
?>