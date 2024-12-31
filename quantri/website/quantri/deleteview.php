<?php
  $delid = $_GET['id']; 
  require('../db/conn.php'); 
   $sql_str1 = "DELETE FROM order_details WHERE order_id=$delid"; 
   mysqli_query($conn, $sql_str1); 
   $sql_str2 = "DELETE FROM orders WHERE id=$delid"; 
   mysqli_query($conn, $sql_str2); 
  // Trở về trang liệt kê 
  header("location: listorders.php");
?>