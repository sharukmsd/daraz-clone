<style>
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

<div class="container mt-0">
    <div class="row" id="row">
        <?php
        require "mysqli_connect.php";
        
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>

        <div class="col-sm-2" id="">
            <div class="row" id="">
                <div class="col-sm-1" id=""></div>
                <div class="col-sm-11 p-md-2 mt-md-3 ml-md-2" id="card">
                    <a href="product.php?p_id=<?php echo $row['p_id']?>">
                        <?php
                    echo "
                        <img src='$row[p_image]' alt='mylogo' id='pro_img' height='150'>
                        <h6 class='pt-md-4 pb-md-2' id='title'>$row[p_name]</h6>
                        <h5 id='price' class='pb-md-1 border-top border-light'>Rs. $row[p_price]</h5>
                        "; ?>

                    </a>
                </div>
            </div>
        </div>


        <?php
            }
        }
    ?>
    </div>
</div>