<?php
session_start();
$email = $_POST['email'];
$otp = rand(100000, 999999);
$_SESSION['otp'] = $otp;
$_SESSION['email'] = $email;

// Send OTP (use PHPMailer or mail())
// mail($email, "Your OTP", "Your One Time Password is $otp");

echo "<script>alert('OTP sent to your email'); window.location='verify-otp.html';</script>";
?>