<?php
session_start();
if ($_POST['otp'] == $_SESSION['otp']) {
  header("Location: reset-password.html");
} else {
  echo "<script>alert('Invalid OTP'); window.history.back();</script>";
}
?>