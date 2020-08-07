<html>
<head>
<title>Admin UI</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require "header.php";
    ?>
    <div class="formstyle">
    <h2>Welcome to the Admin UI </h2>
        <form action="adminPage.php" method="post">	
            <button type="submit" name="manageUserRole-submit">Manage User Roles</button>
            <br>
            <button type="submit" name="manageMedicalPolicy-submit">Manage Medical Policies</button>
            <br>
            <button type="submit" name="manageDegrees-submit">Manage Degrees</button>
            <br>
            <button type="submit" name="manageSessions-submit">Manage Sessions</button>
            <br>
            <button type="submit" name="manageMonthlySessions-submit">Manage Sessions Per Month</button>
            <br>
            <button type="submit" name="manageSemester-submit">Manage Semesters</button>
            <br>
            <button type="submit" name="manageHalls-submit">Manage Halls</button>
            <br>
            <button type="submit" name="manageDepartments-submit">Manage Departments</button>
            <br>
            <button type="submit" name="manageDesignations-submit">Manage Designations</button>
        </form>
    </div>
    <?php
        require "footer.php";
    ?>
</body>
</html>