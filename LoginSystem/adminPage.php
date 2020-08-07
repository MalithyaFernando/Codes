<?php 
    if (isset($_POST['manageUserRole-submit'])) {
        header("Location: manageUserRolesUI.php");
    }
    else if (isset($_POST['manageMedicalPolicy-submit'])) {
        header("Location: manageMedicalPolicyUI.php");
    }
    else if (isset($_POST['manageDegrees-submit'])) {
        header("Location: manageDegreesUI.php");
    }
    else if (isset($_POST['manageSessions-submit'])) {
        header("Location: manageSessionsUI.php");
    }
    else if (isset($_POST['manageMonthlySessions-submit'])) {
        header("Location: manageMonthlySessionsUI.php");
    }
    else if (isset($_POST['manageSemester-submit'])) {
        header("Location: manageSemesterUI.php");
    }
    else if (isset($_POST['manageHalls-submit'])) {
        header("Location: manageHallsUI.php");
    }
    else if (isset($_POST['manageDepartments-submit'])) {
        header("Location: manageDepartmentsUI.php");
    }
    else if (isset($_POST['manageDesignations-submit'])) {
        header("Location: manageDesignationsUI.php");
    }