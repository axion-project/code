<?php

// Database connection details (replace with your own)
$host = "localhost";
$user = "your_username";
$password = "your_password";
$dbname = "newsletter";

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data (assuming form submission is successful)
$name = $_POST["name"];
$email = $_POST["email"];

// Prepare SQL statement
$sql = "INSERT INTO subscribers (name, email) VALUES (?, ?)";

$stmt = mysqli_prepare($conn, $sql);

// Bind parameters to prevent SQL injection
mysqli_stmt_bind_param($stmt, "ss", $name, $email);

// Execute statement
if (mysqli_stmt_execute($stmt)) {
  echo "You have been subscribed successfully!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_stmt_close($conn);
mysqli_close($conn);

?>
