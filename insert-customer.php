<?php
session_start();
include('db.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$reg = $_POST['reg_number'];

mysqli_query($conn, "INSERT INTO customers (name, phone, address, reg_number) 
  VALUES ('$name','$phone','$address','$reg')");

// Get customer ID for vehicle link
$id = mysqli_insert_id($conn);
header("Location: add-vehicle.php?cust_id=$id");
?>