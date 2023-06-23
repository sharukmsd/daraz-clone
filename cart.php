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

    #cart-list,
    .cart-total {
        background-color: white;
    }

    button {
        border: none;
        background-color: #eff0f5;
        color: grey;
        width: 28px;
        height: 28px;
    }

    input {
        border: none;
    }

    input:hover {
        border: 1px solid lightgrey;
    }

    #checkout-btn {
        border: none;
        background-color: #f57224;
        color: white;
    }
    </style>

</head>

<body class="bg-light">
    <?php
            require_once "header.php";
?>
    <div class="container bg-light mt-md-3 mb-md-5" id="main-container">
        <div class="row">
            <div class="col-md-7 mr-md-4 border border-light" id="cart-list">
                <div class="row mt-md-3">
                    <span class="col-md-9">Item(s)</span>
                    <span class="col-md-3">Price</span>
                </div>


                <?php
            require 'mysqli_connect.php';

            $IdsArr = [];
            $subTotal = 0;
            $cus_Id = 0;
            if (isset($_SESSION['c_id'])) {
                $cus_Id = (int)$_SESSION['c_id'];
            }
        

            $sql = "SELECT p_id FROM cart WHERE c_id='$cus_Id'";

            $res = $conn->query($sql);

            if($res->num_rows > 0){
                while($row = $res->fetch_assoc()){
                    array_push($IdsArr, (int)$row['p_id']);
                }
            }
            foreach($IdsArr as $id){
                // print $id;
                $sql = "SELECT * FROM products WHERE p_id='$id'";
                
                $res = $conn->query($sql);

                if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                        $subTotal += $row['p_price'];
            ?>


                <div class="row py-md-3 border-top border-light" id="prod-div<?php echo $row['p_id']?>">
                    <img src="<?php echo $row['p_image']?>" alt="Product Image" class="col-md-2">
                    <h5 class="col-md-7"><?php echo $row['p_name']?></h5>
                    <span id="price" class="col-md-2"><?php echo $row['p_price']?></span>
                    <button id="delete-btn" class="bg-light" onclick="
                        $('#prod-div<?php echo $row['p_id']?>').slideUp('fast', 'swing',
                        function(){
                                $.ajax({
                                    type: 'POST',
                                    url: 'delete_product_cart.php',
                                    data: {
                                        p_id:<?php echo $row['p_id']; ?>,
                                    },

                                    success: function() {
                                        console.log('Deleted!');
                                    }
                                });
                        });"><i class="fa fa-trash">
                    </i></button>
                </div>


                <?php
                    }
                }

            }
    ?>


            </div>

            <div class="cart-total col-md-4 pt-md-3 border border-light" id="">
                <h5 class="">Order Summary</h5>
                <div id="sub-total" class="row my-md-2 border-top border-light">
                    <span class="col-md-8 text-secondary">Sub total</span>
                    <span class="col-md-4">RS. <?php echo $subTotal; ?></span>
                </div>
                <div id="" class="row my-md-2">
                    <span class="col-md-8 text-secondary">Shipping Fee</span>
                    <span class="col-md-4">RS. 150</span>
                </div>
                <div id="" class="row mt-md-5 border-top border-warning">
                    <h5 class="col-md-8">Total</h5>
                    <h5 class="col-md-4">RS. <?php echo ($subTotal + 150); ?></h5>
                </div>
                <div id="" class="row">
                    <a class="col btn py-md-2 my-md-5 mx-md-1 rounded-0" id="checkout-btn">PROCEED TO CHECKOUT</a>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript'>
    $(document).ready(function() {
        $("#checkout-btn").click(function() {
            var c_id = "<?php echo $cus_Id; ?>";
            var sizeArr = "<?php echo count($IdsArr); ?>";

            if (c_id == 0) {
                alert("Please Login to continue");
            }else if(sizeArr == 0){
                alert("No products in the cart");
            } 
            else {
                //locate to order.php where take whole cart store as a new order and delete items from cart 
                //and get card info
                window.location = "order.php";
            }

        });
    });
    </script>
</body>
<footer>
    <?php require_once 'footer.html' ?>
</footer>

</html>