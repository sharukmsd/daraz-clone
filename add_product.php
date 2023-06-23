<!DOCTYPE html>
<html>

<head>
    <title>Admin Daraz Replica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once 'libs/header-libs.html' ?>

    <style>
    #body-main {
        background-color: #ececec;
    }

    .btn {
        background-color: #e26921;
        color: white;
    }

    #form-container {
        background-color: white;
    }
    .error {
        color: red;
        font-size: small;
    }
    </style>

</head>

<body id="body-main">
    <?php
            require_once "admin_header.php";

            require "mysqli_connect.php";
            $categories = [];
            $sql = "SELECT cat_name FROM categories";

            $res = $conn->query($sql);

            if($res->num_rows > 0){
                while($row = $res->fetch_assoc()){
                    array_push($categories, $row['cat_name']);
                }
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["pPhoto"]["name"]);
                $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
                move_uploaded_file($_FILES["pPhoto"]["tmp_name"], $target_file);


                $_pPhoto = $target_file;
                $_pName= $_POST['pName'];
                $_pPrice = $_POST['pPrice'];
                $_pQuantity = $_POST['pQuantity'];
                $_pCat = $_POST['pCat'];
                $_pDesc = $_POST['pDesc'];

                $sql = "INSERT INTO products (p_name, p_image, p_description, p_price, p_quantity, p_category)
                        VALUES ('$_pName', '$_pPhoto', '$_pDesc', $_pPrice, $_pQuantity, '$_pCat')";
                if($conn->query($sql) != true){
                    echo $conn->error;
                }else{
                    header("Location: admin.php");
                }
            }
    ?>

    <div class="container mb-md-5 pb-md-5" id="form-container">
        <h1 class="text-dark text-md-left p-md-4">Add Product</h1>

        <form class="border p-md-2" action="add_product.php" method="post" enctype="multipart/form-data"
            onsubmit="return validate()">

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="pPhoto" name="pPhoto" />
                    <label class="custom-file-label" for="pPhoto">Select Product Image</label>
                    <span id="pPhotoErr" class="error"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="pName">Product Name:</label>
                <input type="text" class="form-control" id="pName" name="pName"
                    placeholder="e.g: Dollar Fountain Pen" />
                <span id="pNameErr" class="error"></span>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="pPrice">Price:</label>
                    <input type="number" class="form-control" id="pPrice" name="pPrice" placeholder="e.g: 10000" />
                    <span id="pPriceErr" class="error"></span>
                </div>

                <div class="form-group col-md-4">
                    <label for="pQuantity">Quantity:</label>
                    <input type="number" class="form-control" id="pQuantity" name="pQuantity" placeholder="e.g: 100" />
                    <span id="pQuantityErr" class="error"></span>
                </div>
                <div class="form-group col-md-4">
                    <label for="pCat">Category:</label>
                    <select class="form-control" id="pCat" name="pCat">
                        <option value="">---SELECT---</option>
                        <?php
                            foreach($categories as $categorie){
                                ?>
                        <option value="<?php echo $categorie; ?>"><?php echo $categorie; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <span id="pCatErr" class="error"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="pDesc">Description:</label>
                <textarea type="text" class="form-control" id="pDesc" name="pDesc"
                    placeholder="e.g: Gold nib, Steel body etc (Max 250 characters)"></textarea>
                <span id="pDescErr" class="error"></span>
            </div>

            <div class="row justify-content-md-center">
                <button type="submit" class="btn my-md-3 col-3">
                    ADD
                </button>
            </div>
        </form>

    </div>
    <script type="text/javascript" src="scripts/add-product.js"></script>
</body>
<footer>
    <?php require_once 'footer.html' ?>
</footer>

</html>