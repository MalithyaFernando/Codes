<?php
	require "header.php";
?>

<main>
	<link rel="stylesheet" href="style.css">
	<div class="formstyle">
	<h2>Log in </h2>
		<form action="login.php" method="post">	
			<input type="text" name="empid" placeholder="Your username" required>
			<input type="password" name="password" placeholder="Your password" required>
			<button type="submit" name="login-submit">Login</button>
		</form>
		<p>No account yet? <a href="signupForm.php">Signup</a></p>
	</div>
</main>

<?php
	require "footer.php";
?>