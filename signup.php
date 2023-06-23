<!DOCTYPE html>
<html>

<head>
    <title>Daraz Replica</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
          require_once 'libs/header-libs.html';
     ?>

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

    .error {
        color: red;
        font-size: small;
    }
    </style>

</head>

<body id="body-main">
    <?php
          require_once "header.php"; 

          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $_Name = $_POST['fName'] .' '. $_POST['lName'];
              $_Img = $_POST['photo'];
              $_Email = $_POST['email'];
              $_Pwd = $_POST['pwd'];
              $_Gender = $_POST['gender'];
              $_DOB = $_POST['dob'];
              $_Address = $_POST['adrs'];

              echo $_Gender;
              echo $_DOB;

              require 'mysqli_connect.php';

              $sql = "INSERT INTO customer (c_name, c_image, c_email, c_password, c_gender, c_dob, c_address) 
                        VALUES ('$_Name','$_Img', '$_Email', '$_Pwd', '$_Gender', '$_DOB', '$_Address')";

              if ($conn->query($sql) == true) {
                  $last_id = $conn->insert_id;
                  session_start();
                        
                  $_SESSION['c_id'] = $last_id;
                  $_SESSION['c_name'] = $_Name;
                        
                  header("Location: index.php");
              } else {
                  ?>

    <div class="alert alert-danger text-md-center">
        <strong>SIGNUP ERROR!</strong>
    </div>

    <?php
              }
          }
    ?>
    <div class="container" id="form-container">
        <h1 class="text-dark text-md-left p-md-4">Welcome to Daraz!</h1>

        <form class="border p-md-2" action="signup.php" method="post" enctype="multipart/form-data"
            onsubmit="return validate()">
            <h4 class="text-md-center text-secondary">Create your account</h4>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fName">First Name:</label>
                    <input type="text" class="form-control rounded-0" id="fName" name="fName" placeholder="Enter First Name" />
                    <span id="fNameErr" class="error"></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="lName">Last Name:</label>
                    <input type="text" class="form-control rounded-0" id="lName" name="lName" placeholder="Enter Last Name" />
                    <span id="lNameErr" class="error"></span>
                </div>
            </div>

            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="photo" name="photo" />
                    <label class="custom-file-label rounded-0" for="photo">Select Your Profile Photo</label>
                    <span id="photoErr" class="error"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control rounded-0" id="email" name="email" placeholder="Enter Your Email" />
                <span id="emailErr" class="error"></span>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control rounded-0" id="pwd" name="pwd" placeholder="Enter Password" />
                    <span id="pwdErr" class="error"></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="cPwd">Confirm Password:</label>
                    <input type="password" class="form-control rounded-0" id="cPwd" name="cPwd" placeholder="Conform Password" />
                    <span id="cPwdErr" class="error"></span>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Gender:</label>
                    <div class="row mx-md-2">
                        <div class="form-check col-md-3">
                            <input type="radio" name="gender" class="form-check-input" id="male" checked />
                            <label class="form-check-label"> Male </label>
                        </div>
                        <div class="form-check col-md-3">
                            <input type="radio" name="gender" class="form-check-input" id="female" />
                            <label class="form-check-label"> Female </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control rounded-0" id="dob" name="dob" />
                    <span id="dobErr" class="error"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="adrs">Address:</label>
                <input type="text" class="form-control rounded-0" id="adrs" name="adrs"
                    placeholder="e.g: Street No 46, Timber Market, LHR" />
                <span id="adrsErr" class="error"></span>
            </div>

            <div class="row justify-content-md-center">
                <button type="submit" class="btn my-md-3 col-3 rounded-0">
                    SIGNUP
                </button>
            </div>
        </form>

    </div>

    <script type="text/javascript" src="scripts/signup.js"></script>
</body>
<footer>
    <?php require_once 'footer.html' ?>
</footer>