<?php
    $delid = $_GET['id'];

    //kết nối csdl
    require('../db/conn.php');
    $sql_str = "DELETE FROM categories WHERE id=$delid";
    mysqli_query($conn, $sql_str);

    //trở về trang liệt kê
    header("location: listcart.php");
?>