<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Get the form data
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];

	// Check if all fields are filled in
	if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
		echo "All fields are required.";
	} else {
		// Check if the email is in a valid format
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Invalid email format.";
		} else {
			// Check if the password and confirm password fields match
			if ($password != $confirm_password) {
				echo "Passwords do not match.";
			} else {
				// Registration successful
				echo "Thank you for registering!";
			}
		}
	}
}
?>
