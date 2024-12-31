<?php
    $delid = $_GET['id'];

    //kết nối csdl
    require('../db/conn.php');
    //tìm các sản phẩm và xoá
$sql1 = "SELECT images FROM products WHERE id=$delid";
$rs = mysqli_query($conn,$sql1);
$row = mysqli_fetch_assoc($rs);

//danh sách các Ảnh
$images_arr =  explode(';', $row['images']);
//xoá Ảnh
foreach($images_arr as $img){
    unlink($img);
}
    $sql_str = "DELETE FROM products WHERE id=$delid";
    mysqli_query($conn, $sql_str);

    //trở về trang liệt kê
    header("location: listsanpham.php");
?>