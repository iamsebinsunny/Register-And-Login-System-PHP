<?php

if (isset($_POST['login'])) {
    require 'config.inc.php';

    $uName = $_POST['uName'];
    $pass = $_POST['pass'];

    if (empty($uName) || empty($pass)) {
        header("Location: ../index.php?error=emptyFields&uName=" . $uName);
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uName=? OR uMail=?;";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt , "ss", $uName, $uName);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($pass, $row['pass']);
                if ($pwdCheck == false) {
                    header("Location: ../index.php?error=wrongPwd");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userID'] = $row['uid'];
                    $_SESSION['userName'] = $row['uName'];
                    $_SESSION['firstName'] = $row['fName'];

                    if($_SESSION["userName"] != "admin") {
                         header("Location: ../userHomeScreen.php");
                         exit();
                        }else{
                      header("location: ../adminHomeScreen.php");
                    exit();}
                } else {
                    header("Location: ../index.php?error=wrongPwd");
                    exit();
                }
            } else {
                header("Location: ../index.php?error=noUsers");
                exit();
            }
        }
    }

} else {
    header("Location: ../index.php");
    exit();
}