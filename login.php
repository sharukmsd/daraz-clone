<!DOCTYPE html>
<html>

<head>
    <title>Daraz Replica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
          require_once 'libs/header-libs.html';
     ?>

    <style>
    #body-main {
        background-color: #ececec;
    }

    .btn {
        background-color: #f27123;
        color: white;
    }

    #form-container {
        background-color: white;
        height: 500px;
    }

    .error {
        color: red;
        font-size: small;
    }
    </style>

</head>

<body id="body-main">
    <?php
          require_once "header.php"; 

          if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                $_Email = $_POST['email'];
                $_Pwd = $_POST['pwd'];
                
                require 'mysqli_connect.php';

                $sql = "SELECT * FROM customer WHERE c_email='$_Email' AND c_password='$_Pwd';";
                $res = $conn->query($sql);

                if ($res->num_rows > 0) {
                    while ($row = $res->fetch_assoc()) {
                        session_start();
                        $_SESSION['c_id'] = $row['c_id'];
                        $_SESSION['c_name'] = $row['c_name'];
                        // $_SESSION['c_phone'] = $row['c_phone'];
                        // $_SESSION['c_password'] = $row['c_password'];
                        // $_SESSION['c_dob'] = $row['c_dob'];

                        header("Location: index.php");
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
        <h1 class="text-dark text-md-left p-md-4">Welcome to Daraz!</h1>

        <form class="border p-md-2" action="login.php" method="POST" onsubmit="return validate()">
            <h4 class="text-md-left text-secondary">Please login</h4>


            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control rounded-0" id="email" name="email"
                            placeholder="Plese Enter Your Email" />
                        <span id="emailErr" class="error"></span>
                    </div>


                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control rounded-0" id="pwd" name="pwd"
                            placeholder="Plese Enter Your Password" />
                        <span id="pwdErr" class="error"></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn mt-md-5 col-md-10 rounded-0">
                        LOGIN
                    </button>
                </div>
            </div>



        </form>
    </div>

    <script type="text/javascript" src="scripts/login.js"></script>
</body>
<footer>
    <?php require_once 'footer.html' ?>
</footer>

</html>

<form action=""></form>