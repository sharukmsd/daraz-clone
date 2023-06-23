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

    #row {
        /* border-top: 1px solid grey; */
        background-color: #ececec;
    }

    #card {
        background-color: white;
        margin-bottom: 8px;
    }

    #pro_img {
        width: 100%;
    }

    #price {
        color: #f67224;
    }

    #card:hover {
        box-shadow: 0px 8px 4px 0px rgba(0, 0, 0, 0.2);
    }

    #no-result {
        height: 300px;
        width: 100%;
        text-align: center;
        padding: 150px 0;
    }

    #no-result-div {
        background-color: white;
    }

    #title {
        -webkit-line-clamp: 3;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        height: 90px;
        font-size: 15px;
        font-weight: 400;
        line-height: 22px;
        padding-top: 5px;
    }
    </style>

</head>

<body id="body-main">
    <?php
            require_once "header.php";
            $key = $_GET['cat'];
            if(!empty($key)){?>
    <div class="container mt-0">
        <div class="row" id="row">
            <?php
        require "mysqli_connect.php";
        
                $sql = "SELECT * FROM products WHERE p_category='$key'";

                $res = $conn->query($sql);
                
                $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>

            <div class="col-md-2" id="">
                <div class="row" id="">
                    <div class="col-md-1" id=""></div>
                    <div class="col-md-11 p-md-2 mt-md-3" id="card">
                        <a href="product.php?p_id=<?php echo $row['p_id']?>&p_name=<?php echo $row['p_name']?>
            &p_price=<?php echo $row['p_price']?>&p_des=<?php echo $row['p_description']?>
            &p_image=<?php echo $row['p_image']?>&p_quantity=<?php echo $row['p_quantity']?>
            &category_id=<?php echo $row['category_id']?>">
                            <?php
                    echo "
                        <img src='$row[p_image]' alt='mylogo' id='pro_img' height='150'>
                        <h6 class='pt-md-4 pb-md-2' id='title'>$row[p_name]</h6>
                        <h5 id='price' class='pb-md-1 border-top border-light'>Rs.$row[p_price]</h5>
                        "; ?>

                        </a>
                    </div>
                </div>
            </div>


            <?php
            }
        }else {
            ?>
            <div class="container" id="no-result-div">
                <p class="display-6" id="no-result">NO PRODUCT(S) BELONGS TO <strong><?php echo $key; ?></strong>
                    CATEGORY</p>
            </div>
            <?php            
        }
            }
    ?>
        </div>
    </div>

</body>
<footer>
    <?php require_once 'footer.html' ?>
</footer>

</html>