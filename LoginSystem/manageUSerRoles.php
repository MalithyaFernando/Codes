<?php 
    if (isset($_POST['manageUserRole-submit'])) {
    	if (isset($_POST['newUserRole-submit'])) {
	        header("Location: newUserRoleUI.php");
	    }
	    else if (isset($_POST['removeUserRole-submit'])) {
	        header("Location: removeUserRoleUI.php");
	    }
	    else if (isset($_POST['assignUserRole-submit'])) {
	        header("Location: assignUserRoleUI.php");
	    }
	    else if (isset($_POST['updateUserRole-submit'])) {
	        header("Location: updateUserRoleUI.php");
	    }
    }