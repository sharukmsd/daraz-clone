<style>
#header-main {
    background-color: white;
    border-radius: 0%;
}

#mylogo {
    cursor: pointer;
}

#search-input {
    margin-right: 0%;
    border: none;
    border-radius: 2px 0px 0px 2px;
    width: 75%;
    background-color: #f5f5f5;
    height: 43px;
    font-size: 14px;
    font-weight: 500;
    padding: 10px;
}

#search-btn {
    margin-left: 0%;
    height: 43px;
    width: 6%;
    border: none;
    border-radius: 0px 2px 2px 0px;
    background-color: #f57224;
    color: white;
}

#cart {
    border: none;
    background-color: inherit;
    font-size: 26px;
    padding-left: 0px;
}

a {
    color: black;
    font-size: 15px;
}

a:hover {
    text-decoration: none;
    color: blue;
    cursor: pointer;
}
</style>

<script>
    function onvalidate() {
        //check if search string is empty
    }
</script>




<?php
        session_start();
        if(isset($_SESSION['c_id'])){
?>

<div class="container">
    <div class="row">
        <div class="col-md-8"></div>
        <a href="#" class="col"><?php echo strtoupper($_SESSION['c_name']) ?></a>
        <a href="logout.php" class="col">LOGOUT</a>
    </div>
</div>

<?php
        }else{
            
    ?>
<div class="container">
    <div class="row align-content-end">
        <div class="col-md-8"></div>
        <a href="signup.php" class="col" style="font-size:14px">SIGN UP</a>
        <a href="login.php" class="col" style="font-size:14px">LOGIN</a>
    </div>
</div>

<?php
        }
?>


<div class="row jumbotron mb-0 py-md-3" id="header-main">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <a href="index.php">
            <img src="images/logos/mylogo.png" alt="Daraz" class="img-fluid" id="mylogo" width="135" height="42" />
        </a>
    </div>
    <div class="col-md-7">
        <form action="search.php" method="get" id="search-form" onsubmit="return onvalidate()">
            <input type="text" placeholder="Search in Daraz" name="search-input" id="search-input" />
            <button type="submit" id="search-btn">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    <div class="col-md-2">
        <a id="cart" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
    </div>
</div>