<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $email = $_POST["email"];
  $password = $_POST["password"];
    // Check if both fields are filled in
}
if (empty($email) || empty($password)) {
	echo "Both email and password are required.";
} else {
	// code to check if the email and password are correct
	// For now, assume the login is successful and redirect to the welcome page
	$first_name = "John"; // TODO: Replace with actual first name from database
	header("Location: welcome.php?name=$first_name");
	exit();
}
