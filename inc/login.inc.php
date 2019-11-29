<?php

if (isset($_POST['login'])) {
    require 'config.inc.php';

    $uName = $_POST['uName'];
    $pass = $_POST['pass'];

    if (empty($uName) || empty($pass)) {
        header("Location: ../login.php?error=emptyFields&uName=" . $uName);
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uName=? OR uMail=?;";
        $stmt = mysqli_stmt_init($db);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlError");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt , "ss", $uName, $uName);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($pass, $row['pass']);
                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongPwd");
                    exit();
                } elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userID'] = $row['uid'];
                    $_SESSION['userName'] = $row['uName'];

                    header("Location: ../user.php?login=success");
                    exit();
                } else {
                    header("Location: ../login.php?error=wrongPwd");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=noUsers");
                exit();
            }
        }
    }

} else {
    header("Location: ../login.php");
    exit();
}