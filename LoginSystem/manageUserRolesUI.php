<?php
	require "header.php";
?>

<main>
	<link rel="stylesheet" href="style.css">
	<div class="formstyle">
		<h2>User Roles Management UI </h2>
		<form action="manageUserRoles.php" method="post">	
			<button type="submit" name="newUserRole-submit">Add a new user role</button>
            <br>
            <button type="submit" name="removeUserRole-submit">Remove a user role</button>
            <br>
            <button type="submit" name="assignUserRole-submit">Assign a user role to a user</button>
            <br>
            <button type="submit" name="updateUserRole-submit">Update the user role of a user</button>
            <br>
	</div>
</main>

<?php
	require "footer.php";
?>