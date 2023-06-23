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
        if(isset($_SESSION['adminUser'])){
?>

<div class="container">
    <div class="row">
        <div class="col-md-8"></div>
        <a href="#" class="col"><?php echo strtoupper($_SESSION['adminUser']) ?></a>
        <a href="admin_logout.php" class="col">LOGOUT</a>
    </div>
</div>

<?php
        }else{
            header("Location: admin_login.php");
        }
?>

<div class="row jumbotron mb-0 py-md-3" id="header-main">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <a href="admin.php">
            <img src="images/logos/mylogo.png" alt="Daraz" class="img-fluid" id="mylogo" width="135" height="42" />
        </a>
    </div>
</div>