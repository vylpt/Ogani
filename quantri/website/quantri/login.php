<?php 
session_start();
$errorMsg= "";
if (isset($_POST["btSubmit"])) {
    $email=$_POST["email"];
    $password=$_POST["password"];
    require_once("../db/conn.php");
    $sql = "SELECT * FROM admins WHERE email='$email' and password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        //echo "<h4>Đăng nhập thành công</h4>";
         $row = mysqli_fetch_assoc($result);
         $_SESSION['user'] = $row;
        header("location: index.php");
    }else{
        $errorMsg = "Không tìm thấy thông tin tài khoản trong hệ thống";
        require_once("includes/loginform.php");
    }
} else {
    require_once("includes/loginform.php");
 } ?>