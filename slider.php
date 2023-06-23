<style>
nav {
    background-color: white;

}

ul {
    list-style: none;
    padding: 0px;

}

a {
    color: black;
    text-decoration: none;
    font-size: 14px;
}

a:hover {
    text-decoration: none;
}

li {
    padding: 0.5px 0px 0.5px 5px;
}

li:hover {
    background-color: rgba(173, 211, 223, 0.603);
}

.carousel-inner img {
    width: 100%;
    height: 100%;
    cursor: pointer;
}
</style>
<?php
     require "mysqli_connect.php";
     $categories = [];
     $sql = "SELECT cat_name FROM categories";

     $res = $conn->query($sql);

     if($res->num_rows > 0){
         while($row = $res->fetch_assoc()){
             array_push($categories, $row['cat_name']);
         }
     }
?>
<div class="container p-0">
    <div class="row">
        <div class="col-md-3">
            <nav>
                <ul>
                    <?php
                        foreach($categories as $categorie){
                            ?>
                    <li>
                        <a href="category.php?cat=<?php echo urlencode($categorie)?>"><?php echo $categorie?></a>
                    </li>
                    <?php
                        } 
                    ?>

                </ul>
            </nav>
        </div>
        <div class="col-md-9 pl-md-0">
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/slide1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</div>