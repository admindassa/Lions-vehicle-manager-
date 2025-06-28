<?php
session_start();
include('db.php');

$email = $_POST['username'];
$pass = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($pass, $user['password'])) {
  $_SESSION['user_id'] = $user['id'];
  $_SESSION['company'] = $user['company'];
  $_SESSION['name'] = $user['name'];
  header("Location: dashboard.php");
} else {
  echo "<script>alert('Invalid credentials');history.back();</script>";
}
?>