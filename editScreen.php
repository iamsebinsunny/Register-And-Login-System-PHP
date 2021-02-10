<?php
include "head-link.php" ;
session_start();
require 'inc/config.inc.php';
    
             if (isset($_GET["uid"])) {
                
                $uid = $_GET["uid"];
                $_SESSION['userID'] = $uid;
                }elseif ($_SESSION['userID']) {
                       $uid= $_SESSION['userID'];
                } else echo "no uid found";
                
 
$sql = "SELECT * FROM users WHERE uid = $uid";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($result)) { 
    
    foreach ($row as $field => $value) {
        if($field === 'fName') {
        $fName = $value;
      }
      if($field === 'lName') {
        $lName = $value;
      }
      if($field === 'uName') {
        $uName = $value;
      }
      if($field === 'phoneNo') {
        $phoneNo = $value;
      }
      if($field === 'uMail') {
        $uMail = $value;
      }
      if($field === 'pass') {
        $pass = $value;
      }
      

    }
    
}
?>
<body style="background: rgb(226,226,226);
background: linear-gradient(144deg, rgba(226,226,226,1) 32%, rgba(255,255,255,1) 97%);">
<?php include "navbar.php";?>

<link rel="stylesheet" href="css/editScreen.css">
  <div class="col-lg-6 md-12 mb-12 text-center container justify-content-center" style="background: #f1f1f166" id="float-right">
                <h2 class="text-center">UPDATE</h2> <br>

                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyFields") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please fill in all fiels!</div>';
                    } else if ($_GET["error"] == "invalidEmail") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Invalid Email Address!</div>';
                    } else if ($_GET["error"] == "pwdMatch") {
                        echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Password does not match!</div>';
                    } else if ($_GET["error"] == "userTaken") {
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
                ?>
                <form action="inc/editUser.inc.php" method="POST" class="text-center" enctype="multipart/form-data">
<input type='hidden' name='uid' value='<?php echo "$uid";?>'/>
                    <div class="form-group row">
                        <div class="input-group col-lg-6 col-md-6 col-sm-12">   
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                             <?php
                            if (isset($_GET['fName'])) {
                                $fName = $_GET['fName'];
                                echo '<input type="text" class="form-control" placeholder="First Name" name="fName" value="' . $fName . '">';
                            } else {
                                 $fName = $fName;
                                echo '<input type="text" class="form-control" placeholder="First Name" name="fName" value="' . $fName . '">';
                            }
                            ?>

                            
                            
                        </div>
                        <div class="input-group col-lg-6 col-md-6 col-sm-12 names">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <?php
                            if (isset($_GET['lName'])) {
                                $lName = $lName;
                                echo '<input type="text" class="form-control" placeholder="Last Name" name="lName" value="' . $lName . '">';
                            } else {
                                 $lName = $lName;
                                echo '<input type="text" class="form-control" placeholder="Last Name" name="lName" value="' . $lName . '">';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-lg-6 col-md-6 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <?php
                            if (isset($_GET['uName'])) {
                                $uName = $_GET['uName'];
                                echo '<input type="text" class="form-control" placeholder="User Name" name="uName" value="' . $uName . '">';
                            } else {
                                 $uName = $uName;
                                echo '<input type="text" class="form-control" placeholder="User Name" name="uName" value="' . $uName . '">';
                            }
                            ?>
                        </div>
                        <div class="input-group col-lg-6 col-md-6 col-sm-12 names">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <?php
                            if (isset($_GET['phoneNo'])) {
                                $phone = $_GET['phoneNo'];
                                echo '<input type="tel" class="form-control" placeholder="Contact Number" name="phoneNo" value="' . $phone . '">';
                            } else {
                                $phone = $phoneNo;
                                echo '<input type="tel" class="form-control" placeholder="Contact Number" name="phoneNo" value="' . $phone . '">';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <?php
                            if (isset($_GET['uMail'])) {
                                $uMail = $_GET['uMail'];
                                echo '<input type="text" class="form-control" placeholder="Email-Address" name="uMail" value="' . $uMail . '">';
                            } else {
                                $uMail = $uMail;
                                echo '<input type="text" class="form-control" placeholder="Email-Address" name="uMail" value="' . $uMail . '">';
                            }
                            ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-field1" type="password" class="form-control" placeholder="Password" name="pass" value="<?php echo  $pass ?>">
                        </div>
                        <span toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="form-group row">
                        <div class="input-group col-lg-12 col-md-12 col-mb-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password-field2" type="password" class="form-control" placeholder="Confirm Password" name="re_pass" value="<?php echo $pass ?>">
                        </div>
                        <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>

                    <div class="row" id="btn">
                        <div class="col-lg-6 col-md-6 col-sm-4 col-4 text-center">
                            <button class="btn btn-dark" type="submit" onclick="myFunction()" name="Update">Update</button>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-4 col-4 text-center">
                            <button class="btn btn-dark" type="reset" id="reset-btn">Reset</button>
                        </div>
                    </div> <br> <br>
                 

                    
                </form>
            </div>

<?php include "script.php" ?>

    <script src="js/show-hide-psd.js"></script>
    <script>function myFunction() {
  alert("Are you sure to update");
}</script>