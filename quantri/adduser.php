<?php
  
  require('../db/conn.php');
   //lay dư lieu tu form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $type = $_POST['type'];
  $sql_str = "INSERT INTO `admins` 
  ( `name`, `email`, `password`,`phone`, `address`,`type`, `status`, `created_at`, `updated_at`) 
  VALUES 
  ( '$name', '$email','$password', '$phone','$address',  
  '$type', 'Active', NOW(), NOW());";
 
  mysqli_query($conn, $sql_str);
  header("location: listuser.php");
?>