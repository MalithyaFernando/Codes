<?php 
    if (isset($_POST['login-submit'])) {
        include_once 'C:\xampp\htdocs\LoginSystem\database.php';

        $empid = $_POST['empid'];
        $password = $_POST['password'];
        
        $results = "SELECT * FROM users WHERE empid='$empid';";
        mysqli_query ($conn, $results);
        
        if ($results) {
            $pwdCheck = password_verify($password, $results['password']);

            if ($pwdCheck = true) {
                session_start();
                $_SESSION['logid'] = $results['empid'];
                if ($empid == 'SCS14032764') {
                    header("Location: adminUI.php");
                }
                else {
                    header("Location: signupForm.php?login=success");
                }
            }
            else {
                header("Location: loginForm.php?error=passwordIncorrect");
                exit();
            }
        }
        else {
            header("Location: loginForm.php?login=unsuccess");
            exit();
        }
    }
    else {
        header("Location: homePage.php");
    }
?>