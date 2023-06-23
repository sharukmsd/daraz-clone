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

    .btn {
        background-color: #e26921;
        color: white;
    }

    #form-container {
        background-color: white;
    }
    </style>

</head>

<body id="body-main">
    <?php
            require_once "header.php";

            $_MONTHS = array("January", "February", "March", "April", "May", "June",
             "July", "August", "September", "October", "November", "December");

             require 'mysqli_connect.php';
            
            $IdsArr = [];
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

            $sql = "DELETE FROM cart WHERE c_id='$cus_Id'";

            if($conn->query($sql) != true){
                echo $conn->error;
            }

            for($i = 0; $i < count($IdsArr); $i++) {
                $sql = "INSERT INTO orders(c_id, p_id) VALUES('$cus_Id', '$IdsArr[$i]')";
                if($conn->query($sql) == true){
                    // echo "INSERTED INTO ORDERS ". $i;
                    $sql = "UPDATE products SET p_quantity=(p_quantity-1) WHERE p_id='$IdsArr[$i]'";
                    if($conn->query($sql) != true){
                        echo $conn->error;
                    }
                } else{
                    echo $conn->error;
                }  
            }

    ?>
    <div class="container" id="form-container">
        <h1 class="text-dark text-md-left p-md-4">Happy Shopping!</h1>

        <form class="border p-md-2" action="index.php" method="" enctype="multipart/form-data" onsubmit="">
            <h4 class="text-md-center text-secondary">Enter Your Card Information</h4>

            <div class="form-group">
                <label for="cardNum">Card Number:</label>
                <input type="text" class="form-control" id="cardNum" name="cardNum" placeholder="Enter Card Number"
                    maxlength="16" />
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="sl-months">Expiration Month:</label>
                    <select name="sl-months" id="sl-months" class="form-control">
                        <?php
                        foreach ($_MONTHS as $month) {
                            ?>
                        <option><?php echo $month; ?></option>
                        <?php
                        }
                    ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="sl-year">Expiration Year:</label>
                    <select name="sl-year" id="sl-year" class="form-control">
                        <?php
                        for ($i = date("Y"); $i < date("Y")+6; $i++) {
                            ?>
                        <option><?php echo $i; ?></option>
                        <?php
                        }
                    ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="zipCode">Zip Code:</label>
                <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Enter Zip Code"
                    maxlength="5" size="5" />
            </div>


            <div class="row justify-content-md-center">
                <button type="submit" class="btn my-md-3 col-3">
                    Pay Now
                </button>
            </div>
        </form>

    </div>

</body>
<footer>
    <?php require_once 'footer.html' ?>
</footer>

</html>