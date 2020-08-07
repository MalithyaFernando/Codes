<?php 
    if (isset($_POST['userRole-submit'])) {
        include_once 'C:\xampp\htdocs\LoginSystem\database.php';

        $empid = $_POST['empid'];
        $userrole = $_POST['userRole'];
        
        $results = "SELECT * FROM users WHERE empid='$empid';";
        mysqli_query ($conn, $results);
        
        if ($results) {
            $sql = "UPDATE `users` SET `userRole`=[$userrole] WHERE empid='$empid';";
            mysqli_query ($conn, $sql);
            header("Location: assignUserRoleUI.php?=success");
        }
        else {
            header("Location: assignUserRoleUI.php?error=unsuccess");
        }
    }
?>