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
                else if ($empid == 'SCS14032425') {
                    header("Location: lecturerUI.php");
                }
                else if ($empid == 'SCS1234567') {
                    header("Location: attendanceMUI.php");
                }
                else if ($empid == 'SCS18000672') {
                    header("Location: hallAllocationMUI.php");
                }
                else if ($empid == 'SCS14000764') {
                    header("Location: mahapolaMUI.php");
                }
                else if ($empid == 'SCS19408578') {
                    header("Location: medicalMUI.php");
                }
                else if ($empid == 'SCS18000867') {
                    header("Location: recordsViwerUI.php");
                }
                else if ($empid == 'SCS14000856') {
                    header("Location: departmentHeadUI.php");
                }
                else if ($empid == 'SCS18765244') {
                    header("Location: medicalOfficerUI.php");
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