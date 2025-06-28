<?php
session_start();
include('db.php'); // Your DB connection
$newpass = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
$email = $_SESSION['email'];
mysqli_query($conn, "UPDATE users SET password='$newpass' WHERE email='$email'");
echo "<script>alert('Password updated'); window.location='login.html';</script>";
?>