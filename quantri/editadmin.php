<?php 

$id = $_GET['id'];

//kết nối csdl
require('../db/conn.php');
$sql_str = "SELECT * FROM admins WHERE id=$id";

$res = mysqli_query($conn, $sql_str);
$admin = mysqli_fetch_assoc($res);
if (isset ($_POST['btnUpdate'])){
    //nếu nút ctnh được nhận lấy name
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $type  = $_POST['type'];
    $sql_str2 = "UPDATE admins SET name='$name',email = '$email',
    phone= '$phone', address = '$address', type='$type' WHERE id=$id";
    mysqli_query($conn, $sql_str2);
    // chuyển listbrand
    header("location:listuser.php"); 
}else{
    require('includes/header.php');
    if ($_SESSION['user']['type'] != 'Admin'){
        echo "<h2?>Bạn không có quyền truy cập nội dung này</h2>";
        
      }else{
?>


<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Cập nhật thông tin người dùng</h1>
                            </div>
                            <form class="user" method="post" action="adduser.php" enctype="multipart/form-data"> 
                                <div class="form-group">
                                     <input type="text" class="form-control form-control-user"
                                                id="name" name="name" aria-describedby="emailHelp"
                                                placeholder="Tiêu đề người dùng (quản trị)" value="<?=$admin['name']?>">
                                </div>
                                <div class="form-group">
                                     <input type="text" class="form-control form-control-user"
                                                id="email" name="email" aria-describedby="emailHelp"
                                                placeholder="Email" value="<?=$admin['email']?>">
                                </div>
                                <div class="form-group">
                                     <input type="password" class="form-control form-control-user"
                                                id="password" name="password" aria-describedby="emailHelp"
                                                placeholder="Password" value="<?=$admin['password']?>">
                                </div>
                                <div class="form-group">
                                     <input type="text" class="form-control form-control-user"
                                                id="phone" name="phone" aria-describedby="emailHelp"
                                                placeholder="Số điện thoại" value="<?=$admin['phone']?>">
                                </div>
                                <div class="form-group">
                                     <input type="text" class="form-control form-control-user"
                                                id="address" name="address" aria-describedby="emailHelp"
                                                placeholder="Địa chỉ" value="<?=$admin['address']?>">
                                </div>
                                
                                
                                
                                <div class="form-group">
                                     <label class="form-label">Quyền:</label>

                                     <select class="form-control" name="type">
                                     <?php
                                            //require('../db/conn.php');
                                            $sql_str = "SELECT * FROM admins ORDER BY name";
                                            $result = mysqli_query($conn, $sql_str);
                                            while ($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <option value="<?php echo $admin['id'];?>"
                                        <?php
                                                if ($row['id']==$admin['type'])
                                                echo"selected";
                                            ?>><?php echo $row['name'];?></option>
                                        <?php
                                            }
                                        ?>
                                     </select>
                                </div>
                                
                                <button class="btn btn-primary">Cập nhật</button>
                                   
                            </form>
                            <hr>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
     

    


<?php
      }
require('includes/footer.php');
}
?>