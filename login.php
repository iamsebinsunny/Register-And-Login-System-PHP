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
                    <h6 class="text-center">MoonLight</h6>
                    <div class="form-group row">
                        <div class="col-lg-12 text-center">
                            <a href="about.php">
                                <button class="btn btn-primary">About US</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-mb-12 col-sm-12" id="float-right">
                <h2 class="text-center">Login</h2> <br>

                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyFields") {
                        echo '<div class="alert alert-danger text-center"><button type="button" class="close" data-dismiss="alert">&times;</button>Please fill in all fiels!</div>';
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
                        <div class="input-group col-lg-4 col-md-4 col-sm-6 col-6 text-left">
                            <button name="login" class="btn btn-primary" type="submit">Login</button>
                        </div>

                        <div class="input-group col-lg-4 col-md-4 col-sm-6 col-6 text-left">
                            <button class="btn btn-primary" type="reset" id="reset-btn">Reset</button>
                        </div>

                        <div class="input-group col-lg-4 col-md-4 col-sm-6 col-6 text-left home-btn">
                            <a href="index.php">
                                <button class="btn btn-success" type="button">Back Home</button>
                            </a>
                        </div>
                    </div> <br> <br>
                    <div class="form-group row">
                        <div class="input-group col-lg-12 col-md-12 col-sm-12">
                            <p>New Member ? </p><a href=" signin.php" style="text-decoration: none;"> &nbsp; Register </a>
                        </div>
                    </div>

                    <div class="text-center row home-btn-hide">
                        <a href="index.php" class="text-center">
                            <button class="btn btn-success" type="button">Back Home</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <?php include "script.php" ?>
    <script src="js/show-hide-psd.js"></script>
</body>

</html>