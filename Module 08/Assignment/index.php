<!DOCTYPE html>
<html>
<head>
	<title>Registration and Login Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="post" action="register.php">
		<label for="first_name">First Name:</label>
		<input type="text" id="first_name" name="first_name" required><br>
		<label for="last_name">Last Name:</label>
		<input type="text" id="last_name" name="last_name" required><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br>
		<input type="submit" value="Register">
	</form>
	<h1>Login Form</h1>
	<form method="post" action="login.php">
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>
