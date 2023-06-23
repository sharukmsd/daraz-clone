<!DOCTYPE html>
<html>

<head>
    <title>Daraz Replica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once 'libs/header-libs.html' ?>

    <style>
    #body-main {
        background-color: #ececec;
    }

    #prod-container {
        background-color: white;
    }

    #buy-btn {
        background-color: #2abbe8;
        color: white;
    }

    #add-to-cart-btn {
        background-color: #f57224;
        color: white;
    }

    #buy-btn,
    #add-to-cart-btn {
        border: none;
        border-radius: 0%;
        margin: 10px 0px 10px 0px;
    }

    #buy-btn:hover,
    #add-to-cart-btn:hover {
        cursor: pointer;
    }
    </style>

</head>

<body id="body-main">
    <?php
            require_once "header.php";
    // echo $_GET['p_id'];
    // echo $_GET['p_name'];
    // echo $_GET['p_price'];
    // echo $_GET['p_des'];
    // echo $_GET['p_image'];
    // echo $_GET['p_quantity'];
    // echo $_GET['category_id'];
    $cus_Id = 0;
            if (isset($_SESSION['c_id'])) {
                $cus_Id = (int)$_SESSION['c_id'];
            }

            require 'mysqli_connect.php';
            $sql = "SELECT * FROM products WHERE p_id='$_GET[p_id]'";
            $res = $conn->query($sql);
            if($res->num_rows > 0){
                $row = $res->fetch_assoc()
                    ?>
    <div class="container mt-md-3" id="prod-container">
        <div class="row">
            <div class="col-md-10">
                <div class="row  mb-md-5">
                    <div class="col-md-5 py-md-5 align-items-center border-bottom border-light" id="img-main-div">
                        <img src="<?php echo $row['p_image']; ?>" alt="Product Image" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <div class="row py-md-3 mt-md-5 border-bottom border-light">
                            <h3><?php echo $row['p_name']; ?></h3>
                        </div>
                        <div class="row py-md-3 border-bottom border-light">
                            <h2 id="price">Rs. <?php echo $row['p_price']; ?></h2>
                        </div>
                        <div class="row py-md-5">
                            <button class="btn mx-md-3 col" id="buy-btn">Buy Now</button>
                            <button class="btn mr-md-3 col" id="add-to-cart-btn">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 bg-light"></div>
        </div>
        <h5 class="mt-md-2 border-top border-light pt-md-3">Description:</h5>
        <p class="pt-md-3 pb-md-5"><?php echo $row['p_description']; ?></p>
    </div>
    <?php
            }
    ?>


    <script>
    $(document).ready(function() {
        $("#add-to-cart-btn").click(function() {
            var c_id = <?php echo $cus_Id; ?> ;
            if (c_id == 0) {
                alert("Please Login to continue");
            } else {
                var IdsArray = new Array();
                IdsArray.push( <?php echo $_GET['p_id'] ?> );
                console.log(IdsArray);

                jsonStr = JSON.stringify(IdsArray);
                $.ajax({
                    type: "POST",
                    url: "add_to_cart.php",
                    data: {
                        IdsArray: jsonStr,
                        CusId: c_id
                    },

                    success: function() {
                        alert("Added to cart!");
                    }
                });
            }
        });
        $("#buy-btn").click(function() {
            var c_id = <?php echo $cus_Id; ?> ;
            if (c_id == 0) {
                alert("Please Login to continue");
            } else {
                var p_id = <?php echo $_GET['p_id'] ?>;
                console.log(p_id);
                console.log(c_id);

                
                $.ajax({
                    type: "POST",
                    url: "order_now.php",
                    data: {
                        p_id: p_id,
                        CusId: c_id
                    },

                    success: function() {
                        window.location = "order.php";
                    }
                });
            }
        });
    });
    </script>
</body>
<footer>
    <?php require_once 'footer.html' ?>
</footer>

</html>