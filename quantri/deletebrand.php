<?php
    $delid = $_GET['id'];

    //kết nối csdl
    require('../db/conn.php');
    $sql_str = "DELETE FROM brands WHERE id=$delid";
    //echo $sql_str; exit;
    mysqli_query($conn, $sql_str);

    //trở về trang liệt kê
    header("location: listbrand.php");
?>