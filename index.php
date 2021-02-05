<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head-link.php" ?>
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <br> <br> <br> <br> <br>
    <div class="container login-container">
        <div class="row">
            <div class="col-lg-6 md-12" id="float-left">
                <div class="container">
                    <div class="image-down text-center">
                        <img src="image/arrow-down.png" alt="">
                    </div>
                    <br>
                    <h3 class="text-center">WELCOME TO</h3>
                    <h3 class="text-center">Car Rental</h3>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <a href="about.php">
                                <button class="btn btn-dark">About US</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-mb-12 col-sm-12" id="float-right">
                <h2 class="text-center">LOGIN</h2> <br>

                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyFields") {
                        echo '<div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>Please fill in all fields!</div>';
                    } else if ($_GET["error"] == "wrongPwd") {
                        echo '<div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>Wrong Password!</div>';
                    } else if ($_GET["error"] == "noUsers") {
                        echo '<div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>You Should Register First!</div>';
                    }
                }
                
                ?> 

                <form action="inc/login.inc.php" method="POST">

                    <div class="form-group row">
                        <div class="input-group col-lg-12 md-4 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input name="uName" type="text" class="form-control" placeholder="User Name OR Email-Address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-lg-12 md-4 mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-field" name="pass" type="password" class="form-control" placeholder="Password">
                        </div>
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="row text-center" id="btn">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
                            <button name="login" class="btn btn-dark" type="submit">Login</button>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
                            <button class="btn btn-dark" type="reset" id="reset-btn">Clear</button>
                        </div>
                    </div> <br> <br>
                    <div class="form-group row">
                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                            <p>New Member ? </p><a href=" signin.php" style="text-decoration: none; color: #f5f5f5"> &nbsp; Register </a>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>



    <?php include "script.php" ?>
    <script src="js/show-hide-psd.js"></script>
</body>

</html>