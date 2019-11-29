<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head-link.php" ?>
    <link rel="stylesheet" href="css/signin.css">
    <title>Register</title>
</head>

<body>
    <br> <br> <br>

    <div class="container signin-container text-center">
        <div class="row text-center">

            <div class="col-lg-6 md-12 text-center show-sm" id="float-left">
                <div class="container">
                    <div class="image-down text-center">
                        <img src="image/arrow-down.png" alt="">
                    </div>
                    <br>
                    <h3 class="text-center">WELCOME TO</h3>
                    <h6 class="text-center">MoonLight</h6> <br>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <a href="about.php">
                                <button class="btn btn-primary">About US</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 md-12 mb-12 text-center" id="float-right">
                <h2 class="text-center">Register</h2> <br>

                <?php 
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyFields" ) {
                            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please fill in all fiels!</div>';
                        } 
                        else if ($_GET["error"] == "invalidEmail") {
                            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Invalid Email Address!</div>';
                        } 
                        else if ($_GET["error"] == "pwdMatch") {
                            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Password does not match!</div>';
                        } 
                        else if ($_GET["error"] == "userTaken") {
                            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Username Has Already Taken!</div>';
                        } else if ($_GET["error"] == "pwdShortLength") {
                            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Password Should Contain At Least 8 Characters!</div>';
                        } else if ($_GET["error"] == "pwdNoUppercase") {
                            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Should Contain At Least 1 Uppercase Characters!</div>';
                        } else if ($_GET["error"] == "pwdNoLowercase") {
                            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Should Contain At Least 1 Lowercase Characters!</div>';
                        } else if ($_GET["error"] == "pwdNoNumber") {
                            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Should Contain At Least 1 Number!</div>';
                        }
                    } 
                    // else {
                    //         echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Sign Up Successfull !</div>';
                    // }
                ?> 
                <form action="inc/signup.inc.php" method="POST" class="text-center" enctype="multipart/form-data">

                    <div class="form-group row">
                        <div class="input-group col-lg-6 col-md-6 col-sm-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="First Name" name="fName" value="">
                        </div>
                        <div class="input-group col-lg-6 col-md-6 col-sm-12 names">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Last Name" name="lName" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-lg-6 col-md-6 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="User Name" name="uName" value="">
                        </div>
                        <div class="input-group col-lg-6 col-md-6 col-sm-12 names">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="tel" class="form-control" placeholder="Contact Number" name="contactNumber" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email-Address" name="uMail" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-field1" type="password" class="form-control" placeholder="Password" name="pass">
                        </div>
                        <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-field2" type="password" class="form-control" placeholder="Confirm Password" name="re_pass">
                        </div>
                        <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="row" id="btn">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-left">
                            <button class="btn btn-primary" type="submit" name="signup">Signup</button>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-left">
                            <button class="btn btn-primary" type="reset" id="reset-btn">Reset</button>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 text-left home-btn">
                            <a href="index.php">
                                <button class="btn btn-success" type="button">Back Home</button>
                            </a>
                        </div>
                    </div> <br> <br>
                    <div class="form-group row">
                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                            <p>Already A Member ? </p><a href="login.php" style="text-decoration: none;"> &nbsp; Login </a>
                        </div>
                    </div>

                    <div class="text-center col-lg-12 home-btn-hide">
                        <a href="index.php" class="text-center">
                            <button class="btn btn-success" type="button">Back Home</button>
                        </a>
                    </div>
                </form>
            </div>
            <br><br><br>
            <div class="col-lg-6 md-12 text-center hide-sm" id="float-left">
                <div class="container">
                    <h3 class="text-center">WELCOME TO</h3>
                    <h6 class="text-center">MoonLight</h6> <br>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <a href="about.php">
                                <button class="btn btn-primary">About US</button>
                            </a>
                        </div>
                    </div> <br> <br>
                    <div class="image-up text-center">
                        <img src="image/arrow-up.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include "script.php" ?>

    <script src="js/show-hide-psd.js"></script>
</body>

</html>