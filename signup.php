<?php
include('db.php');

$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Check for existing email
$check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
if (mysqli_num_rows($check) > 0) {
  echo "<script>alert('Email already registered!'); history.back();</script>";
  exit();
}

// Insert user
mysqli_query($conn, "INSERT INTO users (name, company, email, password) VALUES ('$name', '$company', '$email', '$password')");
echo "<script>alert('Signup successful! Please login.'); window.location='login.html';</script>";
?>