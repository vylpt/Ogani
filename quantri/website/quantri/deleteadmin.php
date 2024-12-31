<?php 
session_start();
$delid = $_GET['id'];

//kết nối csdl
require('../db/conn.php');
if ($_SESSION['user']['type'] != 'Admin'){
    echo "<h2?>Bạn không có quyền truy cập nội dung này</h2>";
    
  }else{
$sql_str = "DELETE FROM admins WHERE id=$delid";
mysqli_query($conn, $sql_str);

//trở về trang liệt kê
header("location: listuser.php");
  }
?>