<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.html");
  exit();
}
$company = $_SESSION['company'];
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?php echo $company; ?> - Dashboard</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <h1><?php echo $company; ?> Dashboard</h1>
    <p>Welcome, <?php echo $name; ?>!</p>
  </header>

  <main>
    <ul class="dashboard-links">
      <li><a href="#">Manage Customers</a></li>
      <li><a href="#">Service Bookings</a></li>
      <li><a href="#">Inventory</a></li>
      <li><a href="#">Reports</a></li>
    </ul>
  </main>
</body>
</html>