<style>
#wrapper {
    background-color: white;
    min-height: 700px;
}

#addProd {
    background-color: #e26921;
    color: white;
    border-radius: 0%;
}
</style>
<div class="container mt-md-2" id="wrapper">

    <div class="row">
        <div class="col-md-10"></div>
        <a href="add_product.php" class="btn col-md-2" id="addProd"><i class="fa fa-plus-circle mr-md-1"></i> Add
            Product</a>
    </div>

    <div class="row mt-md-3 p-md-2">
        <span class="col-md-6">Item(s)</span>
        <span class="col-md-2">Price</span>
        <span class="col-md-2">Quantity</span>
        <span class="col-md-1">Delete</span>
        <span class="col-md-1">Edit</span>
    </div>

    <?php
            require 'mysqli_connect.php';

                $sql = "SELECT * FROM products";
                
                $res = $conn->query($sql);

                if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){

            ?>



    <div class="row border-top border-light p-md-2" id="prod-div<?php echo $row['p_id']?>">
        <img src="<?php echo $row['p_image']?>" alt="Product Image" class="col-md-1 img-fluid">
        <h6 class="col-md-5 my-md-auto border-right border-light"><?php echo $row['p_name']?></h6>
        <span id="price" class="col-md-2 my-md-auto"><?php echo $row['p_price']?></span>
        <span id="quantity" class="col-md-2 my-md-auto"><?php echo $row['p_quantity']?></span>

        <a href="#" id="delete-btn" class="col-md-1 my-md-auto"  onclick="
        $('#prod-div<?php echo $row['p_id']?>').slideUp('fast', 'swing',
        function(){
                $.ajax({
                    type: 'POST',
                    url: 'delete_product.php',
                    data: {
                        p_id:<?php echo $row['p_id']; ?>,
                    },

                    success: function() {
                        console.log('Deleted!');
                    }
                });
        });">
        <i class="fa fa-trash"></i>
        </a>

        <a href="edit_product.php?p_id=<?php echo $row['p_id']?>" id="edit-btn" class="col-md-1 my-md-auto"><i
                class="fa fa-edit"></i></a>
    </div>


    <?php
                    }
                }
    ?>

</div>