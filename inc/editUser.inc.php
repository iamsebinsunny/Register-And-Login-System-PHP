 

 <?php

             if (isset($_POST["Update"])) {
                require 'config.inc.php';

                $uName = $_POST["uName"];
                    $fName = $_POST["fName"];
                   
                }
                

                if(isset($_POST['uid'])) $uid=$_POST['uid'];
 

    $fName = mysqli_real_escape_string($db, $_POST['fName']);
    $lName = mysqli_real_escape_string($db, $_POST['lName']);
    $uName = mysqli_real_escape_string($db, $_POST['uName']);
    $phone = mysqli_real_escape_string($db, $_POST['phoneNo']);
    $uMail = mysqli_real_escape_string($db, $_POST['uMail']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
    $re_pass = mysqli_real_escape_string($db, $_POST['re_pass']);

     if (empty($fName) || empty($lName) || empty($uName) || empty($phone) || empty($uMail) || empty($pass) || empty($re_pass) ) {
        header("Location: ../editScreen.php?error=emptyFields&fName=" . $fName . "&lName=" . $lName . "&uName=" . $uName . "&mail=" . $uMail . "&phoneNo=" . $phone);
        exit();
    } elseif (!preg_match("#[A-Z]+#", $pass)) { // check the password does have at least 1 capital letter
        header("Location: ../editScreen.php?error=pwdNoUppercase&fName=" . $fName . "&lName=" . $lName . "&phoneNo=" . $phone . "&mail=" . $uMail . "&uName=" . $uName);
        exit();
    } elseif (!preg_match("#[a-z]+#", $pass)) { // check the password does have at least 1 lower case letter
        header("Location: ../editScreen.php?error=pwdNoLowercase&fName=" . $fName . "&lName=" . $lName . "&phoneNo=" . $phone . "&mail=" . $uMail . "&uName=" . $uName);
        exit();
    } elseif (!preg_match("#[0-9]+#", $pass)) { // check the password does have at least 1 lower case letter
        header("Location: ../editScreen.php?error=pwdNoNumber&fName=" . $fName . "&lName=" . $lName . "&phoneNo=" . $phone . "&mail=" . $uMail . "&uName=" . $uName);
        exit();
    } elseif ($pass !== $re_pass) {
        header("Location: ../editScreen.php?error=pwdMatch&fName=" . $fName . "&lName=" . $lName . "&phoneNo=" . $phone . "&mail=" . $uMail . "&uName=" . $uName);
        exit();
    } elseif (!filter_var($uMail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../editScreen.php?error=invalidEmail&fName=" . $fName . "&lName=" . $lName . "&phoneNo=" . $phone . "&uName=" . $uName);
        exit();
    }else{

      $sql = "UPDATE users SET fName='$fName',lName='$lName',uName='$uName',phoneNo='$phone',uMail='$uMail',pass='$pass' WHERE uid= '$uid'";

$result = mysqli_query($db, $sql);
   
   if(! $result ) {
      die('Could not update data: ' . mysqli_error($sql));
   }else{

     echo "Updated data successfully\n";

   header("location: ../adminHomeScreen.php");
 
   }
  
    }




?>



