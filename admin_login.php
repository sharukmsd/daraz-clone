<!DOCTYPE html>
<html>

<head>
    <title>Admin Daraz Replica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once 'libs/header-libs.html' ?>

    <style>
    #header-main {
        background-color: white;
        border-radius: 0%;
    }

    #mylogo {
        cursor: pointer;
    }

    #body-main {
        background-color: #ececec;
    }
    .btn {
        background-color: #e26921;
        color: white;
    }
    #form-container{
        background-color: white;
        height: 500px;
    }
    </style>

</head>

<body id="body-main">

    <div class="row jumbotron mb-0 py-md-3" id="header-main">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <a href="admin.php">
                <img src="images/logos/mylogo.png" alt="Daraz" class="img-fluid" id="mylogo" width="135" height="42" />
            </a>
        </div>
    </div>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                $_uName = $_POST['uName'];
                $_Pwd = $_POST['pwd'];
                
                require 'mysqli_connect.php';

                $sql = "SELECT * FROM admin WHERE username='$_uName' AND password='$_Pwd';";
                $res = $conn->query($sql);

                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                        session_start();
                        $_SESSION['adminUser'] = $row['username'];

                        header("Location: admin.php");
                    }
                }else{

                    ?>

    <div class="alert alert-danger text-md-center">
        <strong>LOGIN ERROR!</strong>
    </div>

    <?php
                }
            }
    ?>




    <div class="container" id="form-container">
        <h1 class="text-dark text-md-left p-md-4">Welcome Back!</h1>

        <form class="border p-md-2" action="admin_login.php" method="POST" onsubmit="return validate()">
            <h4 class="text-md-center text-secondary">Please login</h4>



            <div class="form-group">
                <label for="uName">Username:</label>
                <input type="text" class="form-control rounded-0" id="uName" name="uName" placeholder="Enter Your Username" />
            </div>


            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control rounded-0" id="pwd" name="pwd" placeholder="Enter Password" />
            </div>

            <div class="row justify-content-md-center">
                <button type="submit" class="btn my-md-3 col-2 rounded-0">
                    LOGIN
                </button>
            </div>
        </form>
    </div>
</body>
<footer>
    <?php require_once 'footer.html' ?>
</footer>

</html>